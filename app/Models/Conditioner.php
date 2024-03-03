<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conditioner extends Model
{
    use HasFactory;

    protected $casts = ['images' => 'array'];
    public function getResultsByQuery()
    {
        $query = Conditioner::query();
        $params = ['country', 'brand', 'area'];

        foreach ($params as $paramKey) {
            $paramValue = request()->query($paramKey);
            if ($paramValue)
                $query->whereIn($paramKey, $paramValue);
        }

        $searchTerm = request()->query('search');
        if ($searchTerm)
            $query->where('name', 'like', "%$searchTerm%");

        return $query->paginate(12);
    }

    public function getValuesOfAttribute($column)
    {
        return $this::query()->distinct()->pluck($column);
    }

    public function getValuesOfAttributes(array $attributes)
    {
        foreach ($attributes as $attribute)
            $result[$attribute] = $this->getValuesOfAttribute($attribute)->sort();

        return $result;
    }
}
