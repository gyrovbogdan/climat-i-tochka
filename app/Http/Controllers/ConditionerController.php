<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conditioner;

class ConditionerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Conditioner $conditioner)
    {
        $valuesOfAttributes = [
            'brand' => $conditioner->getValuesOfAttribute('brand')->sort(),
            'country' => $conditioner->getValuesOfAttribute('country')->sort(),
            'area' => $conditioner->getValuesOfAttribute('area')->sort()
        ];

        $query = Conditioner::query();

        $conditions = ['country', 'brand', 'area'];
        foreach ($conditions as $condition)
            if (request()->query($condition))
                $query->whereIn($condition, request()->query($condition));

        if (request()->query('search'))
            $query->where('name', 'like', '%' . request()->query('search') . '%');

        return view('conditioners.index', [
            'conditioners' => $query->paginate(12), 'filter' => $valuesOfAttributes
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

        return view('conditioner.show', ['conditioner' => Conditioner::findOrFail($id)]);
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
