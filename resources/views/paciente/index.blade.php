@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Página Paciente') }}
                    <a class="btn btn-info" href="{{url('/home')}}">Volver</a>
                    <a class="btn btn-success" href="{{route('paciente.create')}}">crear</a>
                </div>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('PORTAL DEL PACIENTE') }}
                    <a href="{{url('home')}}"></a>

                    <!--PANEL DERECHO-->
                    <div class="col-12">
                      <div class="table-responsive">
                        <table class="table ">
                          <thead>
                            <tr>
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
                          <tbody>
                            <!--VERIFICAMOS SI HAY RESULTADO, SI NO MOSTRAMOS MENSAJE-->
                            @if(count($pacientes)<=0)
                            <tr>
                                <td coldspan="6" class="text-danger">NO HAY RESULTADO CON ESA BUSQUEDA</td>
                            </tr>    
                        @else
                              @foreach ($pacientes as $paciente)
                              <tr>
                                  <td>{{$paciente->nombre}}</td>
                                  <td>{{$paciente->apellido}}</td>
                                  <td>{{$paciente->dni}}</td>
                                  {{-- <td>{{$paciente->direccion}}</td>
                                  <td>{{$paciente->localidad}}</td>
                                  <td>{{$paciente->provincia}}</td> --}}
                                  <td>{{$paciente->telefono}}</td>
                                  <td>{{$paciente->mail}}</td>
                                  <td>{{$paciente->obrasocial}}</td>
                                  <td>{{$paciente->ocupacion}}</td>
                                  <td>
                                      <a href="{{ url('paciente/'.$paciente->id.'/edit') }}">
                                          <button class="btn btn-warning">Editar</button>
                                      </a>                
                                  </td>
                                  <td>
                                      <a href="{{ url('paciente/'.$paciente ->id) }}">							
                                          <button class="btn btn-success">Ver</button>
                                      </a>
                                  </td>
                                  <td>
                                      <form method="POST" action="{{ url("paciente/{$paciente->id}") }}">
                                          @csrf
                                          @method('DELETE')
                                          <button class="btn btn-danger" type="submit" onclick="return confirm('Quieres borrar éste paciente?')">Eliminar</button>
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
  