@extends('app')
@section('content')

    <h2 class="text-center">EDITAR TIPO DE SECRETARIA</h2>


    {!! Form::open(['url'=>"modificar_secretaria/$secretaria->id"])   !!}

    <div class="panel panel-primary">

        <div class="panel-heading">DATOS PARA LA EDICION DEL TIPO DE SECRETARIA</div>
        <div class="panel-body">

            @foreach ($errors->all('<li>:message</li>') as $message)

                <div class="alert alert-danger">
                    {!! $message; !!}

                </div>
            @endforeach

            <div class="row" >


                <div class="col-xs-3">
                    {!! Form::label('descripcion','Descripcion de la Discapacidad:');   !!}
                    {!! Form::text('descripcion',$secretaria->descripcion,['class'=>'form-control mayusculas' ]) !!}

                </div>

                <div class="col-xs-3 ">
                    {!! Form::label('Estatus','Estatus:')   !!}
                    {!! Form::select('estatus',array('1'=>'ACTIVO','0'=>'INACTIVO'),$secretaria->estatus,['class'=>'form-control']);  !!}

                    <br>

                    {!! Form::submit('Procesar',['class'=>'btn btn-primary']);   !!}

                    {!! link_to('secretaria', 'Volver', ['class' => 'btn btn-primary']) !!}


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

