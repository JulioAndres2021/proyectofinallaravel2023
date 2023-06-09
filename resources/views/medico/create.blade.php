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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>{{ __('CREAR MEDICO') }}</h1>
                    <!--CONTENIDO DEL FORMULARIO-->
          {{-- <div class="col-12"> --}}
            <div class="table-responsive">
                <form action="{{route('medico.store')}}" method="POST" >	
                    @csrf
                    <div class="mb-3 mt-3">
                      <label for="nombre" class="form-label">Nombre:</label>
                      <input type="text" class="form-control" id="nombre"  name="nombre">
                    </div>
                    <div class="mb-3">
                      <label for="especialidad" class="form-label">Especialidad:</label>
                      <input type="text" class="form-control" id="especialidad" name="especialidad">
                    </div>
                    <div class="mb-3">
                        <label for="horarios" class="form-label">Horarios: <strong class="text-danger">(Ejemplo de uso: 09:00 a 12:00 16:00 a 20:00)</strong></label>
                        <input type="text" class="form-control" id="horarios" name="horarios">
                      </div>
                      <div class="row">
                        <div class="col">
                            <label for="lunes" class="form-label">Lunes:</label>
                            <select class="form-select form-select-lg text-bg-primary" name="lunes" id="lunes">
                                <option>NO</option>
                                <option>SI</option>
                              </select>
                        </div>
                        <div class="col">
                            <label for="martes" class="form-label">Martes:</label>
                            <select class="form-select form-select-lg text-bg-success" name="martes" id="martes">
                                <option>NO</option>
                                <option>SI</option>
                              </select>
                        </div>
                        <div class="col">
                            <label for="miercoles" class="form-label">Miércoles:</label>
                            <select class="form-select form-select-lg text-bg-warning" name="miercoles" id="miercoles">
                                <option>NO</option>
                                <option>SI</option>
                              </select>
                        </div>
                        <div class="col">
                            <label for="jueves" class="form-label">Jueves:</label>
                            <select class="form-select form-select-lg text-bg-secondary" name="jueves" id="jueves">
                                <option>NO</option>
                                <option>SI</option>
                              </select>
                        </div>
                        <div class="col">
                            <label for="viernes" class="form-label">Viernes:</label>
                            <select class="form-select form-select-lg text-bg-dark" name="viernes" id="viernes">
                                <option>NO</option>
                                <option>SI</option>
                              </select>
                        </div>
                        <div class="col">
                            <label for="sabado" class="form-label">Sábado:</label>
                            <select class="form-select form-select-lg text-bg-danger" name="sabado" id="sabado">
                                <option>NO</option>
                                <option>SI</option>
                              </select>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="matricula" class="form-label">Matrícula:</label>
                        <input type="text" class="form-control" id="matricula" name="matricula">
                      </div>
                      <div class="mb-3">
                        <label for="atiende" class="form-label">Atiende:</label>
                        <select class="form-select form-select-lg" name="atiende" id="atiende">
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