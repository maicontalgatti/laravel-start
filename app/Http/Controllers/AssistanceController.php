<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\projeto;
use App\Models\assistencia;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AssistanceController extends Controller
{
    public function index():View
    {

        $assistencia = assistencia::all();

        //return view('records.people');
        return view('assistance.index', [
            'assistencia' => $assistencia,
        ]);
        //return view('assistance.index');
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
        $data = $request->only(['tipo_assistencia','status','garantia','quantidade_horas','horario_inicio','horario_fim','data_chamado','data_atendimento','descricao','id_cliente','id_pessoas','id_projetos']);
        assistencia::createAssistance($data);
        return redirect(route('assistance.index'));
    }



}
