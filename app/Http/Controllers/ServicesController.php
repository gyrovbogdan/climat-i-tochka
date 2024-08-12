<?php

namespace App\Http\Controllers;

use App\Models\AdditionalService;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::get();
        $additionalServices = AdditionalService::get();
        return view('web.sections.services.index', compact('services', 'additionalServices'));
    }
}
