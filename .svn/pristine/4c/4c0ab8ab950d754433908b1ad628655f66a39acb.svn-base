@extends('app')
@section('content')

    <h2 class="text-center">NUEVO USUARIO</h2>


    {!!  Form::open(['url'=>'usuarios'])   !!}

    <div class="panel panel-primary">

        <div class="panel-heading">DATOS PARA EL NUEVO USUARIO</div>
        <div class="panel-body">
            @foreach ($errors->all('<li>:message</li>') as $message)
                <div class="alert alert-danger">
                    {!! $message; !!}
                </div>
            @endforeach

            <div class="row">

                <div class="col-xs-3">

                    {!! Form::label('cedula','Cedula de identidad:');  !!}
                    {!! Form::text('cedula',old('cedula'),[ 'class'=>"form-control numeros ",'maxlength'=>8]) !!}

                </div>


                <div class="col-xs-3">
                    {!! Form::label('nombre','Nombre:');   !!}
                    {!! Form::text('nombre',old('nombre'),['class'=>'form-control mayusculas' ]) !!}

                </div>

                <div class="col-xs-3 ">

                    {!! Form::label('apellido','Apellido')   !!}
                    {!! Form::text('apellido',old('apellido'),['class'=>'form-control mayusculas' ])  !!}

                </div>
                <div  class="col-xs-3 ">
                    {!! Form::label('correo','Correo Institucional:')   !!}
                    {!! Form::text('correo',old('correo'),['class'=>'form-control mayusculas ','placeholder'=>'EJ: LUIS.GOMEZ@GDC.GOB.VE'])   !!}

                </div>

            </div>
            <br>

            <div class="row">


                <div class="col-xs-3" >


                    {!! Form::label('Contraseña','Contraseña')   !!}
                    {!! Form::password('contasena',['class'=>'form-control'])  !!}

                </div>


          {{--      <div  class="col-xs-3 ">
                    {!! Form::label('institucion','institucion')   !!}
                    {!! Form::select('institucion',array('L' => 'Large', 'S' => 'Small'), 'S',['class'=>'form-control'])  !!}



                </div>--}}


                <div class="col-xs-3" >

                    {!! Form::label('secretaria','secretaria')   !!}
                    {!! Form::select('secretaria',$secre, 1,['class'=>'form-control'])  !!}


                </div>

                <div  class="col-xs-3 ">

                    {!! Form::label('Sub-secretaria','Sub-secretaria:');  !!}
                    {!! Form::Select('subsecretaria',$subsecre, 0,['id'=>'subsecre','class'=>'form-control']);  !!}


                </div>

            </div>
            <br>
            <div class="row">

                <div  class="col-xs-3 ">
                    {!! Form::label('Perfiles','Perfiles:')  !!}
                    {!! Form::select('perfiles',$perfil, '',['class'=>'form-control'])  !!}

                </div>
                <div  class="col-xs-3 ">
                    {!! Form::label('Cargo','cargo:')   !!}
                    {!! Form::select('cargo',$cargos, '',['class'=>'form-control']);  !!}
                </div>

                <div class="col-xs-3 ">
                    {!! Form::label('Coordinacion','Coordinacion:')   !!}

                    <select  class="form-control"  id="coordinacion" name="coordinacion">
                        <option>Debe Seleccionar una Subsecretaria</option>
                    </select>
                    <br>
                    {!! Form::submit('Registrar',['class'=>'btn btn-primary']);   !!}
                    {!! link_to('usuarios', 'Volver', ['class' => 'btn btn-primary']) !!}

                </div>




            </div>


        </div>
    </div>

{!! Form::close()   !!}


    <script>


        $(document).ready(function() {
            //adjunta a la entrada de pulsación de la tecla
            $('.numeros').keydown(function(event) {
                // Allow special chars + arrows
                if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9
                        || event.keyCode == 27 || event.keyCode == 13
                        || (event.keyCode == 65 && event.ctrlKey === true)
                        || (event.keyCode >= 35 && event.keyCode <= 39)){
                    return;
                }else {
                    // If it's not a number stop the keypress
                    if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                        event.preventDefault();
                    }
                }
            });

//MAYUSCULAS
            $('.mayusculas').keyup(function()
            {
                $(this).val($(this).val().toUpperCase());
            });


                $('#subsecre').change(function(){
                    $.get("{{ url('coordinaciones')}}",
                            { option: $(this).val() },
                            function(data) {
                                $('#coordinacion').empty();
                                $.each(data, function(key, element) {
                                    $('#coordinacion').append("<option value='" + key + "'>" + element + "</option>");
                                });
                            });
                });









        });







    </script>


@endsection

