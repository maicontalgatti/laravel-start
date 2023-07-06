<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\cliente;
use App\Models\projeto;
use Illuminate\Http\Request;

class ClientController extends Controller
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
        $data = $request->only(['nome', 'cidade', 'estado', 'telefone']);
        Cliente::createClient($data);
        return redirect(route('records.clients'));
    }

    public function new()
    {
        return view('records.form_client');

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::find($id);

        //return view('records.people');
        return view('records.edit_clients', [
            'cliente' => $cliente
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
        $data = $request->only(['nome','cidade','estado','telefone']);
        $cliente = cliente::find($id);
        $cliente->update($data);
        return redirect(route('records.clients'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
