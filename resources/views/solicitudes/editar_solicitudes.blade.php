@extends('app')
@section('content')

    <h2 class="text-center">EDICIÓN DE LA SOLICITUD</h2>


    {!! Form::open(['url' => "editar_solicitudes/$solicitudes->id", 'files' => true]) !!}


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


        $(document).ready(function () {


            $('.coordinacion').click(function () {

                        var tipo = $('.coordinacion option:selected').val();

                        if (tipo == 1) {
                            $(".discapacidad").show("slow");
                            $('.quitar').removeAttr("disabled");
                        } else {
                            $('.discapacidad').hide("slow");
                            $('.quitar').attr("disabled", true);

                        }

                    }
            );


            $('#dpMonths').datepicker();


            $('#action-button').click(function () {
                $.ajax({
                    url: "{{ url('consulta') }}",
                    data: {
                        format: 'json'
                    },
                    error: function () {
                        $('#info').html('<p>An error has occurred</p>');
                    },
                    dataType: 'jsonp',
                    success: function (data) {
                        var $title = $('<h1>').text(data.talks[0].talk_title);
                        var $description = $('<p>').text(data.talks[0].talk_description);
                        $('#info')
                                .append($title)
                                .append($description);
                    },
                    type: 'GET'
                });
            });


            /*        $('#cambia').on('change', function () {
             var valor = $(this).val();

             if (valor != '1' && valor != '2' && valor != '') {
             $("#muestra").show()
             }
             else {
             $("#muestra").hide()
             }
             });*/


            $('.sub_secretaria').change(function () {
                $('.tipo_solicitud').empty();
                $('.tipo_solicitud').append("<option value='' >Debe Seleccionar un Tipo de solicitud</option>");
                $.get("{{ url('coordinaciones')}}",
                        {option: $(this).val()},
                        function (data) {
                            $('.coordinacion').empty();
                            $.each(data, function (key, element) {
                                $('.coordinacion').append("<option value='" + key + "'>" + element + "</option>");

                            });
                        });
            });


            $('.coordinacion').click(function () {
                $.get("{{ url('tipo_solicitud')}}",
                        {option: $(this).val()},
                        function (data) {
                            $('.tipo_solicitud').empty();
                            $.each(data, function (key, element) {
                                $('.tipo_solicitud').append("<option value='" + key + "'>" + element + "</option>");

                            });
                        });
            });


            $('.estado').change(function () {
                $.get("{{ url('municipios')}}",
                        {option: $(this).val()},
                        function (data) {
                            $('.municipio').empty();
                            $.each(data, function (key, element) {
                                $('.municipio').append("<option value='" + key + "'>" + element + "</option>");

                            });
                        });
            });


            //municipios
            $('.municipio').click(function () {
                $.get("{{ url('parroquias')}}",
                        {option: $(this).val()},
                        function (data) {
                            $('.parroquias').empty();
                            $.each(data, function (key, element) {
                                $('.parroquias').append("<option value='" + key + "'>" + element + "</option>");
                            });
                        });
            });


            $('.estado').change(function () {
                $('.parroquias').empty();
                $('.parroquias').append("<option value='' >Debe Seleccionar una Parroquia</option>");
            });
            $('.estado2').change(function () {
                $.get("{{ url('municipios')}}",
                        {option: $(this).val()},
                        function (data) {
                            $('.municipio2').empty();
                            $.each(data, function (key, element) {
                                $('.municipio2').append("<option value='" + key + "'>" + element + "</option>");

                            });
                        });
            });


            //municipios
            $('.municipio2').click(function () {
                $.get("{{ url('parroquias')}}",
                        {option: $(this).val()},
                        function (data) {
                            $('.parroquias2').empty();
                            $.each(data, function (key, element) {
                                $('.parroquias2').append("<option value='" + key + "'>" + element + "</option>");
                            });
                        });
            });


            $('.estado2').change(function () {
                $('.parroquias2').empty();
                $('.parroquias2').append("<option value='' >Debe Seleccionar una Parroquia</option>");
            });


            //============================DUPLICA CAMPOS=============================================

            var max_fields = 10; //maximum input boxes allowed
            var wrapper = $(".input_fields_wrap"); //Fields wrapper
            var add_button = $(".add_field_button"); //Add button ID

            var x = 1; //initlal text box count
            $(add_button).click(function (e) { //on add input button click
                e.preventDefault();


                if (x < max_fields) { //max input box allowed
                    x++; //text box increment
                    // $(wrapper).append('<div><input type="text" name="mytext['+ x +'  ]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
                    // $(wrapper).append('<tr><td>{!! Form::text("nombre_Apellidonombre",null,["class"=>"mayusculas form-control"]);  !!}</td><td> {!! Form::text("edad[edad]",null,["class"=>"form-control"]);  !!}</td><td>{!! Form::select('parentesco[parentesco]',[''=>'SELECCIONE...','CONYUGE','HIJO(A)','NIETO(A)','MADRE','PADRE','SUEGRO','HERMANO(A)','SOBRINO(A)','PRIMO(A)','YERNO(A)','NUERO(A)'],'',['class'=>'form-control']);!!}</td><td>{!! Form::select('ocupacion[ocupacion]',$ocupacion,'',[ 'id'=>'cambia', 'class'=>'form-control']);  !!}</td><td>{!! Form::select("nivel_instruccion[nivelI]",[''=>'SELECCIONE','UNIVERSITARIO','TECNICO','BACHILLERATO','PRIMARIA COMPLETA','PRIMARIA INCOMPLETA'],'',[ "id"=>'cambia', "class"=>"form-control"]);  !!}</td><td> {!! Form::select('ingresos[ingresos]',[''=>'SELECCIONE...','FORTUNA HEREDADADA O ADQUIRIDA','GANANCIAS O BENEFICIOS, HONORARIOS PROFESIONALES','SUELDO MENSUAL','SALARIO SEMANAL , POR DIA, ENTRADA A DESTAJO','DONACIONES DE ORIGEN PUBLICO O PRIVADO, PENSIONES, JUBILACIONES'],'',['class'=>'form-control']);  !!}</td><td>{!! Form::text("cantidad[cantidad]",null,["class"=>"suma form-control"]);  !!}</td><td><a href="#" class="remove_field">Remover</a></td></tr>'); //add input box
                }
            });

            $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
                e.preventDefault();
                //$(this).parent('tr').remove();
                $(this).closest('tr').remove();

                x--;
            })

