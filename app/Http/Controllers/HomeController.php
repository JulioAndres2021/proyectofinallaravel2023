<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $medicos = DB::table('medicos')->get();
        $campofecha = now();
        $campoid = trim($request->get('campomedico'));
        $contarturnos = Turno::whereDate('fecha', '=', $campofecha)
        ->get();;
       // dd($contarturnos);
        return view('home', compact(['medicos','contarturnos']));
        //return view('home');
    }

    public function buscaturno(Request $request)
    {
        //RECIBIMOS EL NOMBRE QUE ESCRIBIMOS EN TEXTO y le sacamos los espacios en blanco
        $texto = trim($request->get('texto'));
        $fechaactual = now();
        $turnos = DB::table('turno')
        ->select('id','medico_id','paciente_id','fecha')
        ->where('nombre','like','%'.$texto.'%')
        ->orWhereDate('fecha','=', $fechaactual)
        ;
        //dd($usuarios);
        return view('/home', compact('turnos','texto'));
    }
    
}
