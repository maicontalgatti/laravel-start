<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AssistanceController extends Controller
{
    public function index():View
    {
        //return response('Hello, World!');
        return view('assistance.index');
    }

    public function new():View
    {
        //return response('Hello, World!');
        return view('assistance.new');
    }




}
