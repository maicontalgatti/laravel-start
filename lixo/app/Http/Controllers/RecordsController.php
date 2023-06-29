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
    public function people():View
    {
        //return response('Hello, World!');
        return view('records.people');
    }
    public function projects():View
    {
        //return response('Hello, World!');
        return view('records.projects');
    }
    public function vehicles():View
    {
        //return response('Hello, World!');
        return view('records.vehicles');
    }
    public function clients():View
    {
        //return response('Hello, World!');
        return view('records.clients');
    }
}
