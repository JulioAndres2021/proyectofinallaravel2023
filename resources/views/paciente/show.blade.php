@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header mr-3">{{ __('Página Mostrar Paciente') }}
                    <a class="btn btn-info" href="{{url('/paciente')}}">Volver</a>
                    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- {{ __('PORTAL DEL MEDICO') }} --}}
                    
                    <!--PANEL DERECHO-->
                    <div class="col-12">

                        <!--PANEL PARA MOSTRAR MEDICO-->
                        <div class="container px-4 py-5" id="featured-3">
                            <h2 class="pb-2 border-bottom">Detalle del Paciente</h2>
                            <!--lg-2 es para las columnas, en este caso ponemos dos columnas-->
                            <div class="row g-4 py-5 row-cols-1 row-cols-lg-2">

                              <!--CAJA PRIMERA-->
                              <div class="feature col">
                                <!--CAJA NOMBRE PACIENTE-->
                                <div class="box-blue"><h3 class="text-center">
                                    Nombre:
                                   {{$pacientes->nombre}}</h3>
                                </div>
                                <!--CAJA APELLIDO PACIENTE-->
                                <div class="box-blue"><h3 class="text-center">
                                  Apellido:
                                  <strong>{{$pacientes->apellido}}</strong></h3>
                               </div>
                               <!--CAJA DNI PACIENTE-->
                               <div class="box-blue"><h3 class="text-center">
                                DNI:
                                <strong>{{$pacientes->dni}}</strong></h3>
                             </div>
                            </div>

                              <!--CAJA DEL MEDIO-->
                              <div class="feature col">
                                <!--CAJA DIRECCION PACIENTE-->
                                <div class="box-green"><h3 class="text-center">
                                  Dirección:
                                  {{$pacientes->direccion}}</h3>
                               </div>

                               <!--CAJA LOCALIDAD PACIENTE-->
                               <div class="box-red"><h3 class="text-center">
                                  Localidad:
                                  {{$pacientes->localidad}}</h3>
                              </div>
                               <!--CAJA LOCALIDAD PACIENTE-->
                               <div class="box-yellow"><h3 class="text-center">
                                Provincia:
                                {{$pacientes->provincia}}</h3>
                            </div>

                                 {{-- <h2>Featured title 2</h2>
                                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                                <a href="#" class="icon-link">
                                  Call to action
                                  <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
                                </a> 
                              </div> --}}
                              {{-- <div class="feature col">
                                
                                <h2>Featured title 3</h2>
                                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                                <a href="#" class="icon-link">
                                  Call to action
                                  <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
                                </a>
                              </div> --}}
                            </div>
                          </div>
                        <!--FIN PARA MOSTRAR PANEL MEDICO-->
                          <!--CAJA LOCALIDAD PACIENTE-->
                          
                          <div class="mt-4 p-5 bg-primary text-white rounded text-center">
                            <h1> Obra Social: {{$pacientes->obrasocial}}</h1>
                            <h2>Teléfono: {{$pacientes->telefono}}</h2>
                            <h3><p>E-mail: {{$pacientes->mail}}</p></h3>
                            <h4><p>Ocupación: {{$pacientes->ocupacion}}</p></h3>
                          </div>
  

                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection