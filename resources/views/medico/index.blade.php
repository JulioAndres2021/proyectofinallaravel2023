@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header mr-3">{{ __('Página Médico') }}
                    <a class="btn btn-info" href="{{url('/home')}}">Volver</a>
                    <a class="btn btn-success" href="{{route('medico.create')}}">crear</a>
                </div>

                <div class="card-body">
                    @if(Session::get('exito'))
                        <div class="alert alert-success alert-dismissible fade show mt-2 mb-2" role="alert">
                            <strong>Información.!</strong> {{Session::get('exito')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <!--WARNING-->
                        @if(Session::get('warning'))
                        <div class="alert alert-danger alert-dismissible fade show mt-2 mb-2" role="alert">
                            <strong>Información.!</strong> {{Session::get('warning')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if(Session::get('update'))
                        <div class="alert alert-danger alert-dismissible fade show mt-2 mb-2" role="alert">
                            <strong>Información.!</strong> {{Session::get('update')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- {{ __('PORTAL DEL MEDICO') }} 
                    para  convertir los datos fecha
                    {{ \Carbon\Carbon::parse($alumnos->fecha_nacimiento)->format('d/m/Y') }} --}}
                    {{-- {{ \Carbon\Carbon::parse(now())->isoFormat('dddd') }} --}}
                    {{-- @if (\Carbon\Carbon::parse(now())->isoFormat('dddd') == 'Friday')
                        Viernes
                    @endif     --}}

                     <?php 
                     setlocale(LC_TIME,"es_ES");
                    //Establecer la información local en castellano de España
                        echo strftime("<font size=20<font color='red'> Hoy es %D </font>>");
                     ?>
                    <!--PANEL DERECHO-->
          <div class="col-12">
            <div class="table-responsive">
              <table class="table ">
                <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Horario Mañana</th>
                    <th scope="col">Horario Tarde</th>
                    <th scope="col">Lunes</th>
                    <th scope="col">Martes</th>
                    <th scope="col">Miércoles</th>
                    <th scope="col">Jueves</th>
                    <th scope="col">Viernes</th>
                    <th scope="col">Sábado</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                     <!--VERIFICAMOS SI HAY RESULTADO, SI NO MOSTRAMOS MENSAJE-->
                     @if(count($medicos)<=0)
                     <tr>
                         <td coldspan="6" class="text-danger">NO HAY RESULTADO CON ESA BUSQUEDA</td>
                     </tr>    
                 @else
                    @foreach ($medicos as $medico)
                    <tr>
                        <td>{{$medico->nombre}}</td>
                        <td>{{$medico->especialidad}}</td>
                        <td>
                            @if ($medico->tm1 == 'No Atiende' || $medico->tm2 == 'No Atiende')
                               <span class="text-capitalize badge rounded-pill bg-danger"> no atiende</span> 
                            @else
                            <span class="badge rounded-pill bg-primary">{{$medico->tm1}} a {{$medico->tm2}}</span>
                            @endif
                                                       
                        </td>
                        <td>
                            @if ($medico->tt1 == 'No Atiende' || $medico->tt2 == 'No Atiende')
                               <span class="text-capitalize rounded-pill bg-danger"> No Atiende</span> 
                            @else
                            <span class="badge rounded-pill bg-primary">{{$medico->tt1}} a {{$medico->tt2}}</span>  
                            @endif
                                                       
                        </td>
                        @if ($medico->lunes == 'SI')
                             <td class="text-success">{{$medico->lunes}}</td>
                        @elseif ($medico->lunes == '')
                            <td class="text-danger">NO</td>
                        @endif
                        @if ($medico->martes == 'SI')
                             <td class="text-success">{{$medico->martes}}</td>
                        @elseif ($medico->martes == '')
                            <td class="text-danger">NO</td>
                        @endif
                        @if ($medico->miercoles == 'SI')
                             <td class="text-success">{{$medico->miercoles}}</td>
                        @elseif ($medico->miercoles == '')
                            <td class="text-danger">NO</td>
                        @endif
                        @if ($medico->jueves == 'SI')
                            <td class="text-success">{{$medico->jueves}}</td>
                        @elseif ($medico->jueves == '')
                        <td class="text-danger">NO</td>
                        @endif
                        @if ($medico->viernes == 'SI')
                             <td class="text-success">{{$medico->viernes}}</td>
                        @elseif ($medico->viernes == '')
                            <td class="text-danger">NO</td>
                        @endif
                        @if ($medico->sabado == 'SI')
                             <td class="text-success">{{$medico->sabado}}</td>
                        @elseif ($medico->sabado == '')
                            <td class="text-danger">NO</td>
                        @endif
                        
                        <td>
                            <a href="{{ url('medico/'.$medico->id .'/edit') }}">
                                <button class="btn btn-warning">Editar</button>
                            </a>                
                        </td>
                        <td>
                            <a href="{{ url('medico/'.$medico ->id) }}">							
                                <button class="btn btn-success">Ver</button>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ url("medico/{$medico->id}") }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Quieres borrar éste médico?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach  
              @endif            
                </tbody>
              </table>
            </div>
          </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection