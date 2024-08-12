<?php

namespace App\Http\Controllers;

use App\Models\AdditionalService;
use App\Models\ConditionerModel;

class HomeController extends Controller
{
    public function index()
    {
        $promoConditioner = ConditionerModel::with('conditioner')->where('is_promotional', true)->first();
        $promoService = AdditionalService::where('is_promotional', true)->first();
        return view('web.sections.welcome.index', compact('promoConditioner', 'promoService'));
    }
}
