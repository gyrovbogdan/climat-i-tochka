<?php

namespace App\Http\Controllers;

use App\Models\AdditionalService;
use App\Models\Conditioner;
use App\Models\ConditionerModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.sections.welcome.index', ['model' => ConditionerModel::with('conditioner')->where('is_promotional', true)->first(), 'service' => AdditionalService::where('is_promotional', true)->first()]);
    }
}
