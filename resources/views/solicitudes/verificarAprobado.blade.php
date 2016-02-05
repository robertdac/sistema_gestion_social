@extends('app')
@section('content')

    <h2 class="text-center">VERIFICACIÓN DE LA SOLICITUD</h2>

    {!! Form::open(['url' => 'verificar/'.$solicitudes->id]) !!}

    <div class="panel panel-primary">
        <div class=" text-center panel-heading">SECRETARIA DE GESTION SOCIAL</div>
        <div class="panel-body">

            <div class="row">
                <div class="col-xs-4">
                    {!! Form::label('sub secretaria') !!}
                    {!! Form::select('subSecretaria',$subSecretaria,null,['class'=>' sub_secretaria form-control','disabled'=>true]) !!}
                </div>

                <div class="col-xs-4 ">
                    {!! Form::label('coordinacion') !!}
                    {!! Form::select('coordinacion',$coordinacion,null,['class'=>'form-control','disabled'=>true]) !!}

                </div>


                <div class="col-xs-3 ">
                    {!! Form::label('Tipo de solicitud') !!}

                    {!! Form::select('tipoSolicitud',$tipoSolicitud,null,['class'=>'form-control']) !!}

                </div>


            </div>


        </div>
    </div>

    <div class="panel panel-primary">
        <div class=" text-center panel-heading">DATOS DEL BENEFICIARIO</div>
        <div class="panel-body">

            <div class="row">
                <div class="col-xs-3">
                    <label for="naci_be">Nacionalidad:</label>
                    <?php $nac = $solicitudes->beneficiario->nacionalidad;  ($nac == 'V') ? $naci = 'VENEZOLANO(A)' : $naci = 'EXTRANJERO(A)';   ?>
                    {!! Form::text('naci_be',$naci,['class'=>'form-control','disabled'=>'true']) !!}
                    {!! Form::hidden('nacionalidad',$nac)  !!}

                </div>
                <div class="col-xs-3">

                    {!! Form::label('cedula','Cedula de identidad:');  !!}
                    {!! Form::text('cedula_be',$solicitudes->beneficiario->cedula,['class'=>"form-control","disabled"=>"true"]) !!}

                </div>


                <div class="col-xs-3">
                    {!! Form::label('nombre','Nombre:');   !!}
                    {!! Form::text('nombre_be',$solicitudes->beneficiario->nombres,['class'=>'form-control',"disabled"=>"true" ]) !!}

                </div>

                <div class="col-xs-3 ">

                    {!! Form::label('apellido','Apellido')   !!}
                    {!! Form::text('apellido_be',$solicitudes->beneficiario->apellidos,['class'=>'form-control',"disabled"=>"true" ])  !!}

                </div>

            </div>
            <br>

            <div class="row">

                <div class="col-xs-3 ">
                    {!! Form::label('Edo.Civil','Edo.Civil')   !!}
                    {!! Form::select('Edocivil_be',$edo_civil,$solicitudes->beneficiario->id_edocivil,['class'=>'form-control'])   !!}

                </div>

                <div class="col-xs-3 ">
                    {!! Form::label('masculimo','Masculino')   !!}
                    {!! Form::radio('sexo_be','M',($solicitudes->beneficiario->sexo == 'M') ? 1 : 0)  !!}
                    <br>
                    {!! Form::label('femenino','Femenino')   !!}
                    {!! Form::radio('sexo_be','F',($solicitudes->beneficiario->sexo == 'F')? 1 : 0 )   !!}

                </div>

                <div class="col-xs-3 ">
                    {!! Form::label('fecha','Fecha de Nacimiento:')    !!}
                    {!! Form::text('fecha_nacimiento_be',Carbon\Carbon::parse(str_replace('"','',$solicitudes->beneficiario->fecha_nacimiento))->format('d-m-Y'),['class'=>'form-control','disabled'=>true])    !!}
                </div>

            </div>
            <br>


            <div class="row">

                <div class="col-xs-3 ">
                    {!! Form::label('Ocupacion','Ocupacion:')   !!}
                    {!! Form::select('ocupacion_be',$ocupacion,$solicitudes->beneficiario->id_ocupacion,['class'=>'form-control']);  !!}
                </div>


                <div class="col-xs-3 ">
                    {!! Form::label('Estado','Estado:')   !!}
                    {!! Form::select('estado_be',$estado,$solicitudes->beneficiario->estado->id,['class'=>'form-control estado']);  !!}
                </div>
                <div class="col-xs-3">
                    {!! Form::label('Municipio','Municipio:')   !!}
                    {!! Form::select('municipio_be',$municipio,$solicitudes->beneficiario->id_municipio,['class'=>'form-control municipio']);  !!}

                </div>
                <div class="col-xs-3 ">
                    {!! Form::label('Parroquia','Parroquias:')   !!}

                    {!! Form::select('parroquias_be',$parroquia,$solicitudes->beneficiario->id_parroquia,['class'=>'form-control parroquias']);  !!}

                </div>


            </div>

            {{--si el beneficiario posee alguna discapacidad--}}
            @if(isset($solicitudes->beneficiario->beneficiario_discapacidad[0]))
                <br>
                <div class="row discapacidad">

                    <div class="col-xs-3">

                        {!! Form::label('Tipo','Presenta alguna discapacidad:'); !!}
                        {!! Form::select('discapacidad[algunaDis]',$discapacidad,$solicitudes->beneficiario->beneficiario_discapacidad[0]->discapacidad->id,['class'=>'form-control']) !!}

                    </div>


                    <div class="col-xs-3 grado">

                        {!! Form::label('Tipo','Grado:'); !!}
                        {!! Form::select('discapacidad[grado]',$gradoDis,$solicitudes->beneficiario->beneficiario_discapacidad[0]->GradoDiscapacidad->id,['class'=>'form-control']) !!}

                    </div>

                    <div class="col-xs-3 grado">
                        {!! Form::label('Tipo','Necesita ayuda tecnica:'); !!}
                        {!! Form::select('discapacidad[ayudaTecnica]',[''=>'SELECCIONE..',1=>'SI',0=>'NO'],$solicitudes->beneficiario->beneficiario_discapacidad[0]->ayuda_tecnica,['class'=>'form-control']) !!}

                    </div>
                    <div class="col-xs-3 grado">
                        {!! Form::label('Tipo','N° de certificado:'); !!}
                        {!! Form::text('discapacidad[certificado]',$solicitudes->beneficiario->beneficiario_discapacidad[0]->certificado_discp,['class'=>'form-control']) !!}

                    </div>

                </div>
            @endif

            <br>

            <div class="row">

                <div class="col-xs-6">
                    <label for="comment">Sector:</label>
                                        <textarea name="sector_be" id='municipio' class="mayusculas form-control"
                                                  rows="3"
                                                  id="comment">{!! $solicitudes->beneficiario->direccion  !!}</textarea>
                </div>

                <div class="col-xs-3 ">

                    {!! Form::label('celular_be','Celular:')  !!}
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
                    <?php $nac = $solicitudes->solicitante->nacionalidad;  ($nac == 'V') ? $naci = 'VENEZOLANO(A)' : $naci = 'EXTRANJERO(A)';   ?>
                    {!! Form::text('naci_so',$naci,['class'=>'form-control','disabled'=>'true']) !!}
                    {!! Form::hidden('nacionalidad',$nac)  !!}

                </div>
                <div class="col-xs-3">

                    {!! Form::label('cedula','Cedula de identidad:');  !!}
                    {!! Form::text('cedula_so',$solicitudes->solicitante->cedula,['class'=>"form-control",'disabled'=>true]) !!}

                </div>


                <div class="col-xs-3">
                    {!! Form::label('nombre','Nombre:');   !!}
                    {!! Form::text('nombre_so',$solicitudes->solicitante->nombres,['class'=>'form-control limpiar','disabled'=>true ]) !!}

                </div>

                <div class="col-xs-3 ">

                    {!! Form::label('apellido','Apellido')   !!}
                    {!! Form::text('apellido_so',$solicitudes->solicitante->apellidos,['class'=>'form-control limpiar','disabled'=>true ])  !!}

                </div>

            </div>
            <br>

            <div class="row">

                <div class="col-xs-3 ">
                    {!! Form::label('Edo.Civil','Edo.Civil')   !!}
                    {!! Form::select('edocivil_so',$edo_civil,$solicitudes->solicitante->id_edocivil,['class'=>'form-control'])   !!}

                </div>

                <div class="col-xs-3 ">
                    {!! Form::label('masculimo','Masculino')   !!}
                    {!! Form::radio('sexo_so','M',($solicitudes->solicitante->sexo == 'M') ? 1:0,['id'=>'macho','class'=>'limpiar'])  !!}
                    <br>

                    {!! Form::label('femenino','Femenino')   !!}
                    {!! Form::radio('sexo_so','F',($solicitudes->solicitante->sexo == 'F') ? 1:0,['id'=>'hembra','class'=>'limpiar'])  !!}

                </div>

                <div class="col-xs-3 ">
                    {!! Form::label('fecha','Fecha de Nacimiento:')    !!}
                    {!! Form::text('fecha_nacimiento_so',Carbon\Carbon::parse(str_replace('"','',$solicitudes->solicitante->fecha_nacimiento))->format('d-m-Y'),['class'=>'limpiar form-control','disabled'=>true])    !!}
                </div>

            </div>
            <br>

            <div class="row">

                <div class="col-xs-3 ">
                    {!! Form::label('Ocupacion','Ocupacion:')   !!}
                    {!! Form::select('ocupacion_so',$ocupacion,$solicitudes->solicitante->id_ocupacion,['class'=>'form-control']);  !!}
                </div>
                <div class="col-xs-3 ">
                    {!! Form::label('Estado','Estado:')   !!}
                    {!! Form::select('estado_so',$estado,$solicitudes->solicitante->id_estado,['class'=>'form-control estado2']);  !!}
                </div>
                <div class="col-xs-3">
                    {!! Form::label('Municipio','Municipio:')   !!}
                    {!! Form::select('municipio_so',$municipio,$solicitudes->solicitante->id_municipio,['class'=>'form-control municipio2']);  !!}

                </div>

                <div class="col-xs-3 ">
                    {!! Form::label('Parroquia','Parroquias:')   !!}
                    {!! Form::select('parroquia_so',$parroquia,$solicitudes->solicitante->id_parroquia,['class'=>'form-control parroquias2']);  !!}

                </div>


            </div>
            <br>

            <div class="row">

                <div class="col-xs-6">
                    <label for="comment">Sector:</label>
                                        <textarea name="sector_so" id='municipio' class="form-control" rows="3"
                                                  id="comment">{!! $solicitudes->solicitante->direccion  !!}</textarea>
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

    <div class="panel panel-primary">
        <div class=" text-center panel-heading">DESCRIPCION DEL CASO</div>
        <div class="panel-body">
            <div class="row">

                <div class="col-xs-12 text-center">
                    <label for="comment">Breve descripcion del caso:</label>
                    <textarea name="descripcion_caso" class="form-control"
                              rows="3">{!! $solicitudes->descripcion  !!} </textarea>
                </div>
            </div>
            <br>

            <div class="row text-center">

                <div class="col-xs-12">
                    <label for="comment">Observaciones de la solicitud:</label>
                    <textarea name="observacion_caso" class="form-control" rows="3" id="comment">{!!  $solicitudes->observacion  !!}
                    </textarea>
                </div>


            </div>

            <br>

            <div class="row">

                <div class=" col-xs-3">
                    {!!  Form::label('Sugerencia de atención:');    !!}
                    {!!  Form::select('atencion',$atencion,"",['class'=>'form-control']);    !!}
                </div>

                <div class=" col-xs-3">
                    {!!  Form::label('Monto sugerido:');  !!}
                    {!!  Form::text('monto_sugerido',null,['class'=>'form-control numeros']);    !!}
                </div>

            </div>

            <br>

            <div class="row text-center">

                <div class="col-xs-12">
                    <label for="comment">Recomendaciones Coordinador(a) :</label>
                    <textarea name="recomendacion_coordinador" class="form-control" rows="3" id="comment"></textarea>
                </div>


            </div>

            <br>

            <div class="col-xs-12 text-center">

                {!! Form::submit('Enviar',['class'=>'btn btn-primary btn-lg']); !!}

            </div>

        </div>
    </div>

    {!! Form::close() !!}
@endsection
