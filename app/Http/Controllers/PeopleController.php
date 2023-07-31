<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\veiculo;
use Illuminate\Http\Request;

class PeopleController extends Controller
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
    public function store(Request $request)
    {
        $data = $request->only(['nome', 'funcao', 'setor', 'observacao']);
        Pessoa::createPessoa($data);
        return redirect(route('records.people'));
    }

    /**
     * Display the specified resource.
     */
    public function new()
    {
        return view('records.form_people');

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pessoa = pessoa::getById($id);
        //return view('records.people');
        return view('records.edit_people', [
            'pessoa' => $pessoa,
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
        $data = $request->only(['nome','setor','funcao','observacao']);
        $pessoa = pessoa::find($id);
        $pessoa->update($data);
        return redirect(route('records.people'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
