@extends('app')
@section('content')

    <h2 class="text-center">EDICIÓN DE LA SOLICITUD</h2>


    {!! Form::open(['url' => "editar_solicitudes/$solicitudes->id",'id'=>'editForm', 'files' => true]) !!}


    <div role="tabpanel">


        @if (Session::has('mensaje'))
            <div class="alert alert-success">{{ Session::get('mensaje') }}</div>
        @endif

        @if($errors->has())
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                @endif
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
                                    <div class="col-xs-4">


                                        {!! Form::label('sub secretaria') !!}
                                        {!! Form::select('sub_secretaria',$subSecretaria,null,['required'=>'',  'class'=>'sub_secretaria form-control','readonly'=>true]) !!}
                                    </div>

                                    <div class="col-xs-4 ">
                                        {!! Form::label('coordinacion') !!}
                                        {!! Form::select('coordinacion',$coordinacion,null,['required'=>'','class'=>'form-control','onlyread'=>true]) !!}

                                    </div>


                                    <div class="col-xs-3 ">
                                        {!! Form::label('Tipo de solicitud') !!}

                                        {!! Form::select('tipo_solicitud',$tipoSolicitud,null,[ 'required'=>'','class'=>'form-control']) !!}


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
                                        {!! Form::text('naci_be',$naci,['class'=>'form-control','onlyread'=>'true']) !!}
                                        {!! Form::hidden('nacionalidad',$nac)  !!}

                                    </div>
                                    <div class="col-xs-3">

                                        {!! Form::label('cedula','Cedula de identidad:');  !!}
                                        {!! Form::text('cedula_be',$solicitudes->beneficiario->cedula,['class'=>"form-control","onlyread"=>"true"]) !!}

                                    </div>


                                    <div class="col-xs-3">
                                        {!! Form::label('nombre','Nombre:');   !!}
                                        {!! Form::text('nombre_be',$solicitudes->beneficiario->nombres,['class'=>'form-control',"onlyread"=>"true" ]) !!}

                                    </div>

                                    <div class="col-xs-3 ">

                                        {!! Form::label('apellido','Apellido')   !!}
                                        {!! Form::text('apellido_be',$solicitudes->beneficiario->apellidos,['class'=>'form-control',"onlyread"=>"true" ])  !!}

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
                                        {!! Form::text('fecha_nacimiento_be',Carbon\Carbon::parse(str_replace('"','',$solicitudes->beneficiario->fecha_nacimiento))->format('d-m-Y'),['class'=>'form-control','onlyread'=>true])    !!}
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
                                        {!! Form::select('estado_be',$estado,$solicitudes->beneficiario->estado->id,['required'=>'','class'=>'form-control estado']);  !!}
                                    </div>
                                    <div class="col-xs-3">
                                        {!! Form::label('Municipio','Municipio:')   !!}
                                        {!! Form::select('municipio_be',$municipio,$solicitudes->beneficiario->id_municipio,['required'=>'','class'=>'form-control municipio']);  !!}

                                    </div>
                                    <div class="col-xs-3 ">
                                        {!! Form::label('Parroquia','Parroquias:')   !!}

                                        {!! Form::select('parroquias_be',$parroquia,$solicitudes->beneficiario->id_parroquia,['required'=>'','class'=>'form-control parroquias']);  !!}

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
                                        <textarea required="" name="sector_be" id='municipio'
                                                  class="mayusculas form-control" rows="3"
                                                  id="comment">{!! $solicitudes->beneficiario->direccion  !!}</textarea>
                                    </div>

                                    <div class="col-xs-3 ">

                                        {!! Form::label('celular_be','Celular:')  !!}
                                        {!! Form::text('celular_be',$solicitudes->beneficiario->telefonos[1]->numero,['required'=>'','class'=>'numero form-control']);  !!}

                                    </div>
                                    <div class="col-xs-3 ">

                                        {!! Form::label('Telefono(Casa):')  !!}
                                        {!! Form::text('telefono_be',$solicitudes->beneficiario->telefonos[0]->numero,['required'=>'','class'=>'numero  form-control']);  !!}

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
                                        {!! Form::text('naci_so',$naci,['class'=>'form-control','onlyread'=>'true']) !!}
                                        {!! Form::hidden('nacionalidad',$nac)  !!}


                                    </div>
                                    <div class="col-xs-3">

                                        {!! Form::label('cedula','Cedula de identidad:');  !!}
                                        {!! Form::text('cedula_so',$solicitudes->solicitante->cedula,['class'=>"form-control",'onlyread'=>true]) !!}

                                    </div>


                                    <div class="col-xs-3">
                                        {!! Form::label('nombre','Nombre:');   !!}
                                        {!! Form::text('nombre_so',$solicitudes->solicitante->nombres,['class'=>'form-control limpiar','onlyread'=>true ]) !!}

                                    </div>

                                    <div class="col-xs-3 ">

                                        {!! Form::label('apellido','Apellido')   !!}
                                        {!! Form::text('apellido_so',$solicitudes->solicitante->apellidos,['class'=>'form-control limpiar','onlyread'=>true ])  !!}

                                    </div>

                                </div>
                                <br>

                                <div class="row">

                                    <div class="col-xs-3 ">
                                        {!! Form::label('Edo.Civil','Edo.Civil')   !!}
                                        {!! Form::select('edocivil_so',$edo_civil,$solicitudes->solicitante->id_edocivil,['class'=>'form-control'])   !!}

                                    </div>

                                    <div class="col-xs-3 ">
                                        <p>
                                            {!! Form::label('masculimo','Masculino')   !!}
                                            {!! Form::radio('sexo_so','M',($solicitudes->solicitante->sexo == 'M') ? 1:0,['required'=>'','id'=>'macho','class'=>'limpiar'])  !!}
                                            <br>

                                            {!! Form::label('femenino','Femenino')   !!}
                                            {!! Form::radio('sexo_so','F',($solicitudes->solicitante->sexo == 'F') ? 1:0,['id'=>'hembra','class'=>'limpiar'])  !!}
                                        </p>
                                    </div>

                                    <div class="col-xs-3 ">
                                        {!! Form::label('fecha','Fecha de Nacimiento:')    !!}
                                        {!! Form::text('fecha_nacimiento_so',Carbon\Carbon::parse(str_replace('"','',$solicitudes->solicitante->fecha_nacimiento))->format('d-m-Y'),['class'=>'limpiar form-control','onlyread'=>true])    !!}
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
                                        {!! Form::select('estado_so',$estado,$solicitudes->solicitante->id_estado,['required'=>'','class'=>'form-control estado2']);  !!}
                                    </div>
                                    <div class="col-xs-3">
                                        {!! Form::label('Municipio','Municipio:')   !!}
                                        {!! Form::select('municipio_so',$municipio,$solicitudes->solicitante->id_municipio,['required'=>'','class'=>'form-control municipio2']);  !!}

                                    </div>

                                    <div class="col-xs-3 ">
                                        {!! Form::label('Parroquia','Parroquias:')   !!}
                                        {!! Form::select('parroquia_so',$parroquia,$solicitudes->solicitante->id_parroquia,['required'=>'','class'=>'form-control parroquias2']);  !!}

                                    </div>


                                </div>
                                <br>

                                <div class="row">

                                    <div class="col-xs-6">
                                        <label for="comment">Sector:</label>
                                        <textarea required="" name="sector_so" id='municipio' class="form-control"
                                                  rows="3"
                                                  id="comment">{!! $solicitudes->solicitante->direccion  !!}</textarea>
                                    </div>

                                    <div class="col-xs-3 ">

                                        {!! Form::label('celular:')  !!}
                                        {!! Form::text('celular_so',$solicitudes->solicitante->telefonos[0]->numero,['required'=>'','class'=>'numeros form-control']);  !!}

                                    </div>
                                    <div class="col-xs-3 ">

                                        {!! Form::label('Telefono(Casa):')  !!}
                                        {!! Form::text('telefono_so',$solicitudes->solicitante->telefonos[1]->numero,['required'=>'','class'=>'numeros form-control']);  !!}


                                    </div>


                                </div>

                            </div>


                        </div>


                    </div>


                    @include('solicitudes.editar_descripcion')
                    @include('solicitudes.editar_socio_economico')


                </div>


    </div>

    </form>

    <script>
        function getData(id) {

            $.ajax({
                url: "{{ url('consulta') }}",
                data: "id=" + id
                ,
                error: function () {
                    //  $('#info').html('<p>An error has occurred</p>');
                },
                dataType: 'json',
                success: function (data) {
                    var d = data[0].dtmnacimiento.slice(0, 10).split('-');
                    $("[name='nombre_so']").val(data[0].strnombre_primer);
                    $("[name='apellido_so']").val(data[0].strapellido_primer);
                    $("[name='fecha_nacimiento_so']").val(d[2] + '-' + d[1] + '-' + d[0]);
                    $("[name='edocivil_so']").val(data[0].clvestado_civil);

                    if (data[0].strgenero == 'M') {
                        $('#macho').prop('checked', true);
                    } else {
                        $('#hembra').prop('checked', true);
                    }

                },
                type: 'GET'
            });

        }

        function Limpiar() {
            $('.limpiar').val('');
            $('#macho').prop('checked', false)
            $('#hembra').prop('checked', false)
        }





    </script>








@endsection
