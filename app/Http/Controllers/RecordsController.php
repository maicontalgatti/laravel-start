<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class RecordsController extends Controller
{
    public function index():View
    {
        //return response('Hello, World!');
        return view('records.index');
    }
}
