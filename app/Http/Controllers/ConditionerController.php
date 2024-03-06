<?php

namespace App\Http\Controllers;

use App\Models\AdditionalService;
use Illuminate\Http\Request;
use App\Models\Conditioner;
use App\Models\ConditionerModel;
use App\Models\Service;
use Illuminate\Database\Eloquent\Builder;

class ConditionerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ConditionerModel $model)
    {
        $filter =
            [
                'area' => config('global.areas'),
                'type' => config('global.types'),
                'brand' => Conditioner::query()->distinct()->pluck('brand')->sort(),
            ];

        return view('web.sections.conditioner.index.index', [
            'models' => $model->getResultsByQuery(),
            'filter' => $filter
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('web.sections.conditioner.show.index', [
            'model' => ConditionerModel::with('conditioner')->findOrFail($id),
            'services' => Service::get(),
            'additionalServices' => AdditionalService::get(),
            'fromSeries' => Conditioner::with('conditionerModel')->whereHas('conditionerModel', function (Builder $query) use ($id) {
                $query->where('id', $id);
            })->get()
        ]);
    }
}
