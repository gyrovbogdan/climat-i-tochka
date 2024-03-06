<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class VentilationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('web.sections.ventilation.index', ['contacts' => Contact::get()]);
    }
}
