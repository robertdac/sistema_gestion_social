@extends('app')
@section('content')

    <h2 class="text-center">EDITAR TIPO DE RECEPCION</h2>


    {!! Form::open(['url'=>"modificar_recepcion/$recepcion->id"])   !!}

    <div class="panel panel-primary">

        <div class="panel-heading">DATOS PARA LA EDICION DEL TIPO DE RECEPCION</div>
        <div class="panel-body">

            @foreach ($errors->all('<li>:message</li>') as $message)

                <div class="alert alert-danger">
                    {!! $message; !!}

                </div>
            @endforeach

            <div class="row" >

                <div class="col-xs-3">

                    {!! Form::label('nombre','Nombre de la Discapacidad');  !!}
                    {!! Form::text('nombre',$recepcion->nombre,[ 'class'=>"form-control mayusculas "]) !!}

                </div>


                <div class="col-xs-3">
                    {!! Form::label('descripcion','Descripcion de la Discapacidad:');   !!}
                    {!! Form::text('descripcion',$recepcion->descripcion,['class'=>'form-control mayusculas' ]) !!}

                </div>




                <div class="col-xs-3 ">
                    {!! Form::label('Estatus','Estatus:')   !!}
                    {!! Form::select('estatus',array('1'=>'ACTIVO','0'=>'INACTIVO'),$recepcion->estatus,['class'=>'form-control']);  !!}

                    <br>

                    {!! Form::submit('Procesar',['class'=>'btn btn-primary']);   !!}

                    {!! link_to('discapacidades', 'Volver', ['class' => 'btn btn-primary']) !!}


                </div>

            </div>


        </div>
    </div>

    {!! Form::close() !!}


    <script>


        $(document).ready(function() {

//MAYUSCULAS
            $('.mayusculas').keyup(function()
            {
                $(this).val($(this).val().toUpperCase());
            });



        });





    </script>


@endsection

