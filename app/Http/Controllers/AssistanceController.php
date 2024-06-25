<?php

namespace App\Http\Controllers;

use App\Models\AssistenciaHoras;
use App\Models\Cliente_cigam;
use App\Models\Pessoa;
use App\Models\projeto;
use App\Models\assistencia;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;

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
        // Obtém os dados da requisição
        $data = $request->only(['tipo_assistencia', 'status', 'garantia', 'data_chamado', 'data_atendimento', 'descricao', 'id_cliente', 'id_projetos', 'titulo', 'percentage']);

        // Adiciona o valor estático para 'horario_inicio'
        $data['horario_inicio'] = '00:00';
        // Adiciona o valor estático para 'horario_fim'
        $data['horario_fim'] = '00:00';
        // Adiciona o valor estático para 'horario_fim'
        $data['horario_fim'] = '00:00';

        // Cria a assistência e obtém o ID da assistência recém-criada
        $assistencia = assistencia::createAssistance($data);
        $id = $assistencia->id;

        // Redireciona para a rota com o ID
        return Redirect::route('assistance.redirect', ['id' => $id]);
    }

    public function redirectWithId($id)
    {
        // Obtém os dados necessários para o redirecionamento (por exemplo, a lista de pessoas)
        $pessoas = Pessoa::all();

        //$assistencias_horarios = AssistenciaHoras::all();
        $assistencias_horarios = AssistenciaHoras::getByCondition('id_assistencia', $id);

        $tecnicos = AssistenciaHoras::getTecnicosPorAssistencia($id);

        // Redireciona para a próxima tela com os parâmetros necessários
        return view('assistance.new_hours', [
            'idParam' => $id,
            'pessoas' => $pessoas,
            'assistencias_horarios' => $assistencias_horarios,
            'tecnicos' => $tecnicos
        ])->with('success','Assistência criada com sucesso.');
    }

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
        $pessoas = Pessoa::all();
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
    public function salvaAjax(Request $request, $idAssistencia)
    {
        try {
            $dados = json_decode($request->input('dados'), true);

            // Itera sobre os dados e insere no banco
            foreach ($dados as $linha) {
                AssistenciaHoras::create($linha);
            }

            // Realiza a consulta para obter os dados
            $dados_horarios = AssistenciaHoras::getByCondition('id_assistencia', $idAssistencia);

            // Realiza a consulta para obter os dados
            $tecnicos = AssistenciaHoras::getTecnicosPorAssistencia($idAssistencia);

            // Retorna a resposta JSON incluindo os dados da consulta
            return response()->json([
                'mensagem' => 'Dados salvos com sucesso',
                'dados_horarios' => $dados_horarios,
                'tecnicos' => $tecnicos,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
