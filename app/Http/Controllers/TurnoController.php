<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use App\Http\Requests\StoreTurnoRequest;
use App\Http\Requests\UpdateTurnoRequest;
use App\Models\Medico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TurnoController extends Controller
{
   
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $Traemedicos = Medico::all();
        $texto = trim($request->get('texto'));
        // funciona con las dos tablas
        $turnos = Turno::with('medicos')
        ->select('id','fecha','medico_id','t800','t815','t830','t845','t900','t915','t930','t945','t1000','t1015','t1030','t1045','t1100'
        ,'t1115','t1130','t1145','t1200','t1215','t1230','t1245','t1600','t1615','t1630','t1645','t1700','t1715','t1730','t1745','t1800'
        ,'t1815','t1830','t1845','t1900','t1915','t1930','t1945','t2000','t2015','t2030','t2045'
        )
        ->where('fecha','like','%'.$texto.'%')
        ->get();
       return view('turno.index', compact('turnos', 'texto', 'Traemedicos'));

       //RECIBIMOS EL NOMBRE QUE ESCRIBIMOS EN TEXTO y le sacamos los espacios en blanco
    //    $texto = trim($request->get('texto'));
    //    $todoslosregistros =  Turno::with('medicos')->get();
    //    $turnos = DB::table('turnos')
    //    ->select('id','fecha','medico_id')
    //    ->where('fecha','like','%'.$texto.'%')
    //    ->orwhere('dni','like','%'.$texto.'%')
    //    ->orwhere('apellido','like','%'.$texto.'%')
    //    ->orwhere('observaciones','like','%'.$texto.'%')
    //    ->orwhere('rasgos','like','%'.$texto.'%')
    //    ->orderby('apellido','asc')
    //   ->paginate(1);
       //dd($usuarios);
      // return view('turno.index', compact('turnos','texto','todoslosregistros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $pacientes = DB::table('pacientes')->paginate(5);
        $medicos = DB::table('medicos')->get();
        $fechaseleccionada =  trim($request->get('fecha'));
        //$turnos = DB::table('turnos')->whereDate('fecha', $fechaseleccionada)->get();
        $turnos = Turno::pluck('t800', 'id');
        return view('turno.create', compact('pacientes', 'turnos', 'medicos'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTurnoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Turno $turno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Turno $turno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTurnoRequest $request, Turno $turno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Turno $turno)
    {
        //
    }
}
