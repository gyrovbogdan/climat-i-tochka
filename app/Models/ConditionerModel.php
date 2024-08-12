<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Conditioner;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class ConditionerModel extends Model
{
    use HasFactory;

    public $timestamps = false;
    public function conditioner()
    {
        return $this->belongsTo(Conditioner::class);
    }

    public static function getResultsByQuery()
    {
        $whereCondition = function (Builder $query, $params) {
            foreach ($params as $paramKey) {
                $paramValue = request()->query($paramKey);
                if ($paramValue)
                    $query->whereIn($paramKey, is_array($paramValue) ? $paramValue : [$paramValue]);
            }
        };

        $conditionerParams = ['brand', 'country', 'type', 'inverter'];
        $modelParams = ['wi-fi', 'area'];

        $query = ConditionerModel::with('conditioner')
            ->whereHas('conditioner', function ($query) use ($whereCondition, $conditionerParams) {
                $whereCondition($query, $conditionerParams);

                $searchTerm = request()->query('search');
                if ($searchTerm)
                    $query->where('name', 'like', "%$searchTerm%");
            })->where(function ($query) use ($whereCondition, $modelParams) {
                $whereCondition($query, $modelParams);
            });

        $query->select(['*', DB::raw('IF(`promo_price` IS NOT NULL, `promo_price`, `price`) `sortOrder`')])
            ->orderBy('sortOrder', request()->query('sort') === 'desc' ? 'desc' : 'asc');

        return $query->paginate(12);
    }
}
