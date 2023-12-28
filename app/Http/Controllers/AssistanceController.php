<?php

namespace App\Http\Controllers;

use App\Models\AssistenciaHoras;
use App\Models\Cliente_cigam;
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
        $clientes = Cliente_cigam::getAll();
        $pessoas = Pessoa::all();
        return view('assistance.new', [
            'projetos' => $projetos,
            'pessoas' => $pessoas,
            'clientes' => $clientes
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->only(['tipo_assistencia','status','garantia','data_chamado','data_atendimento','descricao','id_cliente','id_projetos','titulo','percentage']);
        $assistencia = assistencia::createAssistance($data);

        // Obtenha o ID da assistência recém-criada
        $id = $assistencia->id;

        $pessoas = Pessoa::all();
        // Redirecione para a rota com o ID
        //return redirect(route('assistance.index_horarios', ['id' => $id]));
        return view('assistance.new_hours', [
            'idParam' => $id,
            'pessoas' => $pessoas
            ]);
    }

    /* public function store(Request $request)
   {
       $data = $request->only(['tipo_assistencia','status','garantia','data_chamado','data_atendimento','descricao','id_cliente','id_projetos','titulo','percentage']);
       assistencia::createAssistance($data);

       return redirect(route('assistance.index'));
   }*/

    public function showIndexHorarios(Request $request){
       // $idParam = $request->input('id');

        // Passando o valor para a view
        //return view('assistance.new_hours', ['idParam' => $idParam]);
        return view('assistance.new_hours');
    }

    public function show(string $id)
    {
        $assistencia = assistencia::getById($id);
        $clientes = Cliente_cigam::all();
        $pessoas = Pessoa::all();;
        $projetos = projeto::all();

        //return view('records.people');
        return view('assistance.edit', [
            'assistencia' => $assistencia,
            'clientes' => $clientes,
            'pessoas' => $pessoas,
            'projetos' => $projetos
        ]);
    }

    public function update(Request $request, string $id)
    {
        $data = $request->only(['tipo_assistencia','status','garantia','quantidade_horas', 'horario_inicio','horario_fim','data_chamado','data_atendimento','descricao','id_cliente','id_pessoas','id_projetos','titulo','percentage']);
        $assistencia = assistencia::find($id);
        $assistencia->update($data);
        return redirect(route('assistance.index'));
    }
    public function salvaAjax(Request $request)
    {
        try {
            $dados = json_decode($request->input('dados'), true);

            // Itera sobre os dados e insere no banco
            foreach ($dados as $linha) {
                AssistenciaHoras::create($linha);
            }

            return response()->json(['mensagem' => 'Dados salvos com sucesso']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
