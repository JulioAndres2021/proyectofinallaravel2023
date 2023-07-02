<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Http\Requests\StoreMedicoRequest;
use App\Http\Requests\UpdateMedicoRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $medicos = DB::table('medicos')->get();
        //dd($medicos);
        return view('medico.index', compact('medicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('medico.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMedicoRequest $request)
    {
        $campos=[
            
            'nombre' => 'required', 'string', 'max:50',
                'especialidad' => 'required', 'string', 'max:50',
                'tm1' => 'required', 'string', 'max:15',
                'tm2' => 'required', 'string', 'max:15',
                'tt1' => 'required', 'string', 'max:15',
                'tt2' => 'required', 'string', 'max:15',
                'matricula' => 'required', 'string', 'max:50',
                'atiende' => 'required', 'string', 'max:2',
                'cada' => 'required', 'string', 'max:2',
            
            
        ];
        
        $mensaje=[
            'required'=>'Falta :attribute , éste campo es requerido',
        ];
        $this->validate($request, $campos, $mensaje);
        //
        DB::table('medicos')->insert([
            'nombre' => $request["nombre"],
            'especialidad' => $request["especialidad"],
            'tm1' => $request["tm1"],
            'tm2' => $request["tm2"],
            'tt1' => $request["tt1"],
            'tt2' => $request["tt2"],
            'lunes' => $request["lunes"],
            'martes' => $request["martes"],
            'miercoles' => $request["miercoles"],
            'jueves' => $request["jueves"],
            'viernes' => $request["viernes"],
            'sabado' => $request["sabado"],
            'atiende' => $request["atiende"],
            'matricula' => $request["matricula"],
            'cada' => $request["cada"],
            'created_at' => now(),
        ]);
         //MENSAJE PARA EL USUARIO
       session()->flash('exito','Los datos fueron grabados exitosamente.!');
        return redirect('medico');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $medicos = Medico::find($id);
        return view('medico.show', compact('medicos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $medicos = Medico::find($id);
        //dd($medicos);
        return view('medico.edit', compact('medicos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicoRequest $request, Medico $id)
    {
        // 
        // $datos = request()->validate([
        //     'nombre' => ['required', 'string', 'max:50'],
        //         'especialidad' => ['required', 'string', 'max:50'],
        //         'horarios' => ['required', 'string', 'max:100'],
        //          'lunes' => ['required'] ,
        //          'martes' => ['required'],
        //          'miercoles' => ['required'],
        //          'jueves' => ['required'],
        //          'viernes' => ['required'],
        //          'sabado' => ['required'],
        //         'atiende' => ['required', 'string', 'max:10'],
        //         'matricula' => ['required', 'string', 'max:50'],
        //         'cada' => ['required', 'string', 'max:10'],
        // ]);
        
        DB::table('medicos')->where('id', $id)->update([
             'nombre' => $request["nombre"],
             'especialidad' => $request["especialidad"],
             'horarios' => $request["horarios"],
             'lunes' => $request["lunes"],
             'martes' => $request["martes"],
             'miercoles' => $request["miercoles"],
             'jueves' => $request["jueves"],
             'viernes' => $request["viernes"],
             'sabado' => $request["sabado"],
             'atiende' => $request["atiende"],
             'matricula' => $request["matricula"],
             'cada' => $request["cada"],
         ]);
               //MENSAJE PARA EL USUARIO
        session()->flash('update','Los datos fueron actualizados correctamente.!');
         //dd($datos);
         return redirect('/medico');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
         //
         DB::table('medicos')
         ->where('id', $id)
         ->delete();
        //MENSAJE PARA EL USUARIO
        session()->flash('warning','El medico fué borrado correctamente.!');
         return redirect('/medico');
    }
}
