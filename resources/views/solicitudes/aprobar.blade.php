@extends('app')
@section('content')

    <h2 class="text-center">APROBACION DE LA SOLICITUD</h2>

    {!! Form::open(['url' => 'aprobar/'.$solicitudes->id]) !!}

    {{--
        {{ dd($solicitudes)  }}
    --}}



    <div class="panel panel-primary">
        <div class=" text-center panel-heading">SECRETARIA DE GESTION SOCIAL</div>
        <div class="panel-body">

            <div class="row">
                <div class="col-xs-4">
                    {!! Form::label('sub secretaria') !!}
                    {!! Form::text('subSecretaria',$solicitudes->coordinacion->subsecretaria->descripcion,['class'=>' sub_secretaria form-control','disabled'=>true]) !!}
                </div>

                <div class="col-xs-7 ">
                    {!! Form::label('coordinacion') !!}
                    {!! Form::text('coordinacion',$solicitudes->coordinacion->nombre ,['class'=>'form-control','disabled'=>true]) !!}

                </div>


                <div style=" margin-top: 10px" class="col-xs-4 ">
                    {!! Form::label('Tipo de solicitud') !!}

                    {!! Form::text('tipoSolicitud', $solicitudes->tipoSolicitud->nombre  ,['class'=>'form-control','disabled'=>true]) !!}

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

            <div class="row text-center">

                <div class="col-xs-12">
                    <label for="comment">Recomendaciones del coordinador(a) :</label>
                    <textarea name="observacion_caso" class="form-control" rows="3" id="comment">{!!  $solicitudes->recomendaciones[0]->comentarios  !!}
                    </textarea>
                </div>


            </div>

            <br>

            <div class="row ">

                <div class="col-xs-2">
                    <label for="comment">{{ ($solicitudes->usuarios[0]->pivot->estatus == 1)? 'Procesado:': 'Verificado:'  }}</label>
                    {!!  Form::text('monto_sugerido',$solicitudes->usuarios[0]->nombres.' '.$solicitudes->usuarios[0]->apellidos,['class'=>'form-control numeros']);    !!}
                    <br>
                    <label for="comment">{{ ($solicitudes->usuarios[1]->pivot->estatus == 1)? 'Procesado': 'Verificado:'  }}</label>
                    {!!  Form::text('nombres',$solicitudes->usuarios[1]->nombres.' '.$solicitudes->usuarios[1]->apellidos,['class'=>'form-control numeros']);    !!}

                </div>

                <div class="col-xs-2">
                    <label for="comment">Fecha:</label>
                    {!!  Form::text('fechas',Carbon\Carbon::parse(str_replace('"','',$solicitudes->usuarios[0]->pivot->fecha_registro))->format('d-m-Y'),['class'=>'form-control numeros']);    !!}

                    <br>
                    <label for="comment">Fecha:</label>
                    {!!  Form::text('fechas',Carbon\Carbon::parse(str_replace('"','',$solicitudes->usuarios[1]->pivot->fecha_registro))->format('d-m-Y'),['class'=>'form-control numeros']);    !!}

                </div>

                <div class="col-xs-4">
                    <br>
                    <br>
                    <br>
                    <br>
                    {!!  Form::label('Sugerencia de atención:');    !!}
                    {!!  Form::select('atencion',$atencion,$solicitudes->recomendaciones[0]->id_tipo_atencion,['class'=>'form-control']);    !!}

                </div>

                <div class=" col-xs-3">
                    <br>
                    <br>
                    <br>
                    <br>
                    {!!  Form::label('Monto sugerido:');  !!}
                    {!!  Form::text('monto_sugerido',$solicitudes->recomendaciones[0]->monto,['class'=>'form-control numeros']);    !!}
                </div>


            </div>

            <br>

            <div class="row">

                <div class=" col-xs-3">
                    {!!  Form::label('Modalidad de atencion:');    !!}
                    {!!  Form::select('atencion',$atencion,"",['class'=>'form-control']);    !!}
                </div>

                <div class=" col-xs-3">
                    {!!  Form::label('Monto sugerido:');  !!}
                    {!!  Form::text('monto',null,['class'=>'form-control numeros']);    !!}
                </div>

            </div>
<br>

            <div class="row text-center">

                <div class="col-xs-12">
                    <label for="comment">Motivo :</label>
                    <textarea name="motivo" class="form-control" rows="3" id="comment"> </textarea>
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
