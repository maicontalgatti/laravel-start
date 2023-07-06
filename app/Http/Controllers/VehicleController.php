<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\projeto;
use App\Models\veiculo;
use Illuminate\Http\Request;

class VehicleController extends Controller
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
        $data = $request->only(['marca', 'modelo', 'placa', 'km_aquisicao', 'km_atual', 'per_troca_oleo_km', 'ultima_troca_oleo_km']);
        Veiculo::createVehicle($data);
        return redirect(route('records.vehicles'));
    }


    public function new(Request $request)
    {
        return view('records.form_vehicle');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $veiculo = veiculo::getById($id);

        //return view('records.people');
        return view('records.edit_vehicle', [
            'veiculo' => $veiculo,
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
        $data = $request->only(['marca', 'modelo', 'placa', 'km_aquisicao', 'km_atual', 'per_troca_oleo_km', 'ultima_troca_oleo_km']);
        $veiculo = veiculo::find($id);
        $veiculo->update($data);
        return redirect(route('records.vehicles'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
