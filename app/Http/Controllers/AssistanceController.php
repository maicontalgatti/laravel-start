<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\Pessoa;
use App\Models\projeto;
use App\Models\assistencia;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AssistanceController extends Controller
{
    public function index():View
    {
        //Como estava feito (mas essa funciona e é bem mais simples)
          $assistencias = Assistencia::all();
          return view('assistance.index', [
               'assistencias' => $assistencias,
           ]);

    }

    public function new():View
    {
        $projetos = Projeto::all();
        $clientes = Cliente::all();
        $pessoas = Pessoa::all();
        return view('assistance.new', [
            'projetos' => $projetos,
            'pessoas' => $pessoas,
            'clientes' => $clientes
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->only(['tipo_assistencia','status','garantia','quantidade_horas', 'horario_inicio','horario_fim','data_chamado','data_atendimento','descricao','id_cliente','id_pessoas','id_projetos']);
        assistencia::createAssistance($data);
        return redirect(route('assistance.index'));
    }



}
