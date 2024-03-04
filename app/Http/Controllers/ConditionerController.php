<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conditioner;
use App\Models\ConditionerModel;

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

        return view('conditioners.index', [
            'models' => $model->getResultsByQuery(),
            'filter' => $filter
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('conditioner.show', ['model' => ConditionerModel::with('conditioner')->findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
