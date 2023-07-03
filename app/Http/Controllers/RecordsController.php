<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RecordsController extends Controller
{
    public function index():View
    {
        //return response('Hello, World!');
        return view('records.index');
    }
    public function people()
    {
        //return response('Hello, World!');

        $pessoas = Pessoa::all();

        //return view('records.people');
        return view('records.people', [
            'pessoas' => $pessoas
        ]);
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
