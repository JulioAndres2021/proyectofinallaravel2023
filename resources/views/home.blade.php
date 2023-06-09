@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Página Principal') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p style="background:rgb(159, 88, 159); color:white; font-weight:bold; padding:15px; font:100">{{ __('Bienvenido al Portal SOFTWARE MEDICALCARE 2023!') }}</p>
                    {{-- <p style="background:#FF813E; color:white; font-weight:bold; padding:15px; border:3px solid #B34F19; margin-top:40px; margin-bottom:40px; text-align:center; font-size:22px; border-radius:10px;">Tu caja de colores personalizada con HTML y CSS</p>
                    <p style="background: #fcdbe6; color: #f15c8e; font-weight: bold; padding: 15px; border: 2px solid #fac9d9; border-radius: 6px;">Tu caja de color rosa y cantos redondeados</p>
                    <p style="color: #a2a2a2; font-weight: bold; padding: 15px; border: 2px solid #d8d8d8; border-radius: 6px;">Tu caja de color blanco y cantos redondeados</p>
                    <p style="background: #f7f5f5; font-weight: bold; padding: 15px; border-left:8px solid #ff0080; border-top-left-radius:8px; border-bottom-left-radius:8px;">Caja de colores HTML y CSS con borde redondeado a la izquierda</p>
                    <p style="background: #f7f5f5; font-weight: bold; padding: 15px; border-right:5px solid #ff0080;">Caja de colores HTML y CSS con borde a la izquierda</p> --}}
                    
                    
                    <div class='contenedor'>
                        <div class="contenido">
                           <div class="box-blue inner">
                              <i class="bi bi-people-fill"></i> <br>
                              <a class="btn btn-primary" href="{{route('medico.index')}}" >Médicos</a>
                            </div>
                           <div class="box-green inner">
                                <i class="bi bi-journal-medical"></i> <br>
                                <a class="btn btn-success" href="{{route('paciente.index')}}" >Pacientes</a>

                            </div>
                           <div class="box-yellow inner">
                             <i class="bi bi-clipboard2-pulse"></i> <br>
                             <a class="btn btn-warning" href="{{route('turno.index')}}" >Turnos</a>
                           </div>
                         </div>
                       </div>
                        {{-- <div class="box-grey">Incluye tu contenido aquí.</div>

                        <div class="box-red">Incluye tu contenido aquí.</div>

                        <div class="box-yellow">Incluye tu contenido aquí.</div> --}}

                </div>
            </div>
            <!--CONTENIDO DESPUES DE MEDICOS,TURNOS Y PACIENTES-->
            
            <main>
                <div class="container py-4">
                  <header class="pb-3 mb-4 border-bottom">
                    {{-- <a href="/" class="d-flex align-items-center text-dark text-decoration-none"> --}}
                      <img src="{{asset('agenda.png')}}" alt="" width="80">
                      <span class="fs-4">Agenda del día - <strong>{{ \Carbon\Carbon::parse(now())->format('d/m/Y') }}</strong> - </span>
                      <span class="fs-4">Turnos asignados por Médicos</span>
                      <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Turnos de hoy
                          <span class="badge bg-primary rounded-pill">{{$contarturnos->count()}}</span>
                        </li>
                      </ul>
                    {{-- </a> --}}

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
                  </header>

                  <!--TABS CONTENEDORES DE TURNO MAÑANA Y TARDE-->
                  <div class="shadow p-4 mb-4 bg-white">
                    <div class="container mt-3">
                        
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
                        <button class="btn btn-info mt-3 mb-3">Agregar Turno</button>
                        <div class="tab-content">
                          <div id="home" class="container tab-pane active"><br>
                            
                            <!--TABLA TURNO MAÑANA-->
                            <div class="container mt-3">
                             <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead class="table-success">
                                    <tr>
                                      <th>8:00</th>
                                      <th>8:15</th>
                                      <th>8:30</th>
                                      <th>8:45</th>
                                      <th>9:00</th>
                                      <th>9:15</th>
                                      <th>9:30</th>
                                      <th>9:45</th>
                                      <th>10:00</th>
                                      <th>10:15</th>
                                      <th>10:30</th>
                                      <th>10:45</th>
                                      <th>11:00</th>
                                      <th>11:15</th>
                                      <th>11:30</th>
                                      <th>11:45</th>
                                      <th>12:00</th>
                                      <th>12:15</th>
                                      <th>12:30</th>
                                      <th>12:45</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @if(count($contarturnos)<=0)
                                    <tr>
                                           <td class="text-danger">NO HAY RESULTADO CON ESA BUSQUEDA</td>
                                    </tr>
                                   @else
                                    @foreach ($contarturnos as $contarturno)
                                    <tr>
                                      <td>{{$contarturno->t800}}</td>
                                      <td>{{$contarturno->t815}}</td>
                                      <td>{{$contarturno->t830}}</td>
                                      <td>{{$contarturno->t845}}</td>
                                      <td>{{$contarturno->t900}}</td>
                                      <td>{{$contarturno->t915}}</td>
                                      <td>{{$contarturno->t930}}</td>
                                      <td>{{$contarturno->t945}}</td>
                                      <td>{{$contarturno->t1000}}</td>
                                      <td>{{$contarturno->t1015}}</td>
                                      <td>{{$contarturno->t1030}}</td>
                                      <td>{{$contarturno->t1045}}</td>
                                      <td>{{$contarturno->t1100}}</td>
                                      <td>{{$contarturno->t1115}}</td>
                                      <td>{{$contarturno->t1130}}</td>
                                      <td>{{$contarturno->t1145}}</td>
                                      <td>{{$contarturno->t1200}}</td>
                                      <td>{{$contarturno->t1215}}</td>
                                      <td>{{$contarturno->t1230}}</td>
                                      <td>{{$contarturno->t1245}}</td>

                                    </tr>
                                    @endforeach
                                    @endif
                                    
                                  </tbody>
                                </table>
                               </div>
                              </div>
                          </div>

                          <!--TABLA TURNO TARDE-->
                          <div id="menu1" class="container tab-pane fade"><br>
                            <div class="container mt-3">
                                <div class="table-responsive">
                                   <table class="table table-sm">
                                       <thead class="table-success">
                                       <tr>
                                         <th>16:00</th>
                                         <th>16:15</th>
                                         <th>16:30</th>
                                         <th>16:45</th>
                                         <th>17:00</th>
                                         <th>17:15</th>
                                         <th>17:30</th>
                                         <th>17:45</th>
                                         <th>18:00</th>
                                         <th>18:15</th>
                                         <th>18:30</th>
                                         <th>18:45</th>
                                         <th>19:00</th>
                                         <th>19:15</th>
                                         <th>19:30</th>
                                         <th>19:45</th>
                                         <th>20:00</th>
                                         <th>20:15</th>
                                         <th>20:30</th>
                                         <th>20:45</th>
                                       </tr>
                                     </thead>
                                     <tbody>
                                       <!--VERIFICAMOS SI HAY RESULTADO, SI NO MOSTRAMOS MENSAJE-->
                                       @if(count($contarturnos)<=0)
                                        <tr>
                                           <td class="text-danger">NO HAY RESULTADO CON ESA BUSQUEDA</td>
                                        </tr>   

                                   @else
                                      @foreach ($contarturnos as $contarturno)
                                       <tr>
                                        <td>{{$contarturno->t1600}}</td>
                                        <td>{{$contarturno->t1615}}</td>
                                        <td>{{$contarturno->t1630}}</td>
                                        <td>{{$contarturno->t1645}}</td>
                                        <td>{{$contarturno->t1700}}</td>
                                        <td>{{$contarturno->t1715}}</td>
                                        <td>{{$contarturno->t1730}}</td>
                                        <td>{{$contarturno->t1745}}</td>
                                        <td>{{$contarturno->t1800}}</td>
                                        <td>{{$contarturno->t1815}}</td>
                                        <td>{{$contarturno->t1830}}</td>
                                        <td>{{$contarturno->t1845}}</td>
                                        <td>{{$contarturno->t1900}}</td>
                                        <td>{{$contarturno->t1915}}</td>
                                        <td>{{$contarturno->t1930}}</td>
                                        <td>{{$contarturno->t1945}}</td>
                                        <td>{{$contarturno->t2000}}</td>
                                        <td>{{$contarturno->t2015}}</td>
                                        <td>{{$contarturno->t2030}}</td>
                                        <td>{{$contarturno->t2045}}</td>
   
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

                  
              
                  <div class="row align-items-md-stretch">
                    <div class="col-md-6">
                      <div class="h-100 p-5 text-white bg-success rounded-3">
                        {{-- <h2>MedicalCare 2023</h2> --}}
                        <p>Clínica para atención al paciente con distintas patologías.</p>
                        <p>Teléfono de Contácto: 2302 - 123456.</p>
                        <p>Redes Sociales.</p>
                        <p>Instagram.</p>
                        <p>Facebooks.</p>
                        <p>Otros.</p>
                        <p>Mail de Contácto.</p>
                        
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="h-100 p-5 bg-light border rounded-3 text-center">
                        <h1>MédicalCare 2023</h1>
                        <img src="{{asset('medicalcare.png')}}" alt="" width="100%">
                        
                      </div>
                    </div>
                  </div>
              
                  <footer class="pt-3 mt-4 text-muted border-top">
                    &copy; 2023 JULIO ANDRES
                  </footer>
                </div>
              </main>


            <!--FIN CONTENIDO DESPUES DE MEDICOS,TURNOS Y PACIENTES-->
        </div>
    </div>
</div>
@endsection