// click checkbox activo
            $('#activo_alimentacion').click(function () {

                if ($(this).is(":checked")) {
                    $('#alimentacion').removeAttr("disabled");
                } else {
                    $('#alimentacion').attr("disabled", true);
                    $('#alimentacion').val('');
                }


            });
            $('#activo_spublicos').click(function () {

                if ($(this).is(":checked")) {
                    $('#servicios').removeAttr("disabled");
                } else {
                    $('#servicios').attr("disabled", true);
                    $('#servicios').val('');
                }


            });
            $('#activo_telefono').click(function () {

                if ($(this).is(":checked")) {
                    $('#telefono').removeAttr("disabled");
                } else {
                    $('#telefono').attr("disabled", true);
                    $('#telefono').val('');
                }


            });
            $('#activo_gas').click(function () {
                if ($(this).is(":checked")) {
                    $('#gas').removeAttr("disabled");
                } else {
                    $('#gas').attr("disabled", true);
                    $('#gas').val('');
                }


            });
            $('#activo_agua').click(function () {
                if ($(this).is(":checked")) {
                    $('#agua').removeAttr("disabled");
                } else {
                    $('#agua').attr("disabled", true);
                    $('#agua').val('');
                }


            });

            $('#activo_salud').click(function () {
                if ($(this).is(":checked")) {
                    $('#salud').removeAttr("disabled");
                } else {
                    $('#salud').attr("disabled", true);
                    $('#salud').val('');
                }


            });


            $("input[name=polisi]").change(function () {
                if ($(this).val() == "Si") {
                    $(".misiones").slideDown()
                }
                else {
                    $(".misiones").slideUp();
                    $(".comites").slideUp();
                }
            });


            $("input[name=comite]").change(function () {
                if ($(this).val() == "Si") {
                    $(".comites").slideDown()
                }
                else {
                    $(".comites").slideUp();
                }
            });

            //SUMA INGRESOS
            var $form = $('#ingresos'),
                    $summands = $form.find('.income_count'),
                    $sumDisplay = $('#income_sum');

            $form.delegate('.income_count', 'change', function () {
                var sum = 0;
                $summands.each(function () {
                    var value = Number($(this).val());
                    if (!isNaN(value)) sum += value;
                });

                $sumDisplay.val(sum + ' Bs.');
            });


            //SUMA EGRESOS
            var $form2 = $('#egresos'),
                    $summands2 = $form2.find('.income_count2'),
                    $sumDisplay2 = $('#income_sum2');

            $form2.delegate('.income_count2', 'change', function () {
                var sum = 0;
                $summands2.each(function () {
                    var value = Number($(this).val());
                    if (!isNaN(value)) sum += value;
                });

                $sumDisplay2.val(sum + ' Bs.');
            });


            //SUMAR CAMPOS DE INGRESOS Y EGRESOS FAMILIAR


//            $(document).on("keydown keyup", ".suma", function () {
//                var sum = 0;
//                $(".suma").each(function () {
//                    sum += +$(this).val();
//                });
//                $(".total").val(sum);
//            });


            /*   function calculateSum() {
             var sum = 0;
             //iterate through each textboxes and add the values

             $(".suma").each(function() {
             //add only if the value is number
             if (!isNaN(this.value) && this.value.length != 0) {
             sum += parseFloat(this.value);
             $(this).css("background-color", "#FEFFB0");
             }
             else if (this.value.length != 0){
             $(this).css("background-color", "red");
             }
             });

             $("input#sum1").val(sum.toFixed(2));
             }


             $(".suma").on("keydown keyup", function() {
             calculateSum();
             });*/


        });
    </script>








@endsection
