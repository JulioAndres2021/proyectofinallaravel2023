@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header mr-3">{{ __('Página Mostrar Médico') }}
                    <a class="btn btn-info" href="{{url('/medico')}}">Volver</a>
                    
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

                        <!--MOSTRAR LOS DIAS DE LA SEMANA-->
                        <div class="row mb-3">
                            <!--LUNES-->
                            <div class="col-sm-2 themed-grid-col">
                                <div class="col text-center">
                                    <label for="lunes" class="form-label">LUNES</label>
                                    <p class="text-bg-primary">{{$medicos->lunes}}</p>
                                </div>
                            </div>
                            <!--MARTES-->
                            <div class="col-sm-2 themed-grid-col">
                                <div class="col text-center">
                                    <label for="lunes" class="form-label">MARTES</label>
                                    <p class="text-bg-success">{{$medicos->martes}}</p>
                                </div>
                            </div>
                            <!--MIERCOLES-->
                            <div class="col-sm-2 themed-grid-col">
                                <div class="col text-center">
                                    <label for="lunes" class="form-label">MIERCOLES</label>
                                    <p class="text-bg-warning">{{$medicos->miercoles}}</p>
                                </div>
                            </div>
                            <!--JUEVES-->
                            <div class="col-sm-2 themed-grid-col">
                                <div class="col text-center">
                                    <label for="lunes" class="form-label">JUEVES</label>
                                    <p class="text-bg-secondary">{{$medicos->jueves}}</p>
                                </div>
                            </div>
                            <!--VIERNES-->
                            <div class="col-sm-2 themed-grid-col">
                                <div class="col text-center">
                                    <label for="lunes" class="form-label">VIERNES</label>
                                    <p class="text-bg-dark">{{$medicos->viernes}}</p>
                                </div>
                            </div>
                            <!--SABADO-->
                            <div class="col-sm-2 themed-grid-col">
                                <div class="col text-center">
                                    <label for="lunes" class="form-label">SABADO</label>
                                    <p class="text-bg-danger">{{$medicos->sabado}}</p>
                                </div>
                            </div>
                          </div>
                        <!--FIN MOSTRAR LOS DIAS DE LA SEMANA-->

                        <!--PANEL PARA MOSTRAR MEDICO-->
                        <div class="container px-4 py-5" id="featured-3">
                            <h2 class="pb-2 border-bottom">Detalle del Médico</h2>
                            <!--lg-2 es para las columnas, en este caso ponemos dos columnas-->
                            <div class="row g-4 py-5 row-cols-1 row-cols-lg-2">

                              <!--CAJA PRIMERA-->
                              <div class="feature col">
                                <!--CAJA NOMBRE MEDICO-->
                                <div class="box-blue"><h3 class="text-center">
                                   {{$medicos->nombre}}</h3>
                                </div>
                                <!--CAJA MATRICULA MEDICO-->
                                <div class="box-grey"><h3 class="text-center">
                                  Matrícula:
                                  <strong>{{$medicos->matricula}}</strong></h3>
                               </div>
                               <!--CAJA ESPECIALIDAD MEDICO-->
                               <div class="box-grey"><h3 class="text-center">
                                Especialidad:
                                <strong>{{$medicos->especialidad}}</strong></h3>
                             </div>
                            </div>

                              <!--CAJA DEL MEDIO-->
                              <div class="feature col">
                                <!--CAJA HORARIOS MEDICO-->
                                <div class="box-green"><h3 class="text-center">
                                  Horarios:
                                  {{$medicos->horarios}}</h3>
                               </div>

                               <!--CAJA CADA MEDICO-->
                               <div class="box-red"><h3 class="text-center">
                                  Cada:
                                  {{$medicos->cada}}</h3>
                              </div>

                                {{-- <h2>Featured title 2</h2>
                                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                                <a href="#" class="icon-link">
                                  Call to action
                                  <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
                                </a> --}}
                              </div>
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

                        

                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection