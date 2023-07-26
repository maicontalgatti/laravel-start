<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\projeto;
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
        $projetos = Projeto::all();
        $clientes = Cliente::all();
        //return view('records.people');
        return view('assistance.new', [
            'projetos' => $projetos,
            'clientes' => $clientes
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->only(['marca', 'modelo', 'placa', 'km_aquisicao', 'km_atual', 'per_troca_oleo_km', 'ultima_troca_oleo_km']);
        Veiculo::createVehicle($data);
        return redirect(route('records.vehicles'));
    }



}
