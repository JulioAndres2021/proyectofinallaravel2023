@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header mr-3">{{ __('Página Paciente') }}
                    <a class="btn btn-info" href="{{route('paciente.index')}}">Volver</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h1> {{ __('EDITAR PACIENTE') }}</h1>
                    <!--CONTENIDO DEL FORMULARIO-->
          {{-- <div class="col-12"> --}}
            <div class="table-responsive">
                <form action="{{ url('/paciente/'.$pacientes->id) }}" method="post" >	
                    @csrf
                    @method('PATCH')
                    <input type="text" name="id" value="{{ $pacientes -> id }}" hidden> 
                    <div class="mb-3 mt-3">
                      <label for="nombre" class="form-label">Nombre:</label>
                      <input type="text" class="form-control" id="nombre"  name="nombre" value="{{ $pacientes -> nombre }}">
                    </div>
                    <div class="mb-3">
                      <label for="apellido" class="form-label">Apellido:</label>
                      <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $pacientes -> apellido }}">
                    </div>
                    <div class="mb-3">
                        <label for="dni" class="form-label">DNI: <strong class="text-danger">(Sin puntos)</strong></label>
                        <input type="text" class="form-control" id="dni" name="dni" value="{{ $pacientes -> dni }}">
                      </div>
                      <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $pacientes -> direccion }}">
                      </div>
                      <div class="mb-3">
                        <label for="localidad" class="form-label">Localidad:</label>
                        <input type="text" class="form-control" id="localidad" name="localidad" value="{{ $pacientes -> localidad }}">
                      </div>
                      <div class="mb-3">
                        <label for="provincia" class="form-label">Provincia:</label>
                        <input type="text" class="form-control" id="provincia" name="provincia" value="{{ $pacientes -> provincia }}">
                      </div>
                      <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $pacientes -> telefono }}">
                      </div>
                      <div class="mb-3">
                        <label for="mail" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" id="mail" name="mail" value="{{ $pacientes -> mail }}">
                      </div>
                      <div class="mb-3">
                        <label for="obrasocial" class="form-label">Obra Social:</label>
                        <input type="text" class="form-control" id="obrasocial" name="obrasocial" value="{{ $pacientes -> obrasocial }}">
                      </div>
                      <div class="mb-3">
                        <label for="ocupacion" class="form-label">Ocupación:</label>
                        <input type="text" class="form-control" id="ocupacion" name="ocupacion" value="{{ $pacientes -> ocupacion }}">
                      </div>
                      
                    
                    <button type="submit" class="btn btn-primary">Editar los datos</button>
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