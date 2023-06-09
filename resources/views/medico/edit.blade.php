@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header mr-3">{{ __('Página Editar Médico') }}
                    <a class="btn btn-info" href="{{route('medico.index')}}">Volver</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>{{ __('EDITAR MEDICO') }}</h1>
                    <!--CONTENIDO DEL FORMULARIO-->
          {{-- <div class="col-12"> --}}
            <div class="table-responsive">
                <form method="post"  action="{{ url('/medico/'.$medicos -> id) }}">		
                    @csrf
                    @method('put')
                    <div class="mb-3 mt-3">
                      <label for="nombre" class="form-label">Nombre:</label>
                      <input type="text" class="form-control" id="nombre"  name="nombre" value="{{ $medicos->nombre }}">
                    </div>
                    <div class="mb-3">
                      <label for="especialidad" class="form-label">Especialidad:</label>
                      <input type="text" class="form-control" id="especialidad" name="especialidad" value="{{ $medicos->especialidad }}">
                    </div>
                    <div class="mb-3">
                        <label for="horarios" class="form-label">Horarios: <strong class="text-danger">(Ejemplo de uso: 09:00 a 12:00 16:00 a 20:00)</strong></label>
                        <input type="text" class="form-control" id="horarios" name="horarios" value="{{ $medicos->horarios }}">
                      </div>
                      <div class="row">
                        <div class="col">
                            <label for="lunes" class="form-label">Lunes:</label>
                            <select class="form-select form-select-lg text-bg-primary" name="lunes" id="lunes" >
                                
                                @if ($medicos->lunes == 'SI')
                                <option >{{ $medicos->lunes }}</option>
                                <option >NO</option>
                                @else
                                <option >{{ $medicos->lunes }}</option>
                                <option >SI</option>    
                                @endif
                            </select>
                        </div>
                        <div class="col">
                            <label for="martes" class="form-label">Martes:</label>
                            <select class="form-select form-select-lg text-bg-success" name="martes" id="martes" >
                                @if ($medicos->martes == 'SI')
                                <option >{{ $medicos->martes }}</option>
                                <option >NO</option>
                                @else
                                <option >{{ $medicos->martes }}</option>
                                <option >SI</option>    
                                @endif
                            </select>
                              </select>
                        </div>
                        <div class="col">
                            <label for="miercoles" class="form-label">Miércoles:</label>
                            <select class="form-select form-select-lg text-bg-warning" name="miercoles" id="miercoles" >
                                @if ($medicos->miercoles == 'SI')
                                <option >{{ $medicos->miercoles }}</option>
                                <option >NO</option>
                                @else
                                <option >{{ $medicos->miercoles }}</option>
                                <option >SI</option>    
                                @endif
                              </select>
                        </div>
                        <div class="col">
                            <label for="jueves" class="form-label">Jueves:</label>
                            <select class="form-select form-select-lg text-bg-secondary" name="jueves" id="jueves" >
                                @if ($medicos->jueves == 'SI')
                                <option >{{ $medicos->jueves }}</option>
                                <option >NO</option>
                                @else
                                <option >{{ $medicos->jueves }}</option>
                                <option >SI</option>    
                                @endif
                              </select>
                              </select>
                        </div>
                        <div class="col">
                            <label for="viernes" class="form-label">Viernes:</label>
                            <select class="form-select form-select-lg text-bg-dark" name="viernes" id="viernes" >
                                @if ($medicos->viernes == 'SI')
                                <option >{{ $medicos->viernes }}</option>
                                <option >NO</option>
                                @else
                                <option >{{ $medicos->viernes }}</option>
                                <option >SI</option>    
                                @endif
                              </select>
                        </div>
                        <div class="col">
                            <label for="sabado" class="form-label">Sábado:</label>
                            <select class="form-select form-select-lg text-bg-danger" name="sabado" id="sabado">
                                @if ($medicos->sabado == 'SI')
                                <option >{{ $medicos->sabado }}</option>
                                <option >NO</option>
                                @else
                                <option >{{ $medicos->sabado }}</option>
                                <option >SI</option>    
                                @endif
                              </select>
                              </select>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="matricula" class="form-label">Matrícula:</label>
                        <input type="text" class="form-control" id="matricula" name="matricula" value="{{ $medicos->matricula }}">
                      </div>
                      <div class="mb-3">
                        <label for="atiende" class="form-label">Atiende:</label>
                        <select class="form-select form-select-lg" name="atiende" id="atiende" >
                            @if ($medicos->atiende == 'SI')
                                <option >{{ $medicos->atiende }}</option>
                                <option >NO</option>
                                @else
                                <option >{{ $medicos->atiende }}</option>
                                <option >SI</option>    
                                @endif
                          </select>
                      </div>
                      <div class="mb-3">
                        <label for="cada" class="form-label">Cada x Minutos: <strong class="text-danger">(Ejemplo de uso: 15)</strong></label>
                        <input type="number" name="cada" id="cada" value="{{ $medicos->cada }}">
                       
                      </div>

                    <button type="submit" class="btn btn-primary">Guardar datos Editados</button>

                  </form>
            </div>
          {{-- </div> --}}
          <!--FIN--CONTENIDO DEL FORMULARIO-->
       </div>
      </div>
     </div>
   </div>
</div>
<!--para los campos con numeros-->
{{-- <script type="text/javascript" src="{{ asset('/mascara.js') }}"></script> --}}
@endsection
