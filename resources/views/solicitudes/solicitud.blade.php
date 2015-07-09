@extends('app')
@section('content')


    <h2 class="text-center">REGISTRO DE LA SOLICITUD</h2>

    <form role="form">

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
                        <div class="panel-heading">DATOS DEL BENEFICIARIO</div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-xs-3">
                                    <label for="email">Nacionalidad:</label>
                                    <?php $nac = str_replace('(', '', $datos[0]);  ($nac == 'V') ? $naci = 'VENEZOLANO(A)' : $naci = 'EXTRANJERO(A)';   ?>
                                    {!! Form::text('naci',$naci,['class'=>'form-control','readonly'=>'true']) !!}
                                    {!! Form::hidden('nacionalidad',$nac)  !!}

                                </div>
                                <div class="col-xs-3">

                                    {!! Form::label('cedula','Cedula de identidad:');  !!}
                                    {!! Form::text('cedula',$datos[1],['class'=>"form-control","readonly"=>"true"]) !!}

                                </div>


                                <div class="col-xs-3">
                                    {!! Form::label('nombre','Nombre:');   !!}
                                    {!! Form::text('nombre',$datos[2],['class'=>'form-control' ]) !!}

                                </div>

                                <div class="col-xs-3 ">

                                    {!! Form::label('apellido','Apellido')   !!}
                                    {!! Form::text('apellido',$datos[4],['class'=>'form-control' ])  !!}

                                </div>

                            </div>
                            <br>

                            <div class="row">

                                <div class="col-xs-3 ">
                                    {!! Form::label('Edo.Civil','Edo.Civil')   !!}
                                    {!! Form::select('Edocivil',$EdoCivil,$datos[8],['class'=>'form-control'])   !!}

                                </div>

                                <div class="col-xs-3 ">
                                    {!! Form::label('masculimo','Masculino')   !!}
                                    {!! Form::radio('sexo','M')  !!}
                                    <br>

                                    {!! Form::label('femenino','Femenino')   !!}
                                    {!! Form::radio('sexo','F')  !!}

                                </div>

                                <div class="col-xs-3 ">
                                    {!! Form::label('fecha','Fecha de Nacimiento:')    !!}
                                    {!! Form::text('fecha_nacimiento',Carbon\Carbon::parse(str_replace('"','',$datos[6]))->format('d-m-Y'),['class'=>'form-control'])    !!}
                                </div>

                            </div>
                            <br>

                            <div class="row">

                                <div class="col-xs-3 ">
                                    {!! Form::label('Ocupacion','Ocupacion:')   !!}
                                    {!! Form::select('ocupacion',$ocupacion,'',['class'=>'form-control']);  !!}
                                </div>


                                <div class="col-xs-3 ">
                                    {!! Form::label('Estado','Estado:')   !!}
                                    {!! Form::select('estado',$estados,0,['class'=>'form-control','id'=>'estado']);  !!}
                                </div>
                                <div class="col-xs-3">
                                    {!! Form::label('Municipio','Municipio:')   !!}
                                    <select class="form-control" id="municipio" name="municipio">
                                        <option>Debe Seleccionar un Municipio</option>
                                    </select>
                                </div>

                                <div class="col-xs-3 ">
                                    {!! Form::label('Parroquia','Parroquias:')   !!}

                                    <select class="form-control" id="parroquias" name="parroquias">
                                        <option name="parroquias">Debe Seleccionar una Parroquia</option>
                                    </select>

                                </div>


                            </div>
                            <br>


                            <div class="row">

                                <div class="col-xs-6">
                                    <label for="comment">Sector:</label>
                                    <textarea id='municipio' class="form-control" rows="3" id="comment"></textarea>
                                </div>

                                <div class="col-xs-3 ">
                                    <label for="email">Celular:</label>
                                    <input type="email" class="form-control">

                                </div>
                                <div class="col-xs-3 ">
                                    <label for="email">Telefono(Casa):</label>
                                    <input type="email" class="form-control">

                                </div>


                            </div>


                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">DATOS DEL SOLICITANTE</div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-xs-3">
                                    <label for="email">Nacionalidad:</label>
                                    <?php $nac = str_replace('(', '', $datos[0]);  ($nac == 'V') ? $naci = 'VENEZOLANO(A)' : $naci = 'EXTRANJERO(A)';   ?>
                                    {!! Form::text('naci',$naci,['class'=>'form-control','readonly'=>'true']) !!}
                                    {!! Form::hidden('nacionalidad',$nac)  !!}

                                </div>
                                <div class="col-xs-3">

                                    {!! Form::label('cedula','Cedula de identidad:');  !!}
                                    {!! Form::text('cedula',null,['class'=>"form-control","readonly"=>"true"]) !!}

                                </div>


                                <div class="col-xs-3">
                                    {!! Form::label('nombre','Nombre:');   !!}
                                    {!! Form::text('nombre',null,['class'=>'form-control' ]) !!}

                                </div>

                                <div class="col-xs-3 ">

                                    {!! Form::label('apellido','Apellido')   !!}
                                    {!! Form::text('apellido',null,['class'=>'form-control' ])  !!}

                                </div>

                            </div>
                            <br>

                            <div class="row">

                                <div class="col-xs-3 ">
                                    {!! Form::label('Edo.Civil','Edo.Civil')   !!}
                                    {!! Form::select('Edocivil',$EdoCivil,$datos[8],['class'=>'form-control'])   !!}

                                </div>

                                <div class="col-xs-3 ">
                                    {!! Form::label('masculimo','Masculino')   !!}
                                    {!! Form::radio('sexo','M')  !!}
                                    <br>

                                    {!! Form::label('femenino','Femenino')   !!}
                                    {!! Form::radio('sexo','F')  !!}

                                </div>

                             {{--   <div class="col-xs-3 ">
                                    {!! Form::label('fecha','Fecha de Nacimiento:')    !!}
                                    {!! Form::text('fecha_nacimiento',null,['class'=>'datepicker form-control'])    !!}
                                </div>
--}}

                                <div class="well">
                                    <div class="input-append date" id="dpMonths" data-date="102/2012" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">
                                        <input class="span2" size="16" type="text" value="02/2012" readonly>
                                        <span class="add-on"><i class="icon-calendar"></i></span>
                                    </div>
                                </div>




                            </div>
                            <br>

                            <div class="row">

                                <div class="col-xs-3 ">
                                    {!! Form::label('Ocupacion','Ocupacion:')   !!}
                                    {!! Form::select('ocupacion',$ocupacion,'',['class'=>'form-control']);  !!}
                                </div>


                                <div class="col-xs-3 ">
                                    {!! Form::label('Estado','Estado:')   !!}
                                    {!! Form::select('estado',$estados,0,['class'=>'form-control','id'=>'estado']);  !!}
                                </div>
                                <div class="col-xs-3">
                                    {!! Form::label('Municipio','Municipio:')   !!}
                                    <select class="form-control" id="municipio" name="municipio">
                                        <option>Debe Seleccionar un Municipio</option>
                                    </select>
                                </div>

                                <div class="col-xs-3 ">
                                    {!! Form::label('Parroquia','Parroquias:')   !!}

                                    <select class="form-control" id="parroquias" name="parroquias">
                                        <option name="parroquias">Debe Seleccionar una Parroquia</option>
                                    </select>

                                </div>


                            </div>
                            <br>


                            <div class="row">

                                <div class="col-xs-6">
                                    <label for="comment">Sector:</label>
                                    <textarea id='municipio' class="form-control" rows="3" id="comment"></textarea>
                                </div>

                                <div class="col-xs-3 ">
                                    <label for="email">Celular:</label>
                                    <input type="email" class="form-control">

                                </div>
                                <div class="col-xs-3 ">
                                    <label for="email">Telefono(Casa):</label>
                                    <input type="email" class="form-control">

                                </div>


                            </div>


                        </div>
                    </div>
                </div>

                @include('solicitudes.descripcion')

                @include('solicitudes.socio_economico')


            </div>
        </div>




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


        $(document).ready(function () {

            $('#dpMonths').datepicker();




            /*        $('#cambia').on('change', function () {
             var valor = $(this).val();

             if (valor != '1' && valor != '2' && valor != '') {
             $("#muestra").show()
             }
             else {
             $("#muestra").hide()
             }
             });*/


            $('#estado').change(function () {
                $.get("{{ url('municipios')}}",
                        {option: $(this).val()},
                        function (data) {
                            $('#municipio').empty();
                            $.each(data, function (key, element) {
                                $('#municipio').append("<option value='" + key + "'>" + element + "</option>");
                            });
                        });
            });


            //municipios
            $('#municipio').change(function () {
                $.get("{{ url('parroquias')}}",
                        {option: $(this).val()},
                        function (data) {
                            $('#parroquias').empty();
                            $.each(data, function (key, element) {
                                $('#parroquias').append("<option value='" + key + "'>" + element + "</option>");
                            });
                        });
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
                    // $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
                    $(wrapper).append('<tr><td>{!! Form::text("nombre_Apellido[]",null,["class"=>"mayusculas form-control"]);  !!}</td><td> {!! Form::text("edad[]",null,["class"=>"form-control"]);  !!}</td><td>{!! Form::select('parentesco[]',[''=>'SELECCIONE...','CONYUGE','HIJO(A)','NIETO(A)','MADRE','PADRE','SUEGRO','HERMANO(A)','SOBRINO(A)','PRIMO(A)','YERNO(A)','NUERO(A)'],'',['class'=>'form-control']);!!}</td><td>{!! Form::select('ocupacion',$ocupacion,'',[ 'id'=>'cambia', 'class'=>'form-control']);  !!}</td><td>{!! Form::select("nivel_instruccion[]",[''=>'SELECCIONE','UNIVERSITARIO','TECNICO','BACHILLERATO','PRIMARIA COMPLETA','PRIMARIA INCOMPLETA'],'',[ "id"=>'cambia', "class"=>"form-control"]);  !!}</td><td> {!! Form::select('ingresos[]',[''=>'SELECCIONE...','FORTUNA HEREDADADA O ADQUIRIDA','GANANCIAS O BENEFICIOS, HONORARIOS PROFESIONALES','SUELDO MENSUAL','SALARIO SEMANAL , POR DIA, ENTRADA A DESTAJO','DONACIONES DE ORIGEN PUBLICO O PRIVADO, PENSIONES, JUBILACIONES'],'',['class'=>'form-control']);  !!}</td><td>{!! Form::text("cantidad[]",null,["class"=>"suma form-control"]);  !!}</td><td><a href="#" class="remove_field">Remover</a></td></tr>'); //add input box
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
