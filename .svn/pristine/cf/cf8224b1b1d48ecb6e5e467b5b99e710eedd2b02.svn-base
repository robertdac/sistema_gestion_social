@extends('app')
@section('content')

    <h2 style=" text-align: center">USUARIO DETALLE</h2>


    {!! Form::open() !!}

    <div class="panel panel-primary">

        <div class="panel-heading">DATOS DEL USUARIO </div>
        <div class="panel-body">

            <div class="row">

                <div class="col-xs-3">

                    {!! Form::label('cedula','Cedula de identidad:');  !!}
                    {!! Form::text('cedula',$usuario[0]->cedula,[ 'class'=>"form-control numeros ",'maxlength'=>8]) !!}

                </div>


                <div class="col-xs-3">
                    {!! Form::label('nombre','Nombre:');   !!}
                    {!! Form::text('nombre',$usuario[0]->nombres,['class'=>'form-control mayusculas' ]) !!}

                </div>

                <div class="col-xs-3 ">

                    {!! Form::label('apellido','Apellido')   !!}
                    {!! Form::text('apellido',$usuario[0]->apellidos,['class'=>'form-control mayusculas' ])  !!}

                </div>
                <div  class="col-xs-3 ">
                    {!! Form::label('correo','Correo Institucional:')   !!}
                    {!! Form::text('correo',$usuario[0]->email,['class'=>'form-control mayusculas'])   !!}

                </div>

            </div>
            <br>

            <div class="row">

                <div class="col-xs-3" >

                    {!! Form::label('secretaria','secretaria')   !!}
                    {!! Form::text('secretaria',$usuario[0]->secre,['class'=>'form-control'])  !!}

                </div>

                <div  class="col-xs-4 ">

                    {!! Form::label('Sub-secretaria','Sub-secretaria:');  !!}
                    {!! Form::text('subsecretaria',$usuario[0]->subse,['class'=>'form-control']);  !!}


                </div>

                <div class="col-xs-5 ">
                    {!! Form::label('Coordinacion','Coordinacion:')   !!}
                    {!! Form::text('coordinacion',$usuario[0]->coor,['class'=>'form-control']);  !!}

                </div>





            </div>
            <br>
            <div class="row">

                <div  class="col-xs-3 ">
                    {!! Form::label('Perfiles','Perfiles:')  !!}
                    {!! Form::text('perfiles',$usuario[0]->per,['class'=>'form-control'])  !!}

                </div>
                <div  class="col-xs-3 ">
                    {!! Form::label('Cargo','cargo:')   !!}
                    {!! Form::text('cargo',$usuario[0]->car,['class'=>'form-control']);  !!}
                </div>

                <div class="col-xs-3 ">
                    {!! Form::label('Estatus','Estatus:')   !!}
                    {!! Form::text('estatus',($usuario[0]->estatus ==1 )?'ACTIVO':'INACTIVO',['class'=>'form-control']);  !!}

                    <br>


                    {!! link_to(URL::previous(), 'Volver', ['class' => 'btn btn-primary']) !!}

                  {{--  {!! Form::submit('Procesar',['class'=>'btn btn-primary']);   !!}--}}



                </div>

            </div>


        </div>
    </div>

    {!! Form::close() !!}




@endsection

