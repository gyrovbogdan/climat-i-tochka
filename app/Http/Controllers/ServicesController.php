<?php

namespace App\Http\Controllers;

use App\Models\AdditionalService;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('web.sections.services.index', ['services' => Service::get(), 'additionalServices' => AdditionalService::get()]);
    }
}
