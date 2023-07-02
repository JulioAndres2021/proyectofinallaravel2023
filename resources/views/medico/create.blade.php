@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header mr-3">{{ __('Página Médico') }}
                    <a class="btn btn-info" href="{{route('medico.index')}}">Volver</a>
                </div>

                <div class="card-body">
                  <!--MENSAJES DE CAMPOS REQUERIDOS-->
                  @error('nombre')
                  <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                      <strong>Advertencia! </strong>  {{$message}}
                    </div>
                  @enderror
                  @error('especialidad')
                  <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                      <strong>Advertencia! </strong>  {{$message}}
                    </div>
                  @enderror
                  @error('tm1')
                  <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                      <strong>Advertencia! </strong>  Debe colocar un horario válido.!
                    </div>
                  @enderror
                  @error('tm2')
                  <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                      <strong>Advertencia! </strong>  Debe colocar un horario válido.!
                    </div>
                  @enderror
                  @error('tt1')
                  <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                      <strong>Advertencia! </strong>  Debe colocar un horario válido.!
                    </div>
                  @enderror
                  @error('tt2')
                  <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                      <strong>Advertencia! </strong>  Debe colocar un horario válido.!
                    </div>
                  @enderror
                  @error('atiende')
                  <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                      <strong>Advertencia! </strong>  {{$message}}
                    </div>
                  @enderror
                  @error('matricula')
                  <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                      <strong>Advertencia! </strong>  {{$message}}
                    </div>
                  @enderror
                  @error('cada')
                  <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                      <strong>Advertencia! </strong>  {{$message}}
                    </div>
                  @enderror

                    <h1>{{ __('CREAR MEDICO') }}</h1>
                    <!--CONTENIDO DEL FORMULARIO-->
          {{-- <div class="col-12"> --}}
            <div class="table-responsive">
                <form action="{{route('medico.store')}}" method="POST" >	
                    @csrf
                    <div class="mb-3 mt-3">
                      <label for="nombre" class="form-label">Nombre:</label>
                      <input type="text" class="form-control text-capitalize" id="nombre"  name="nombre">
                    </div>
                    <div class="mb-3">
                      <label for="especialidad" class="form-label">Especialidad:</label>
                      <input type="text" class="form-control text-capitalize" id="especialidad" name="especialidad">
                    </div>

                    <h3>Seleccionar los horarios que el médico trabajará.</h3>
                    <div class="row">
                      <div class="col-sm-6">
                        <!--TABLA TURNO MAÑANA-->
                    <table >
                      <thead>
                        <tr>
                          <th><kbd>Turno Mañana</kbd></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>

                          <td>
                            
                                <select class="form-control" name="" id="turnomañana1" >
                                  <option>Seleccionar</option>
                                  <option>No Atiende</option>
                                  @for ($i = 8; $i <= 13; $i++)
                                    <option value="">{{ $i}}:00 <option>
                                  @endfor
                                </select>
                                <input type="text" name="tm1" id="turnoM1" value="" hidden>
                           
                          </td>
                          <td>  </td>
                          <td> a </td>
                          <td>
                            
                                <select class="form-control" name="" id="turnomañana2">
                                  <option>Seleccionar</option>
                                  <option>No Atiende</option>
                                  @for ($i = 11; $i <= 13; $i++)
                                    <option value="" >{{ $i}}:00 <option>
                                  @endfor
                                  <input type="text" name="tm2" id="turnoM2" value="" hidden>
                                </select>

                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <!--FIN TABLA TURNO MAÑANA-->
                      </div>

                      <div class="col-sm-6">
                        <!--TABLA TURNO TARDE-->
                    <table class="">
                      <thead>
                        <tr>
                          <th><kbd>Turno Tarde</kbd></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>

                          <td>
                           
                                <select class="form-control" id="turnotarde1" >
                                  <option>Seleccionar</option>
                                  <option>No Atiende</option>
                                  @for ($i = 15; $i <= 21; $i++)
                                    <option value="" class="form-control" >{{ $i}}:00 <option>
                                  @endfor
                                  <input type="text" name="tt1" id="turnoT1" value="" hidden>
                                </select>
                                

                          </td>
                          <td>  </td>
                          <td> a </td>
                          <td>
                            <div class="row">
                              <div class="col">
                                <select class="form-control" id="turnotarde2">
                                  <option>Seleccionar</option>
                                  <option>No Atiende</option>
                                  @for ($i = 19; $i <= 21; $i++)
                                    <option value="" class="form-control" >{{ $i}}:00 <option>
                                  @endfor
                                  <input type="text" name="tt2" id="turnoT2" value="" hidden>
                                </select>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <!--FIN TABLA TURNO TARDE-->
                      </div>
                    </div>
                    
                   
                      <div class="row mt-3">
                        <div class="col">
                            <label for="lunes" class="form-label border shadow p-4 mb-4 bg-secondary ">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="lunes" name="lunes" value="NO" unchecked onclick="validar_lunes();">
                                <label class="form-check-label" for="lunes">LUNES</label>
                              </div>
                            </label>
                            
                        </div>
                        <div class="col">
                            <label for="martes" class="form-label shadow p-4 mb-4 bg-success">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="martes" name="martes" value="NO" unchecked onclick="validar_martes();">
                                <label class="form-check-label" for="martes">MARTES</label>
                              </div>
                            </label>
                           
                        </div>
                        <div class="col">
                            <label for="miercoles" class="form-label shadow p-4 mb-4 bg-info">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="miercoles" name="miercoles" value="NO" unchecked onclick="validar_miercoles();">
                                <label class="form-check-label" for="miercoles">MIERCOLES</label>
                              </div>
                            </label>
                            
                        </div>
                        <div class="col">
                            <label for="jueves" class="form-label shadow p-4 mb-4 bg-warning">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="jueves" name="jueves" value="NO" unchecked onclick="validar_jueves();">
                                <label class="form-check-label" for="jueves">JUEVES</label>
                              </div>
                            </label>
                            
                        </div>
                        <div class="col">
                            <label for="viernes" class="form-label shadow p-4 mb-4 bg-danger">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="viernes" name="viernes" value="NO" unchecked onclick="validar_viernes();">
                                <label class="form-check-label" for="viernes">VIERNES</label>
                              </div>
                            </label>
                            
                        </div>
                        <div class="col">
                            <label for="sabado" class="form-label shadow p-4 mb-4 bg-light">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="sabado" name="sabado" value="NO" unchecked onclick="validar_sabado();">
                                <label class="form-check-label bg-light" for="sabado">SABADO</label>
                              </div>
                            </label>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="matricula" class="form-label">Matrícula:</label>
                        <input type="text" class="form-control" id="matricula" name="matricula">
                      </div>
                      <div class="mb-3">
                        <label for="atiende" class="form-label">Atiende:</label>
                        <select class="form-select form-select-lg text-capitalize" name="atiende" id="atiende">
                            <option>SI</option>
                            <option>NO</option>
                          </select>
                      </div>
                      <div class="mb-3">
                        <label for="cada" class="form-label">Cada x Minutos:</label>
                        <select class="form-select form-select-lg" name="cada" id="cada">
                            <option>15</option>
                            <option>30</option>
                            <option>45</option>
                          </select>
                      </div>
                    
                    <button type="submit" class="btn btn-primary">Guardar datos</button>
                  </form>
            </div>
          {{-- </div> --}}
          <!--FIN--CONTENIDO DEL FORMULARIO-->
       </div>
      </div>
     </div>
   </div>
</div>
@endsection