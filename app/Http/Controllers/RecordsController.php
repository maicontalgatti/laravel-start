<?php

namespace App\Http\Controllers;

use App\Models\Cliente_cigam;
use App\Models\Pessoa;
use App\Models\projeto;
use App\Models\veiculo;
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
        //return view('records.projects');

        $projetos = Projeto::all();
        //return view('records.people');
        return view('records.projects', [
            'projetos' => $projetos
        ]);

    }
    public function vehicles()
    {
        //return response('Hello, World!');
        //return view('records.clients');

        $veiculos = Veiculo::all();

        //return view('records.people');
        return view('records.vehicles', [
            'veiculos' => $veiculos
        ]);
    }
    public function clients()
    {
        $clientes = Cliente_cigam::getAll();

        return view('records.clients', [
            'clientes' => $clientes
        ]);
    }
}
