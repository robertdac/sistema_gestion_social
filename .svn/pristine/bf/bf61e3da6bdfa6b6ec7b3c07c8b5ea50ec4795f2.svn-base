@extends('app')
@section('content')

    <h2 class="text-center">EDITAR TIPO DE COORDINACION</h2>


    {!! Form::open(['url'=>"modificar_coordinacion/$coordinacion->id"])   !!}

    <div class="panel panel-primary">

        <div class="panel-heading">DATOS PARA LA EDICION DEL TIPO DE COORDINACION</div>
        <div class="panel-body">

            @foreach ($errors->all('<li>:message</li>') as $message)

                <div class="alert alert-danger">
                    {!! $message; !!}

                </div>
            @endforeach

            <div class="row" >


                <div class="col-xs-3">
                    {!! Form::label('descripcion','Nombre:');   !!}
                    {!! Form::text('nombre',$coordinacion->nombre,['class'=>'form-control mayusculas' ]) !!}

                </div>    <div class="col-xs-3">
                    {!! Form::label('descripcion','Abreviacion');   !!}
                    {!! Form::text('abreviacion',$coordinacion->abreviacion,['class'=>'form-control mayusculas' ]) !!}

                </div>
              <div class="col-xs-3">
                    {!! Form::label('descripcion','Sub-secretaria');   !!}
                    {!! Form::select('sub-secretaria',$subsecretaria,$coordinacion->idsubsecretaria,['class'=>'form-control' ]) !!}

                </div>

                <div class="col-xs-3 ">
                    {!! Form::label('Estatus','Estatus:')   !!}
                    {!! Form::select('estatus',array('1'=>'ACTIVO','0'=>'INACTIVO'),$coordinacion->estatus,['class'=>'form-control']);  !!}




                </div>

            </div>


<div style="margin-top: 20px;"  class="text-center">

                {!! Form::submit('Procesar',['class'=>'btn btn-primary']);   !!}

                {!! link_to('coordinacion', 'Volver', ['class' => 'btn btn-primary']) !!}
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

