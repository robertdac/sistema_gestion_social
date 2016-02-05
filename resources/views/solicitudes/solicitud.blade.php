@extends('app')
@section('content')

    <h2 class="text-center">REGISTRO DE LA SOLICITUD</h2>


    {!! Form::open(['url' => 'solicitudes', 'id'=> 'solicitud','files' => true]) !!}


    <div role="tabpanel">


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


                                    <input type="text" pattern="^[0-9]" title='Only Number' min="1" max="8">

                                    <div class="col-xs-3">
                                        {!! Form::label('sub secretaria') !!}

                                        {!! Form::select('subSecretaria',$sub_secretaria,0,['class'=>' sub_secretaria form-control','required'=>"required"]) !!}


                                    </div>

                                    <div class="col-xs-3 ">
                                        {!! Form::label('Coordinacion') !!}

                                        <select class="form-control coordinacion" name="coordinacion">
                                            <option required="required"  name="coordinacion">Debe Seleccionar una coordinacion</option>
                                        </select>

                                    </div>


                                    <div class="col-xs-3 ">
                                        {!! Form::label('Tipo de solicitud') !!}

                                        <select class="form-control tipo_solicitud" name="tipo_solicitud">
                                            <option name="tipo_solicitud">Debe Seleccionar una Solicitud</option>
                                        </select>

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
                                        <?php $nac = $datos[0]->strnacionalidad;  ($nac == 'V') ? $naci = 'VENEZOLANO(A)' : $naci = 'EXTRANJERO(A)';   ?>
                                        {!! Form::text('naci_be',$naci,['class'=>'form-control','readonly'=>'true']) !!}
                                        {!! Form::hidden('nacionalidad',$nac)  !!}

                                    </div>
                                    <div class="col-xs-3">

                                        {!! Form::label('cedula','Cedula de identidad:');  !!}
                                        {!! Form::text('cedula_be',$datos[0]->intcedula,['class'=>"form-control","readonly"=>"true"]) !!}

                                    </div>


                                    <div class="col-xs-3">
                                        {!! Form::label('nombre','Nombre:');   !!}
                                        {!! Form::text('nombre_be',$datos[0]->strnombre_primer,['class'=>'form-control' ]) !!}

                                    </div>

                                    <div class="col-xs-3 ">

                                        {!! Form::label('apellido','Apellido')   !!}
                                        {!! Form::text('apellido_be',$datos[0]->strapellido_primer,['class'=>'form-control' ])  !!}

                                    </div>

                                </div>
                                <br>

                                <div class="row">

                                    <div class="col-xs-3 ">
                                        {!! Form::label('Edo.Civil','Edo.Civil')   !!}
                                        {!! Form::select('Edocivil_be',$EdoCivil,$datos[0]->clvestado_civil,['class'=>'form-control'])   !!}

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
                                        {!! Form::text('fecha_nacimiento_be',Carbon\Carbon::parse(str_replace('"','',$datos[0]->dtmnacimiento))->format('d-m-Y'),['class'=>'form-control'])    !!}
                                    </div>

                                </div>
                                <br>

                                <div class="row">

                                    <div class="col-xs-3 ">
                                        {!! Form::label('Ocupacion','Ocupacion:')   !!}
                                        {!! Form::select('ocupacion_be',$ocupacion,'',['class'=>'form-control']);  !!}
                                    </div>


                                    <div class="col-xs-3 ">
                                        {!! Form::label('Estado','Estado:')   !!}
                                        {!! Form::select('estado_be',$estados,0,['class'=>'form-control estado']);  !!}
                                    </div>
                                    <div class="col-xs-3">
                                        {!! Form::label('Municipio','Municipio:')   !!}
                                        <select class="form-control municipio" name="municipio_be">
                                            <option>Debe Seleccionar un Municipio</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-3 ">
                                        {!! Form::label('Parroquia','Parroquias:')   !!}

                                        <select class="form-control parroquias" name="parroquias_be">
                                            <option name="parroquias">Debe Seleccionar una Parroquia</option>
                                        </select>

                                    </div>


                                </div>
                                <br>

                                <div style="display:none; " class="row discapacidad">

                                    <div class="col-xs-3">

                                        {!! Form::label('Tipo','Presenta alguna discapacidad:'); !!}
                                        {!! Form::select('discapacidad[algunaDis]',$discapacidad,"",['class'=>'form-control quitar','disabled'=>true]) !!}

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

                                </div>
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
                                        <?php $nac = str_replace('(', '', $datos[0]->strnacionalidad);  ($nac == 'V') ? $naci = 'VENEZOLANO(A)' : $naci = 'EXTRANJERO(A)';   ?>
                                        {!! Form::text('naci_so',$naci,['class'=>'form-control','readonly'=>'true']) !!}
                                        {!! Form::hidden('nacionalidad',$nac)  !!}

                                    </div>
                                    <div class="col-xs-3">

                                        {!! Form::label('cedula','Cedula de identidad:');  !!}
                                        {!! Form::text('cedula_so',null,['class'=>"form-control limpiar",'onblur'=>"getData($('#valor').val())",'id'=>'valor','onclick'=>"Limpiar()"]) !!}

                                    </div>


                                    <div class="col-xs-3">
                                        {!! Form::label('nombre','Nombre:');   !!}
                                        {!! Form::text('nombre_so',null,['class'=>'form-control limpiar','readonly'=>true ]) !!}

                                    </div>

                                    <div class="col-xs-3 ">

                                        {!! Form::label('apellido','Apellido')   !!}
                                        {!! Form::text('apellido_so',null,['class'=>'form-control limpiar','readonly'=>true ])  !!}

                                    </div>

                                </div>
                                <br>

                                <div class="row">

                                    <div class="col-xs-3 ">
                                        {!! Form::label('Edo.Civil','Edo.Civil')   !!}
                                        {!! Form::select('edocivil_so',$EdoCivil,null,['class'=>'form-control'])   !!}

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
                                        {!! Form::text('fecha_nacimiento_so',null,['class'=>'limpiar','readonly'=>true])    !!}
                                    </div>

                                </div>
                                <br>

                                <div class="row">

                                    <div class="col-xs-3 ">
                                        {!! Form::label('Ocupacion','Ocupacion:')   !!}
                                        {!! Form::select('ocupacion_so',$ocupacion,'',['class'=>'form-control']);  !!}
                                    </div>


                                    <div class="col-xs-3 ">
                                        {!! Form::label('Estado','Estado:')   !!}
                                        {!! Form::select('estado_so',$estados,0,['class'=>'form-control estado2']);  !!}
                                    </div>
                                    <div class="col-xs-3">
                                        {!! Form::label('Municipio','Municipio:')   !!}
                                        <select class="form-control municipio2" name="municipio_so">
                                            <option>Debe Seleccionar un Municipio</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-3 ">
                                        {!! Form::label('Parroquia','Parroquias:')   !!}

                                        <select class="form-control parroquias2" name="parroquia_so">
                                            <option name="parroquias">Debe Seleccionar una Parroquia</option>
                                        </select>

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

                    @include('solicitudes.socio_economico')
                    @include('solicitudes.descripcion')


                </div>
    </div>

    {{--   <div class="col-xs-12 text-center">

           {!! Form::submit('Registrar',['class'=>'btn btn-primary btn-lg']); !!}

       </div>--}}

    <div id="info"></div>


    {{--   <div style="display: none" class=" muestrax row">
           <div class="col-xs-2">
               {!! Form::select('ingresos',['SELECCIONE..','SALARIO','CESTA TICKETS','OTRO'],0,['class'=>'form-control'])  !!}
           </div>

       </div>--}}


    {{--  <div class="input_fields_wrap">
          <button class="add_field_button">Add More Fields</button>
          <div><input type="text" name="mytext[]"></div>
      </div>--}}


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


            $('#solicitud').guardian();


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
