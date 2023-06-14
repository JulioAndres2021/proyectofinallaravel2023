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
                    
                       
                    </p>
                    <div class="container">

                                    <!--TABS CONTENEDORES DE TURNO MAÑANA Y TARDE-->
                  <div class="shadow p-4 mb-4 bg-white">
                    <div class="container mt-3">
                      <form action="{{route('turno.store')}}" method="post" >	
                        @csrf  
                        <!--LISTA SELECCION FECHA--> 
                        <h3> <p class="text-center" style="background: lightblue; font-weight: bold; padding: 25px; border-left:8px solid blue; border-top-left-radius:8px; border-bottom-left-radius:8px;">
                          Seleccione una Fecha
                          {{-- {{ date('d/m/Y')}} --}}
                            <input type="date" name="fecha" id="fecha" value=""></h3>

                        <!--FIN LISTA SELECCION MEDICO-->
                          <!--LISTA DESPLEGABLES CON LOS TURNOS ASIGNADOS-->
                    <div class="container mt-3">
                      <h2>Seleccione un Médico</h2>
                      <p>Para agregar turnos, haga click en <strong> turnos</strong> y agregue uno nuevo</p>
                       <select name="nombremedicos" class="form-select form-select-lg mb-4">
                        @if(count($medicos)<=0)
                          <option value="1">No hay Médicos</option>
                         @else
                            @foreach ($medicos as $medico)
                              <option name="medico_id" value="{{ $medico->id }}">{{ $medico->nombre }}</option>
                            @endforeach
                         @endif
                       </select>
                    </div>
                  <!--FIN LISTA DESPLEGABLES CON LOS TURNOS ASIGNADOS-->

                  <!--LISTA DE PACIENTES A SELECCIONAR-->
                  <div class="card" >
                    <div class="card-header" style="background: rgb(189, 242, 209); font-weight: bold; padding: 10px; border-left:8px solid rgb(40, 194, 32); border-top-left-radius:8px; border-bottom-left-radius:8px;">
                       Seleccione un Paciente
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="">
                                <input type="text" class="mr-3" name="buscarpaciente"  id="buscarpaciente">
                            {{-- <button class="btn btn-primary " type="submit">Buscar Paciente</button> --}}
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
                                        {{-- <th scope="col">DNI</th> --}}
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
                                            {{-- <td>{{$paciente->dni}}</td> --}}
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
                            <div class="col-12 p-3 mb-5 text-center mb-3" style="background: lightblue; font-weight: bold; padding: 25px; border-left:8px solid blue; border-top-left-radius:8px; border-bottom-left-radius:8px;">
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

                  <!--FIN LISTA DE PACIENTES A SELECCIONAR-->
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
                                                  <button class="btn btn-info" id="agregar900" onclick="agregaTextot900();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar900" onclick="borrartextot900();"><i class="botonesTabla bi bi-trash"></i></button>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="col text-center mt-2 mb-2">
                                                  <input type="text" name="t915" id="t915" value="">
                                                  <button class="btn btn-info" id="agregar915" onclick="agregaTextot915();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar915" onclick="borrartextot915();"><i class="botonesTabla bi bi-trash"></i></button>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="col text-center mt-2 mb-2">
                                                  <input type="text" name="t930" id="t930" value="">
                                                  <button class="btn btn-info" id="agregar930" onclick="agregaTextot930();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar930" onclick="borrartextot930();"><i class="botonesTabla bi bi-trash"></i></button>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="col text-center mt-2 mb-2">
                                                  <input type="text" name="t945" id="t945" value="">
                                                  <button class="btn btn-info" id="agregar945" onclick="agregaTextot945();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar945" onclick="borrartextot945();"><i class="botonesTabla bi bi-trash"></i></button>
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
                                                <button class="btn btn-info" id="agregar1000" onclick="agregaTextot1000();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar1000" onclick="borrartextot1000();"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1015" id="t1015" value="">
                                                <button class="btn btn-info" id="agregar1015" onclick="agregaTextot1015();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar1015" onclick="borrartextot1015();"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1030" id="t1030" value="">
                                                <button class="btn btn-info" id="agregar1030" onclick="agregaTextot1030();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar1030" onclick="borrartextot1030();"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1045" id="t1045" value="">
                                                <button class="btn btn-info" id="agregar1045" onclick="agregaTextot1045();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar1045" onclick="borrartextot1045();"><i class="botonesTabla bi bi-trash"></i></button>
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
                                              <button class="btn btn-info" id="agregar1100" onclick="agregaTextot1100();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar1100" onclick="borrartextot1100();"><i class="botonesTabla bi bi-trash"></i></button>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="col text-center mt-2 mb-2">
                                              <input type="text" name="t1115" id="t1115" value="">
                                              <button class="btn btn-info" id="agregar1115" onclick="agregaTextot1115();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                              <button class="btn btn-danger" id="borrar1115" onclick="borrartextot1115();"><i class="botonesTabla bi bi-trash"></i></button>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="col text-center mt-2 mb-2">
                                              <input type="text" name="t1130" id="t1130" value="">
                                              <button class="btn btn-info" id="agregar1130" onclick="agregaTextot1130();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar1130" onclick="borrartextot1130();"><i class="botonesTabla bi bi-trash"></i></button>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="col text-center mt-2 mb-2">
                                              <input type="text" name="t1145" id="t1145" value="">
                                              <button class="btn btn-info" id="agregar1145" onclick="agregaTextot1145();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar1145" onclick="borrartextot1145();"><i class="botonesTabla bi bi-trash"></i></button>
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
                                            <button class="btn btn-info" id="agregar1200" onclick="agregaTextot1200();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar1200" onclick="borrartextot1200();"><i class="botonesTabla bi bi-trash"></i></button>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="col text-center mt-2 mb-2">
                                            <input type="text" name="t1215" id="t1215" value="">
                                            <button class="btn btn-info" id="agregar1215" onclick="agregaTextot1215();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar1215" onclick="borrartextot1215();"><i class="botonesTabla bi bi-trash"></i></button>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="col text-center mt-2 mb-2">
                                            <input type="text" name="t1230" id="t1230" value="">
                                            <button class="btn btn-info" id="agregar1230" onclick="agregaTextot1230();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                            <button class="btn btn-danger" id="borrar1230" onclick="borrartextot1230();"><i class="botonesTabla bi bi-trash"></i></button>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="col text-center mt-2 mb-2">
                                            <input type="text" name="t1245" id="t1245" value="">
                                            <button class="btn btn-info" id="agregar1245" onclick="agregaTextot1245();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                            <button class="btn btn-danger" id="borrar1245" onclick="borrartextot1245();"><i class="botonesTabla bi bi-trash"></i></button>
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
                                                <button class="btn btn-info" id="agregar1600" onclick="agregaTextot1600();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger" id="borrar1600" onclick="borrartextot1600();"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1615" id="t1615" value="">
                                                <button class="btn btn-info" id="agregar1615" onclick="agregaTextot1615();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger" id="borrar1615" onclick="borrartextot1615();"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1630" id="t1630" value="">
                                                <button class="btn btn-info" id="agregar1630" onclick="agregaTextot1630();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger" id="borrar1630" onclick="borrartextot1630();"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1645" id="t1645" value="">
                                                <button class="btn btn-info" id="agregar1645" onclick="agregaTextot1645();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                <button class="btn btn-danger" id="borrar1645" onclick="borrartextot1645();"><i class="botonesTabla bi bi-trash"></i></button>
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
                                                  <button class="btn btn-info" id="agregar1700" onclick="agregaTextot1700();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar1700" onclick="borrartextot1700();"><i class="botonesTabla bi bi-trash"></i></button>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="col text-center mt-2 mb-2">
                                                  <input type="text" name="t1715" id="t1715" value="">
                                                  <button class="btn btn-info" id="agregar1715" onclick="agregaTextot1715();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar1715" onclick="borrartextot1715();"><i class="botonesTabla bi bi-trash"></i></button>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="col text-center mt-2 mb-2">
                                                  <input type="text" name="t1730" id="t1730" value="">
                                                  <button class="btn btn-info" id="agregar1730" onclick="agregaTextot1730();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar1730" onclick="borrartextot1730();"><i class="botonesTabla bi bi-trash"></i></button>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="col text-center mt-2 mb-2">
                                                  <input type="text" name="t1745" id="t1745" value="">
                                                  <button class="btn btn-info" id="agregar1745" onclick="agregaTextot1745();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar1745" onclick="borrartextot1745();"><i class="botonesTabla bi bi-trash"></i></button>
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
                                                <button class="btn btn-info" id="agregar1800" onclick="agregaTextot1800();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar1800" onclick="borrartextot1800();"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1815" id="t1815" value="">
                                                <button class="btn btn-info" id="agregar1815" onclick="agregaTextot1815();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar1815" onclick="borrartextot1815();"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1830" id="t1830" value="">
                                                <button class="btn btn-info" id="agregar1830" onclick="agregaTextot1830();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar1830" onclick="borrartextot1830();"><i class="botonesTabla bi bi-trash"></i></button>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="col text-center mt-2 mb-2">
                                                <input type="text" name="t1845" id="t1845" value="">
                                                <button class="btn btn-info" id="agregar1845" onclick="agregaTextot1845();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                                  <button class="btn btn-danger" id="borrar1845" onclick="borrartextot1845();"><i class="botonesTabla bi bi-trash"></i></button>
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
                                              <button class="btn btn-info" id="agregar1900" onclick="agregaTextot1900();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                              <button class="btn btn-danger" id="borrar1900" onclick="borrartextot1900();"><i class="botonesTabla bi bi-trash"></i></button>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="col text-center mt-2 mb-2">
                                              <input type="text" name="t1915" id="t1915" value="">
                                              <button class="btn btn-info" id="agregar1915" onclick="agregaTextot1915();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                              <button class="btn btn-danger" id="borrar1915" onclick="borrartextot1915();"><i class="botonesTabla bi bi-trash"></i></button>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="col text-center mt-2 mb-2">
                                              <input type="text" name="t1930" id="t1930" value="">
                                              <button class="btn btn-info" id="agregar1930" onclick="agregaTextot1930();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                              <button class="btn btn-danger" id="borrar1930" onclick="borrartextot1930();"><i class="botonesTabla bi bi-trash"></i></button>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="col text-center mt-2 mb-2">
                                              <input type="text" name="t1945" id="t1945" value="">
                                              <button class="btn btn-info" id="agregar1945" onclick="agregaTextot1945();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                              <button class="btn btn-danger" id="borrar1945" onclick="borrartextot1945();"><i class="botonesTabla bi bi-trash"></i></button>
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
                                            <button class="btn btn-info" id="agregar2000" onclick="agregaTextot2000();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                            <button class="btn btn-danger" id="borrar2000" onclick="borrartextot2000();"><i class="botonesTabla bi bi-trash"></i></button>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="col text-center mt-2 mb-2">
                                            <input type="text" name="t2015" id="t2015" value="">
                                            <button class="btn btn-info" id="agregar2015" onclick="agregaTextot2015();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                            <button class="btn btn-danger" id="borrar2015" onclick="borrartextot2015();"><i class="botonesTabla bi bi-trash"></i></button>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="col text-center mt-2 mb-2">
                                            <input type="text" name="t2030" id="t2030" value="">
                                            <button class="btn btn-info" id="agregar2030" onclick="agregaTextot2030();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                            <button class="btn btn-danger" id="borrar2030" onclick="borrartextot2030();"><i class="botonesTabla bi bi-trash"></i></button>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="col text-center mt-2 mb-2">
                                            <input type="text" name="t2045" id="t2045" value="">
                                            <button class="btn btn-info" id="agregar2045" onclick="agregaTextot2045();"><i class="botonesTabla bi bi-plus-square"></i></button>
                                            <button class="btn btn-danger" id="borrar2045" onclick="borrartextot2045();"><i class="botonesTabla bi bi-trash"></i></button>
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