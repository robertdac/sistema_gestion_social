@extends('app')
@section('content')

    <h2 class="text-center">EDITAR USUARIO</h2>


{!! Form::open(['url'=>"modificar_usuario/$usuario->id"])   !!}

        <div class="panel panel-primary">

            <div class="panel-heading">DATOS PARA LA EDICION DEL USUARIO</div>
            <div class="panel-body">

                @foreach ($errors->all('<li>:message</li>') as $message)

                    <div class="alert alert-danger">
                     {!! $message; !!}

                     </div>
                @endforeach

                <div class="row">

                    <div class="col-xs-3">

                        {!! Form::label('cedula','Cedula de identidad:');  !!}
                        {!! Form::text('cedula',$usuario->cedula,[ 'class'=>"form-control numeros ",'maxlength'=>8]) !!}

                    </div>


                    <div class="col-xs-3">
                        {!! Form::label('nombre','Nombre:');   !!}
                        {!! Form::text('nombre',$usuario->nombres,['class'=>'form-control mayusculas' ]) !!}

                    </div>

                    <div class="col-xs-3 ">

                        {!! Form::label('apellido','Apellido')   !!}
                        {!! Form::text('apellido',$usuario->apellidos,['class'=>'form-control mayusculas' ])  !!}

                    </div>
                    <div  class="col-xs-3 ">
                        {!! Form::label('correo','Correo Institucional:')   !!}
                        {!! Form::text('correo',$usuario->email,['class'=>'form-control mayusculas ','placeholder'=>'EJ: LUIS.GOMEZ@GDC.GOB.VE'])   !!}

                    </div>

                </div>
                <br>

                <div class="row">


                    <div class="col-xs-3" >


                        {!! Form::label('Contraseña','Contraseña')   !!}
                        {!! Form::password('contasena',['class'=>'form-control'])  !!}

                    </div>



                    <div class="col-xs-3" >

                        {!! Form::label('secretaria','secretaria')   !!}
                        {!! Form::select('secretaria',$secre, $usuario->id_secretaria,['class'=>'form-control'])  !!}


                    </div>

                    <div  class="col-xs-3 ">

                        {!! Form::label('Sub-secretaria','Sub-secretaria:');  !!}
                        {!! Form::Select('subsecretaria',$subsecre, $usuario->id_subsecre ,['class'=>'form-control']);  !!}


                    </div>

                    <div class="col-xs-3 ">
                        {!! Form::label('Coordinacion','Coordinacion:')   !!}
                        {!! Form::select('coordinacion',$coor, $usuario->id_coordinacion,['class'=>'form-control']);  !!}

                      </div>





                </div>
                <br>
                <div class="row">

                    <div  class="col-xs-3 ">
                        {!! Form::label('Perfiles','Perfiles:')  !!}
                        {!! Form::select('perfiles',$perfil, $usuario->id_perfil,['class'=>'form-control'])  !!}

                    </div>
                    <div  class="col-xs-3 ">
                        {!! Form::label('Cargo','cargo:')   !!}
                        {!! Form::select('cargo',$cargos, $usuario->id_cargo,['class'=>'form-control']);  !!}
                    </div>

                    <div class="col-xs-3 ">
                        {!! Form::label('Estatus','Estatus:')   !!}
                        {!! Form::select('estatus',array('1'=>'ACTIVO','0'=>'INACTIVO'),$usuario->estatus,['class'=>'form-control']);  !!}

                        <br>

                        {!! Form::submit('Procesar',['class'=>'btn btn-primary']);   !!}

                        {!! link_to(URL::previous(), 'Volver', ['class' => 'btn btn-primary']) !!}




                    </div>

                </div>


            </div>
        </div>

    {!! Form::close() !!}


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



        });





    </script>


@endsection

