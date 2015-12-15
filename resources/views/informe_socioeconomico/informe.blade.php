@extends('app')
@section('content')


{{--
            {{  dd($socio['vivienda'])  }}
--}}

    <h2 class="text-center">DATOS SOCIECONOMMICOS</h2>


    {!! Form::open(['url' => 'solicitudes', 'files' => true]) !!}


    <div role="tabpanel">


        <!-- Nav tabs -->
        <ul style="margin-bottom:20px" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                      data-toggle="tab">Solicitante y Beneficiario</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Descripcion
                    del caso y Anexos</a></li>
            <li role="presentation"><a href="#socioEco" aria-controls="socioEco" role="tab" data-toggle="tab">Informe
                    Socio Economico</a></li>
        </ul>


        <div class="tab-content">

            <div id="home" role="tabpanel" class="tab-pane active">


                <div class="panel panel-primary">
                    <div class=" text-center panel-heading">SECRETARIA DE GESTION SOCIAL</div>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-xs-12">
                                {!! Form::label('descripcion de la Solicitud ') !!}

                                {!! Form::textarea('descripcion',$informe[0]->descripcion,['class'=>'form-control','rows' => 5]) !!}
                            </div>

                        </div>

                    </div>
                </div>


                <div class="panel panel-primary">
                    <div class=" text-center panel-heading">DATOS DEL BENEFICIARIO</div>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-xs-3">
                                <label for="email">Nacionalidad:</label>
                                <?php $nac = $informe[0]->beneficiario->nacionalidad;  ($nac == 'V') ? $naci = 'VENEZOLANO(A)' : $naci = 'EXTRANJERO(A)';   ?>
                                {!! Form::text('naci_be',$naci,['class'=>'form-control','readonly'=>'true']) !!}
                                {!! Form::hidden('nacionalidad',$nac)  !!}

                            </div>
                            <div class="col-xs-3">

                                {!! Form::label('cedula','Cedula de identidad:');  !!}
                                {!! Form::text('cedula_be',$informe[0]->beneficiario->cedula,['class'=>"form-control","readonly"=>"true"]) !!}

                            </div>


                            <div class="col-xs-3">
                                {!! Form::label('nombre','Nombre:');   !!}
                                {!! Form::text('nombre_be',$informe[0]->beneficiario->nombres,['class'=>'form-control' ]) !!}

                            </div>

                            <div class="col-xs-3 ">

                                {!! Form::label('apellido','Apellido')   !!}
                                {!! Form::text('apellido_be',$informe[0]->beneficiario->apellidos,['class'=>'form-control' ])  !!}

                            </div>

                        </div>
                        <br>

                        <div class="row">

                            <div class="col-xs-3 ">
                                {!! Form::label('Edo.Civil','Edo.Civil')   !!}
                                {!! Form::text('Edocivil_be',$informe[0]->beneficiario->edoCivil->descripcion,['class'=>'form-control'])   !!}

                            </div>

                            <div class="col-xs-3 ">
                                {!! Form::label('masculimo','Masculino')   !!}
                                {!! Form::radio('sexo_be','M')  !!}
                                <br>

                                {!! Form::label('femenino','Femenino')   !!}
                                {!! Form::radio('sexo_be','F')  !!}

                            </div>

                            <div class="col-xs-3 ">
                                {!! Form::label('fecha','Fecha de Nacimiento:')    !!}
                                {!! Form::text('fecha_nacimiento_be',Carbon\Carbon::parse(str_replace('"','',$informe[0]->fecha_nacimiento))->format('d-m-Y'),['class'=>'form-control'])    !!}
                            </div>

                        </div>
                        <br>

                        <div class="row">

                            <div class="col-xs-3 ">
                                {!! Form::label('Ocupacion','Ocupacion:')   !!}
                                {!! Form::text('ocupacion_be',$informe[0]->beneficiario->ocupacion->nombre,['class'=>'form-control']);  !!}
                            </div>


                            <div class="col-xs-3 ">
                                {!! Form::label('Estado','Estado:')   !!}
                                {!! Form::text('estado_be',$informe[0]->beneficiario->estado->nombre,['class'=>'form-control']);  !!}
                            </div>
                            <div class="col-xs-3">
                                {!! Form::label('Municipio','Municipio:')   !!}
                                {!! Form::text('estado_be',$informe[0]->beneficiario->municipio->nombre,['class'=>'form-control']);  !!}

                            </div>

                            <div class="col-xs-3 ">
                                {!! Form::label('Parroquia','Parroquias:')   !!}
                                {!! Form::text('estado_be',$informe[0]->beneficiario->parroquia->nombre,['class'=>'form-control']);  !!}

                            </div>


                        </div>
                        <br>

                        {{-- <div style="display:none; " class="row discapacidad">

                             <div class="col-xs-3">

                                 {!! Form::label('Tipo','Presenta alguna discapacidad:'); !!}
                                 {!! Form::select('discapacidad[algunaDis]',null,null,['class'=>'form-control quitar','disabled'=>true]) !!}

                             </div>


                             <div class="col-xs-3 grado">

                                 {!! Form::label('Tipo','Grado:'); !!}
                                 {!! Form::select('discapacidad[grado]',$gradoDis,0,['class'=>'form-control quitar','disabled'=>true]) !!}

                             </div>

                             <div class="col-xs-3 grado">
                                 {!! Form::label('Tipo','Necesita ayuda tecnica:'); !!}
                                 {!! Form::select('discapacidad[ayudaTecnica]',[''=>'SELECCIONE..',1=>'SI',0=>'NO'],"",['class'=>'form-control quitar','disabled'=>true]) !!}

                             </div>
                             <div class="col-xs-3 grado">
                                 {!! Form::label('Tipo','N° de certificado:'); !!}
                                 {!! Form::text('discapacidad[certificado]',null,['class'=>'form-control quitar','disabled'=>true]) !!}

                             </div>

                         </div>--}}
                        <br>

                        <div class="row">

                            <div class="col-xs-6">
                                <label for="comment">Sector:</label>
                                    <textarea name="sector_be" id='municipio' class="mayusculas form-control" rows="3"
                                              id="comment"></textarea>
                            </div>

                            <div class="col-xs-3 ">

                                {!! Form::label('celular):')  !!}
                                {!! Form::text('celular_be',null,['class'=>'form-control']);  !!}

                            </div>
                            <div class="col-xs-3 ">

                                {!! Form::label('Telefono(Casa):')  !!}
                                {!! Form::text('telefono_be',null,['class'=>'form-control']);  !!}

                            </div>


                        </div>

                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class=" text-center panel-heading">DATOS DEL SOLICITANTE</div>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-xs-3">
                                <label for="email">Nacionalidad:</label>
                                <?php $nac = str_replace('(', '', $informe[0]->solicitante->nacionalidad);  ($nac == 'V') ? $naci = 'VENEZOLANO(A)' : $naci = 'EXTRANJERO(A)';   ?>
                                {!! Form::text('naci_so',$naci,['class'=>'form-control','readonly'=>'true']) !!}
                                {!! Form::hidden('nacionalidad',$nac)  !!}

                            </div>
                            <div class="col-xs-3">

                                {!! Form::label('cedula','Cedula de identidad:');  !!}
                                {!! Form::text('cedula_so',$informe[0]->solicitante->cedula,['class'=>"form-control limpiar"]) !!}

                            </div>


                            <div class="col-xs-3">
                                {!! Form::label('nombre','Nombre:');   !!}
                                {!! Form::text('nombre_so',$informe[0]->solicitante->nombres,['class'=>'form-control limpiar','readonly'=>true ]) !!}

                            </div>

                            <div class="col-xs-3 ">

                                {!! Form::label('apellido','Apellido')   !!}
                                {!! Form::text('apellido_so',$informe[0]->solicitante->apellidos,['class'=>'form-control limpiar','readonly'=>true ])  !!}

                            </div>

                        </div>
                        <br>

                        <div class="row">

                            <div class="col-xs-3 ">
                                {!! Form::label('Edo.Civil','Edo.Civil')   !!}
                                {!! Form::text('edocivil_so',$informe[0]->solicitante->edoCivil->descripcion,['class'=>'form-control'])   !!}

                            </div>

                            <div class="col-xs-3 ">
                                {!! Form::label('masculimo','Masculino')   !!}
                                {!! Form::radio('sexo_so','M',null,['id'=>'macho','class'=>'limpiar'])  !!}
                                <br>

                                {!! Form::label('femenino','Femenino')   !!}
                                {!! Form::radio('sexo_so','F',null,['id'=>'hembra','class'=>'limpiar'])  !!}

                            </div>


                            <div class="col-xs-3 ">
                                {!! Form::label('fecha','Fecha de Nacimiento:')    !!}
                                {!! Form::text('fecha_nacimiento_so',Carbon\Carbon::parse(str_replace('"','',$informe[0]->solicitante->fecha_nacimiento))->format('d-m-Y'),['class'=>'form-control'])    !!}
                            </div>

                        </div>
                        <br>

                        <div class="row">

                            <div class="col-xs-3 ">
                                {!! Form::label('Ocupacion','Ocupacion:')   !!}
                                {!! Form::text('ocupacion_so',$informe[0]->solicitante->ocupacion->nombre,['class'=>'form-control']);  !!}
                            </div>


                            <div class="col-xs-3 ">
                                {!! Form::label('Estado','Estado:')   !!}
                                {!! Form::text('estado_so',$informe[0]->solicitante->estado->nombre,['class'=>'form-control']);  !!}
                            </div>
                            <div class="col-xs-3">
                                {!! Form::label('Municipio','Municipio:')   !!}
                                {!! Form::text('estado_so',$informe[0]->solicitante->municipio->nombre,['class'=>'form-control']);  !!}
                            </div>

                            <div class="col-xs-3 ">
                                {!! Form::label('Parroquia','Parroquias:')   !!}

                                {!! Form::text('estado_so',$informe[0]->solicitante->parroquia->nombre,['class'=>'form-control']);  !!}

                            </div>


                        </div>
                        <br>


                        <div class="row">

                            <div class="col-xs-6">
                                <label for="comment">Sector:</label>
                                        <textarea name="sector_so" id='municipio' class="form-control" rows="3"
                                                  id="comment"></textarea>
                            </div>

                            <div class="col-xs-3 ">

                                {!! Form::label('celular:')  !!}
                                {!! Form::text('celular_so',null,['class'=>'form-control']);  !!}

                            </div>
                            <div class="col-xs-3 ">

                                {!! Form::label('Telefono(Casa):')  !!}
                                {!! Form::text('telefono_so',null,['class'=>'form-control']);  !!}


                            </div>


                        </div>

                    </div>
                </div>
            </div>




            @include('informe_socioeconomico.mortadela')


        </div>
    </div>

@endsection














