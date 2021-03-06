@extends('app')
@section('content')

    <h2 class="text-center">REGISTRO DE LA SOLICITUD</h2>


    {!! Form::open(['url' => 'ReporteBeneficiario']) !!}


    <div role="tabpanel">


        @if($errors->has())
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                @endif

                <div class="panel panel-primary">
                    <div class=" text-center panel-heading">RANGO DE FECHAS DE REGISTRO</div>
                    <div  class="panel-body">

                        <div class="row">

                            <div id="registro1" class="col-xs-3">
                                {!! Form::label('Desde') !!}
                                {!! Form::text('Rdesde',null,['class'=>'form-control','readonly'=>true]) !!}


                            </div>

                            <div id="registro2" class="col-xs-3 ">
                                {!! Form::label('Hasta') !!}
                                {!! Form::text('Rhasta',null,['class'=>'form-control','readonly'=>true]) !!}


                            </div>


                        </div>


                    </div>
                </div>


                <div class="panel panel-primary">
                    <div class=" text-center panel-heading">RANGO DE FECHAS DE APROBACION</div>
                    <div class="panel-body">

                        <div class="row">

                            <div id="aprobacion1" class="col-xs-3">
                                {!! Form::label('Desde') !!}
                                {!! Form::text('aprobado[desde]','',['class'=>'form-control','readonly'=>true]) !!}


                            </div>

                            <div id="aprobacion2" class="col-xs-3 ">
                                {!! Form::label('Hasta') !!}
                                {!! Form::text('aprobado[hasta]','',['class'=>'form-control','readonly'=>true]) !!}

                            </div>


                        </div>


                    </div>
                </div>






                <div class="panel panel-primary">
                    <div class=" text-center panel-heading">SECRETARIA DE GESTION SOCIAL</div>
                    <div class="panel-body">

                        <div class="row">

                            <div class="col-xs-3">
                                {!! Form::label('sub secretaria') !!}
                                {!! Form::select('subSecretaria',$sub_secretaria,'',['class'=>' sub_secretaria form-control']) !!}


                            </div>

                            <div class="col-xs-3 ">
                                {!! Form::label('Coordinacion') !!}

                                <select class="form-control coordinacion" name="coordinacion">
                                    <option name="coordinacion">Debe Seleccionar una coordinacion</option>
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
                    <div class=" text-center panel-heading">POR DATOS DEL BENEFICIARIO</div>
                    <div class="panel-body">

                        <div class="row">

                            <div class="col-xs-3">
                                {!! Form::label('Nacionalidad') !!}
                                {!! Form::select('nacionalidad',[''=>'SELECCIONE..','V'=>'VENEZOLANO(A)','E'=>'EXTRANJERO(E)'],'',['class'=>'form-control']) !!}


                            </div>

                            <div class="col-xs-3 ">
                                {!! Form::label('Sexo') !!}
                                {!! Form::select('sexo',[''=>'SELECCIONE..','M'=>'MASCULINO','F'=>'FEMENINO'],'',['class'=>'form-control']) !!}

                            </div>

                            <div class="col-xs-3 ">
                                {!! Form::label('Estado civil') !!}
                                {!! Form::select('edoCivil',$edoCivil,'',['class'=>'form-control']) !!}

                            </div>


                            <div class="col-xs-3 ">
                                {!! Form::label('Ocupacion') !!}
                                {!! Form::select('ocupacion',$ocupacion,'',['class'=>'form-control']) !!}


                            </div>


                        </div>


                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class=" text-center panel-heading">POR DISCAPACIDAD DEL BENEFICIARIO</div>
                    <div class="panel-body">

                        <div class="row">

                            <div class="col-xs-3">
                                {!! Form::label('Tipo discapacidad') !!}
                                {!! Form::select('discapacidad["tipo"]',$tipoDiscapacidad,'',['class'=>'form-control']) !!}
                            </div>

                            <div class="col-xs-3">
                                {!! Form::label('Grado de discapacidad') !!}
                                {!! Form::select('discapacidad["grado"]',$gradoDiscapacidad,'',['class'=>'form-control']) !!}
                            </div>

                        </div>


                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class=" text-center panel-heading">POR GESTION DE LA SOLICITUD</div>
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-xs-3">
                                {!! Form::label('Recepcion') !!}
                                {!! Form::select('gestion["recepcion"]',$recepcion,'',['class'=>'form-control']) !!}
                            </div>

                            <div class="col-xs-3">
                                {!! Form::label('Modalidad') !!}
                                {!! Form::select('gestion["modalidad"]',$modalidad,'',['class'=>'form-control']) !!}
                            </div>



                        </div>



                    </div>
                </div>

            <div class="col-xs-12 text-center">
                <input class="btn btn-primary btn-lg" type="submit" value="Registrar">
            </div>

    </div>




    </form>

    <script>

        $(document).ready(function () {


            $('#registro1 input').datepicker({
                language: "es",
                clearBtn: true,
            });

            $('#registro2 input').datepicker({
                language: "es",
                clearBtn: true,
            });

            $('#aprobacion1 input').datepicker({
                language: "es",
                clearBtn: true,
            });

            $('#aprobacion2 input').datepicker({
                language: "es",
                clearBtn: true,
            });


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


        });
    </script>








@endsection
