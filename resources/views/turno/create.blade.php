@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Página Principal') }}
                    <a class="btn btn-info" href="{{url('/turno')}}">Volver</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{--{{ __('CREAR TURNOS') }}
                     <a href="{{url('home')}}></a> --}}
                    <h3> <p class="text-center" style="background: lightblue; font-weight: bold; padding: 25px; border-left:8px solid blue; border-top-left-radius:8px; border-bottom-left-radius:8px;">

                      <!--LISTA DESPLEGABLES CON LOS TURNOS ASIGNADOS-->
                    <div class="container mt-3">
                      <h2>Seleccione un Médico</h2>
                      <p>Para agregar turnos, haga click en <strong> turnos</strong> y agregue uno nuevo</p>
                      <form action="{{ url('/home') }}" method="post" >	
                        @csrf
                       <select name="nombremedicos" class="form-select form-select-lg">
                        @if(count($medicos)<=0)
                          <option value="1">No hay Médicos</option>
                         @else
                            @foreach ($medicos as $medico)
                              <option name="campomedico" value="{{ $medico->id }}">{{ $medico->nombre }}</option>
                            @endforeach
                         @endif
                       </select>
                      </form>    
                    </div>
                  <!--FIN LISTA DESPLEGABLES CON LOS TURNOS ASIGNADOS-->

                        Seleccione una Fecha
                        {{ date('d/m/Y')}}
                        <form action="{{route('turno.create')}}" method="GET">
                          @csrf
                          <input type="text" name="fecha" id="fecha" value="{{date('d/m/Y')}}"></h3>
                          <button type="submit">Seleccionar</button>
                        </form>
                       
                    </p>
                    
                    <div class="container">
                     
                        <div class="card" >
                            <div class="card-header" style="background: rgb(189, 242, 209); font-weight: bold; padding: 10px; border-left:8px solid rgb(40, 194, 32); border-top-left-radius:8px; border-bottom-left-radius:8px;">
                               Seleccione un Paciente
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <div class="">
                                        <input type="text" class="mr-3" name="buscarpaciente"  id="buscarpaciente">
                                    <button class="btn btn-primary " type="submit">Buscar Paciente</button>
                                    </div>
                                    
                                    <!--TABLA DE PACIENTES-->
                                    <div class="col-12">
                                        <div class="table-responsive">
                                          <table class="tablapacientes table table-hover" id="tablapaciente">
                                            <thead>
                                              <tr id="datospaciente">
                                                <th scope="col">#</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Apellido</th>
                                                <th scope="col">DNI</th>
                                                {{-- <th scope="col">Dirección</th>
                                                <th scope="col">Localidad</th>
                                                <th scope="col">Provincia</th> --}}
                                                <th scope="col">Teléfono</th>
                                                <th scope="col">E-mail</th>
                                                <th scope="col">Obra Social</th>
                                                <th scope="col">Ocupación</th>
                                              </tr>
                                            </thead>
                                            <tbody id="tbodypacientes">
                                              <!--VERIFICAMOS SI HAY RESULTADO, SI NO MOSTRAMOS MENSAJE-->
                                              @if(count($pacientes)<=0)
                                              <tr>
                                                  <td coldspan="6" class="text-danger">NO HAY RESULTADO CON ESA BUSQUEDA</td>
                                              </tr>    
                                          @else
                                                @foreach ($pacientes as $paciente)
                                                <tr>
                                                    <td>{{$paciente->id}}</td>
                                                    <td id="obtenernombre" class="normal" >{{$paciente->nombre}}</td>
                                                    <td id="obtenerapellido" class="normal">{{$paciente->apellido}}</td>
                                                    <td>{{$paciente->dni}}</td>
                                                    {{-- <td>{{$paciente->direccion}}</td>
                                                    <td>{{$paciente->localidad}}</td>
                                                    <td>{{$paciente->provincia}}</td> --}}
                                                    <td>{{$paciente->telefono}}</td>
                                                    <td>{{$paciente->mail}}</td>
                                                    <td>{{$paciente->obrasocial}}</td>
                                                    <td>{{$paciente->ocupacion}}</td>
                                                    
                                                    <td>
                                                        <a href="#">							
                                                            <button class="btn btn-success" id="botonAgregarPaciente" onclick="clickElemento();">Agregar</button>
                                                        </a>
                                                    </td>
                                                    
                                                </tr>
                                            @endforeach 
                                          @endif           
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    <!--FIN TABLA PACIENTES-->
                                    <!--CAJA contenedora NOMBRE Y APELLIDO-->
                                    <div class="col-12 p-3 mb-5 text-center" style="background: lightblue; font-weight: bold; padding: 25px; border-left:8px solid blue; border-top-left-radius:8px; border-bottom-left-radius:8px;">
                                        <p class="text-center" >
                                        Paciente Seleccionado:
                                        <h4><span name="nombre" id="resultadodesdetabla"></span></h4>
                                        </p>
                                    </div>
                                        <style>
                                            .contenedordehorario {
                                        position:relative;
                                        display:block;
                                        margin:3px;
                                        float:left;
                                        min-height:200px;
                                        width:100%;
                                        background:#ccc;
                                        }
                                        </style>
                                    
                                    <!--FIN CAJA contenedora-->

                                    <!--TABS CONTENEDORES DE TURNO MAÑANA Y TARDE-->
                  <div class="shadow p-4 mb-4 bg-white">
                    <div class="container mt-3">
                      <form>   
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home">Turno Mañana</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu1">Turno Tarde</a>
                          </li>
                          
                        </ul>
                      
                        <!-- Tab panes -->
                       
                        <div class="tab-content">
                          <div id="home" class="container tab-pane active"><br>
                            <!--probando tabla-->
                            <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table table-striped table-hover">
                                      <thead class="thead text-center">
                                          <tr>
                                              
                                                <th><kbd>8:00</kbd></th>
                                                <th><kbd>8:15</kbd></th>
                                                <th><kbd>8:30</kbd></th>
                                                <th><kbd>8:45</kbd></th>
                                          </tr>  
                                        </thead> 
                                        <tbody>
                                          
                                          <tr>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t800" id="t800" value="">
                                                <button class="btn btn-info" id="agregar800" onclick="agregaTextot800();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger" id="borrar800" onclick="borrartextot800();"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t815" id="t815" value="">
                                                <button class="btn btn-info" id="agregar815" onclick="agregaTextot815();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger" id="borrar815" onclick="borrartextot815();"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t830" id="t830" value="">
                                                <button class="btn btn-info" id="agregar830" onclick="agregaTextot830();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger" id="borrar830" onclick="borrartextot830();"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t845" id="t845" value="">
                                                <button class="btn btn-info" id="agregar845" onclick="agregaTextot845();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger" id="borrar845" onclick="borrartextot845();"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                          </tr>
                          
                                      </tbody>
                                        <thead class="thead text-center"> 
                                          <tr>  
                                                <th><kbd>9:00</kbd></th>
                                                <th><kbd>9:15</kbd></th>
                                                <th><kbd>9:30</kbd></th>
                                                <th><kbd>9:45</kbd></th>
                                          </tr>
                                        </thead> 
                                        <tbody>
                                          
                                          <tr>
                                              <td>
                                                <div class="col text-center mt-2 mb-2">
                                                  <input type="text" name="t900" id="t900" value="">
                                                  <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="col text-center mt-2 mb-2">
                                                  <input type="text" name="t915" id="t915" value="">
                                                  <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="col text-center mt-2 mb-2">
                                                  <input type="text" name="t930" id="t930" value="">
                                                  <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="col text-center mt-2 mb-2">
                                                  <input type="text" name="t945" id="t945" value="">
                                                  <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                                </div>
                                              </td>
                                          </tr>
                          
                                      </tbody>

                                      <thead class="thead text-center"> 
                                        <tr>  
                                          <th><kbd>10:00</kbd></th>
                                          <th><kbd>10:15</kbd></th>
                                          <th><kbd>10:30</kbd></th>
                                          <th><kbd>10:45</kbd></th>
                                        </tr>
                                      </thead> 
                                      <tbody>
                                        
                                        <tr>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1000" id="t1000" value="">
                                                <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1015" id="t1015" value="">
                                                <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1030" id="t1030" value="">
                                                <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1045" id="t1045" value="">
                                                <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                        </tr>
                        
                                    </tbody>

                                    <thead class="thead text-center"> 
                                      <tr>  
                                        <th><kbd>11:00</kbd></th>
                                        <th><kbd>11:15</kbd></th>
                                        <th><kbd>11:30</kbd></th>
                                        <th><kbd>11:45</kbd></th>
                                      </tr>
                                    </thead> 
                                    <tbody>
                                      
                                      <tr>
                                          <td>
                                            <div class="col text-center mt-2 mb-2">
                                              <input type="text" name="t1100" id="t1100" value="">
                                              <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="col text-center mt-2 mb-2">
                                              <input type="text" name="t1115" id="t1115" value="">
                                              <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="col text-center mt-2 mb-2">
                                              <input type="text" name="t1130" id="t1130" value="">
                                              <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="col text-center mt-2 mb-2">
                                              <input type="text" name="t1145" id="t1145" value="">
                                              <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                            </div>
                                          </td>
                                      </tr>
                      
                                  </tbody>

                                  <thead class="thead text-center"> 
                                    <tr>  
                                      <th><kbd>12:00</kbd></th>
                                      <th><kbd>12:15</kbd></th>
                                      <th><kbd>12:30</kbd></th>
                                      <th><kbd>12:45</kbd></th>
                                    </tr>
                                  </thead> 
                                  <tbody>
                                    
                                    <tr>
                                        <td>
                                          <div class="col text-center mt-2 mb-2">
                                            <input type="text" name="t1200" id="t1200" value="">
                                            <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="col text-center mt-2 mb-2">
                                            <input type="text" name="t1215" id="t1215" value="">
                                            <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="col text-center mt-2 mb-2">
                                            <input type="text" name="t1230" id="t1230" value="">
                                            <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="col text-center mt-2 mb-2">
                                            <input type="text" name="t1245" id="t1245" value="">
                                            <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                            <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                          </div>
                                        </td>
                                    </tr>
                    
                                </tbody>
                                              
                                     
                                  </table>
                              </div>
                          </div>
                            <!--fin probando tabla-->
                            
                            
                          </div>

                          <!--TABLA TURNO TARDE-->
                          <div id="menu1" class="container tab-pane fade"><br>
                              <!--probando tabla-->
                            <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table table-striped table-hover">
                                      <thead class="thead text-center">
                                          <tr>
                                              
                                                <th><kbd>16:00</kbd></th>
                                                <th><kbd>16:15</kbd></th>
                                                <th><kbd>16:30</kbd></th>
                                                <th><kbd>16:45</kbd></th>
                                          </tr>  
                                        </thead> 
                                        <tbody>
                                          
                                          <tr>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1600" id="t1600" value="">
                                                <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1615" id="t1615" value="">
                                                <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1630" id="t1630" value="">
                                                <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1645" id="t1645" value="">
                                                <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                          </tr>
                          
                                      </tbody>
                                        <thead class="thead text-center"> 
                                          <tr>  
                                                <th><kbd>17:00</kbd></th>
                                                <th><kbd>17:15</kbd></th>
                                                <th><kbd>17:30</kbd></th>
                                                <th><kbd>17:45</kbd></th>
                                          </tr>
                                        </thead> 
                                        <tbody>
                                          
                                          <tr>
                                              <td>
                                                <div class="col text-center mt-2 mb-2">
                                                  <input type="text" name="t1700" id="t1700" value="">
                                                  <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="col text-center mt-2 mb-2">
                                                  <input type="text" name="t1715" id="t1715" value="">
                                                  <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="col text-center mt-2 mb-2">
                                                  <input type="text" name="t1730" id="t1730" value="">
                                                  <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="col text-center mt-2 mb-2">
                                                  <input type="text" name="t1745" id="t1745" value="">
                                                  <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                                </div>
                                              </td>
                                          </tr>
                          
                                      </tbody>

                                      <thead class="thead text-center"> 
                                        <tr>  
                                          <th><kbd>18:00</kbd></th>
                                          <th><kbd>18:15</kbd></th>
                                          <th><kbd>18:30</kbd></th>
                                          <th><kbd>18:45</kbd></th>
                                        </tr>
                                      </thead> 
                                      <tbody>
                                        
                                        <tr>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1800" id="t1800" value="">
                                                <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1815" id="t1815" value="">
                                                <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1830" id="t1830" value="">
                                                <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1845" id="t1845" value="">
                                                <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                        </tr>
                        
                                    </tbody>

                                    <thead class="thead text-center"> 
                                      <tr>  
                                        <th><kbd>19:00</kbd></th>
                                        <th><kbd>19:15</kbd></th>
                                        <th><kbd>19:30</kbd></th>
                                        <th><kbd>19:45</kbd></th>
                                      </tr>
                                    </thead> 
                                    <tbody>
                                      
                                      <tr>
                                          <td>
                                            <div class="col text-center mt-2 mb-2">
                                              <input type="text" name="t1900" id="t1900" value="">
                                              <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="col text-center mt-2 mb-2">
                                              <input type="text" name="t1915" id="t1915" value="">
                                              <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="col text-center mt-2 mb-2">
                                              <input type="text" name="t1930" id="t1930" value="">
                                              <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="col text-center mt-2 mb-2">
                                              <input type="text" name="t1945" id="t1945" value="">
                                              <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                            </div>
                                          </td>
                                      </tr>
                      
                                  </tbody>

                                  <thead class="thead text-center"> 
                                    <tr>  
                                      <th><kbd>20:00</kbd></th>
                                      <th><kbd>20:15</kbd></th>
                                      <th><kbd>20:30</kbd></th>
                                      <th><kbd>20:45</kbd></th>
                                    </tr>
                                  </thead> 
                                  <tbody>
                                    
                                    <tr>
                                        <td>
                                          <div class="col text-center mt-2 mb-2">
                                            <input type="text" name="t2000" id="t2000" value="">
                                            <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="col text-center mt-2 mb-2">
                                            <input type="text" name="t2015" id="t2015" value="">
                                            <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="col text-center mt-2 mb-2">
                                            <input type="text" name="t2030" id="t2030" value="">
                                            <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="col text-center mt-2 mb-2">
                                            <input type="text" name="t2045" id="t2045" value="">
                                            <button class="btn btn-info"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger"><i class="botonesTabla bi bi-trash"></i></button>
                                          </div>
                                        </td>
                                    </tr>
                    
                                </tbody>
                                              
                                     
                                  </table>
                              </div>
                          </div>
                            <!--fin probando tabla-->
                          
                          </div>
                      </div>
                      <button class="btn btn-primary col-md-12" type="submit">Agendar turno</button>
                    </form>  
                  </div>
                                    
                                </div>
                            </div>
                        </div>

                    </p>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
   
</script>