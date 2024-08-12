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
    public function index()
    {
        $filterList =
            [
                'area' => config('global.areas'),
                'type' => config('global.types'),
                'brand' => Conditioner::query()->distinct()->pluck('brand')->sort(),
            ];

        $models = ConditionerModel::getResultsByQuery();
        return view('web.sections.conditioner.index.index', compact('models', 'filterList'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = ConditionerModel::findOrFail($id);
        $conditioner = $model->conditioner()->first();
        $fromSeries = $conditioner->conditionerModels()->get();

        $services = Service::get();
        $additionalServices = AdditionalService::get();

        return view(
            'web.sections.conditioner.show.index',
            compact('model', 'services', 'additionalServices', 'fromSeries', 'conditioner')
        );
    }
}
