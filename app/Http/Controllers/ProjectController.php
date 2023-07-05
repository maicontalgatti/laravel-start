<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\projeto;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $projeto = Projeto::getById($id);
        $clientes = Cliente::all();

        //return view('records.people');
        return view('records.edit_project', [
            'projeto' => $projeto,
            'clientes' => $clientes
        ]);



    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function store(Request $request)
    {
        $data = $request->only(['numero','nome','cidade','estado','id_cliente','data_inicio_montagem_esperado','data_inicio_montagem_real','custo_montagem_esperado','custo_montagem_real']);
        Projeto::createProject($data);
        return redirect(route('records.projects'));
    }

    public function new()
    {
        //return view('records.form_project');
        $clientes = Cliente::all();

        //return view('records.people');
        return view('records.form_project', [
            'clientes' => $clientes
        ]);


    }
}
