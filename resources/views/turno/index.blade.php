@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Página Principal') }}
                    <a class="btn btn-info" href="{{url('/home')}}">Volver</a>
                    <a class="btn btn-success" href="{{route('turno.create')}}">Nuevo Turno</a>
                </div><i class="fa fa-calendar" aria-hidden="true"></i>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('PORTAL DE TURNOS') }} --}}
                    {{-- <a href="{{url('home')}}></a> --}}
                        <!--LISTA DESPLEGABLES CON LOS TURNOS ASIGNADOS-->
                    <div class="container mt-3">
                        <h2>Seleccione un Médico</h2>
                        <p>Para agregar turnos, haga click en <strong> turnos</strong> y agregue uno nuevo</p>
                       
                          @csrf
                        
                       
                         <!--BUSCADOR-->
                         <div class="col-xl-12 text-center">
                            <p class="text-primary">Buscar Datos por</p> 
                            <p><kbd>Fecha ejemplo(MM-DD), también por año</<kbd></p>
                             <form action="{{route('turno.index')}}" method="get">
                                <div class="form-row">
                                    <div class="col-sm-12 my-3">
                                        <input type="text" name="texto" id="texto" value="{{$texto}}" >
                                    </div>
                                    <div class="col-auto my-2">
                                        <button type="submit" class="botonbuscar btn btn-primary text-bg-primary btn-lg"><i class="bitexto bi bi-search"></i></button>
                                        {{-- <input class="btn btn-primary text-bg-primary btn-lg" type="submit" value="Buscar"> --}}
                                    </div>

                                </div>
                            </form> 

                            {{-- <select name="nombremedicos" class="form-select form-select-lg">
                                @if(count($turnos)<=0)
                                  <option value="1">No hay Médicos</option>
                                 @else
                                    @foreach ($turnos as $turno)
                                      <option name="campomedico" value="{{ $turno->id }}">{{ $turno->medicos->nombre }}</option>
                                    @endforeach
                                 @endif
                               </select> --}}

                        </div>
                         <!--FIN BUSCADOR-->
                      </div>
                    <!--FIN LISTA DESPLEGABLES CON LOS TURNOS ASIGNADOS-->

                       <!--Tabla-->
                       <div class="table-responsive">
                        <h2 class="text-primary">Listado de Turnos para</h2>
                        <div>
                            @foreach ($turnos as $turno)
                                <table>
                                    <thead>
                                        <tr>
                                            
                                            <td class="text-justify"><h4>{{ $turno->medicos->nombre }}</h4></td>
                                            <td></td>
                                            <td><h4>- día:</h4> </td>
                                            <td><h4>{{ $turno->fecha }}</h4></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><a href="http://"><i class="bimostarturnomañana bi bi-pencil-square"></i></a></td>
                                            
                                        </tr>
                                    </thead>
                                </table>
                            
                            @endforeach
                            
                        </div>
                        
                            <table class="table table-responsive-xl mt-2">
                                <thead class="thead table-warning">
                                    <strong><kbd>TUNO MAÑANA</kbd></strong> 
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">8:00</th>
                                    <th scope="col">8:15</th>
                                    <th scope="col">8:30</th>
                                    <th scope="col">8:45</th>
                                    <th scope="col">9:00</th>
                                    <th scope="col">9:15</th>
                                    <th scope="col">9:30</th>
                                    <th scope="col">9:45</th>
                                    <th scope="col">10:00</th>
                                    <th scope="col">10:15</th>
                                    <th scope="col">10:30</th>
                                    <th scope="col">10:45</th>
                                    <th scope="col">11:00</th>
                                    <th scope="col">11:15</th>
                                    <th scope="col">11:30</th>
                                    <th scope="col">11:45</th>
                                    <th scope="col">12:00</th>
                                    <th scope="col">12:15</th>
                                    <th scope="col">12:30</th>
                                    <th scope="col">12:45</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($turnos as $turno)
                                                                      
                                <tr>
                                    <th scope="row">{{$turno->id}}</th>
                                    <td>
                                        @if($turno->t800 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t800 }}
                                        @endif  
                                        
                                    </td>
                                    <td>
                                        @if($turno->t815 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t815 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t830 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t830 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t845 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t845 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t900 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t900 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t915 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1915 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t930 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t930 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t945 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t945 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1000 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1000 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1015 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1015 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1030 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1030 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1045 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1045 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1100 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1100 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1115 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1115 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1130 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1130 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1145 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1145 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1200 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1200 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1215 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1215 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1230 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1230 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1245 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1245 }}
                                        @endif  
                                    </td>
                                </tr>
                              
                                </tbody>
                                @endforeach
                            </table>

                            <!--TURNO TARDE-->
                            <table class="table table-sm mt-2">
                                <thead class="thead table-danger">
                                    <strong><kbd>TUNO TARDE</kbd> </strong> 
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Médico</th>
                                    <th scope="col">16:00</th>
                                    <th scope="col">16:15</th>
                                    <th scope="col">16:30</th>
                                    <th scope="col">16:45</th>
                                    <th scope="col">17:00</th>
                                    <th scope="col">17:15</th>
                                    <th scope="col">17:30</th>
                                    <th scope="col">17:45</th>
                                    <th scope="col">18:00</th>
                                    <th scope="col">18:15</th>
                                    <th scope="col">18:30</th>
                                    <th scope="col">18:45</th>
                                    <th scope="col">19:00</th>
                                    <th scope="col">19:15</th>
                                    <th scope="col">19:30</th>
                                    <th scope="col">19:45</th>
                                    <th scope="col">20:00</th>
                                    <th scope="col">21:15</th>
                                    <th scope="col">21:30</th>
                                    <th scope="col">21:45</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($turnos as $turno)
                                                                      
                                <tr>
                                    <th scope="row">{{$turno->id}}</th>
                                    <td>{{ $turno->fecha }}</td>
                                    <td>{{ $turno->medicos->nombre }}</td>
                                    <td>
                                        @if($turno->t1600 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1600 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1615 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1615 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1630 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1630 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1645 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1645 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1700 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1700 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1715 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1715 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1730 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1730 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1745 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1745 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1800 == NULL)
                                            <span class="text-danger"><strong>SIN TURNO</strong></span>
                                          @else
                                            {{ $turno->t1800 }}
                                        @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1815 == NULL)
                                        <span class="text-danger"><strong>SIN TURNO</strong></span>
                                      @else
                                        {{ $turno->t1815 }}
                                    @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1830 == NULL)
                                        <span class="text-danger"><strong>SIN TURNO</strong></span>
                                      @else
                                        {{ $turno->t1830 }}
                                    @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1845 == NULL)
                                        <span class="text-danger"><strong>SIN TURNO</strong></span>
                                      @else
                                        {{ $turno->t1845 }}
                                    @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1900 == NULL)
                                        <span class="text-danger"><strong>SIN TURNO</strong></span>
                                      @else
                                        {{ $turno->t1900 }}
                                    @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1915 == NULL)
                                        <span class="text-danger"><strong>SIN TURNO</strong></span>
                                      @else
                                        {{ $turno->t1915 }}
                                    @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1930 == NULL)
                                        <span class="text-danger"><strong>SIN TURNO</strong></span>
                                      @else
                                        {{ $turno->t1930 }}
                                    @endif  
                                    </td>
                                    <td>
                                        @if($turno->t1945 == NULL)
                                        <span class="text-danger"><strong>SIN TURNO</strong></span>
                                      @else
                                        {{ $turno->t1945 }}
                                    @endif  
                                    </td>
                                    <td>
                                        @if($turno->t2000 == NULL)
                                        <span class="text-danger"><strong>SIN TURNO</strong></span>
                                      @else
                                        {{ $turno->t2000 }}
                                    @endif  
                                    </td>
                                    <td>
                                        @if($turno->t2015 == NULL)
                                        <span class="text-danger"><strong>SIN TURNO</strong></span>
                                      @else
                                        {{ $turno->t2015 }}
                                    @endif  
                                    </td>
                                    <td>
                                        @if($turno->t2030 == NULL)
                                        <span class="text-danger"><strong>SIN TURNO</strong></span>
                                      @else
                                        {{ $turno->t2030 }}
                                    @endif  
                                    </td>
                                    <td>
                                        @if($turno->t2045 == NULL)
                                        <span class="text-danger"><strong>SIN TURNO</strong></span>
                                      @else
                                        {{ $turno->t2045 }}
                                    @endif  
                                    </td>
                                </tr>

                                </tbody>
                                @endforeach
                            </table>
                       </div>   
                      
                       <!--FIN Tabla-->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
