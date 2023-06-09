<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Http\Requests\StorePacienteRequest;
use App\Http\Requests\UpdatePacienteRequest;
use Illuminate\Support\Facades\DB;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //
        $pacientes = DB::table('pacientes')->get();
        //dd($medicos);
        return view('paciente.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePacienteRequest $request)
    {
        //
        DB::table('pacientes')->insert([
            'nombre' => $request["nombre"],
            'apellido' => $request["apellido"],
            'dni' => $request["dni"],
            'direccion' => $request["direccion"],
            'localidad' => $request["localidad"],
            'provincia' => $request["provincia"],
            'telefono' => $request["telefono"],
            'mail' => $request["mail"],
            'obrasocial' => $request["obrasocial"],
            'ocupacion' => $request["ocupacion"],
            
        ]);
        return redirect('/paciente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $pacientes = Paciente::find($id);
        return view('paciente.show', compact('pacientes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $pacientes = Paciente::find($id);
        //dd($medicos);
        return view('paciente.edit', compact('pacientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePacienteRequest $request, $id)
    {
        //
       // $request = request()->except(['_token','_method']);
        DB::table('pacientes')->where('id', $id)->update([
            'nombre' => $request["nombre"],
            'apellido' => $request["apellido"],
            'dni' => $request["dni"],
            'direccion' => $request["direccion"],
            'localidad' => $request["localidad"],
            'provincia' => $request["provincia"],
            'telefono' => $request["telefono"],
            'mail' => $request["mail"],
            'obrasocial' => $request["obrasocial"],
            'ocupacion' => $request["ocupacion"],
            
        ]);
        //dd($request);
        return redirect('/paciente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        DB::table('pacientes')
        ->where('id', $id)
        ->delete();

        return redirect('/paciente');
    }
}
