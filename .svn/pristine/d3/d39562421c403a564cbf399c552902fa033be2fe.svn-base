@extends('app')
@section('content')

    <h2 class="text-center">EDITAR TIPO DE SUB-SECRETARIA</h2>


    {!! Form::open(['url'=>"modificar_subsecretaria/$subsecretaria->id"])   !!}

    <div class="panel panel-primary">

        <div class="panel-heading">DATOS PARA LA EDICION DEL TIPO DE SUB-SECRETARIA</div>
        <div class="panel-body">

            @foreach ($errors->all('<li>:message</li>') as $message)

                <div class="alert alert-danger">
                    {!! $message; !!}

                </div>
            @endforeach


            <div class="row" >


                <div class="col-xs-3">
                    {!! Form::label('subsecretaria','Sub-secretria:');   !!}
                    {!! Form::text('subsecretaria',$subsecretaria->descripcion,['class'=>'form-control mayusculas' ]) !!}

                </div>
       <div class="col-xs-3">
                    {!! Form::label('secretaria','Secretaria:');   !!}
                    {!! Form::select('secretaria',$secretaria,1,['class'=>'form-control mayusculas' ]) !!}

                </div>

                <div class="col-xs-3 ">
                    {!! Form::label('Estatus','Estatus:')   !!}
                    {!! Form::select('estatus',array('1'=>'ACTIVO','0'=>'INACTIVO'),$subsecretaria->estatus,['class'=>'form-control']);  !!}

                    <br>

                    {!! Form::submit('Procesar',['class'=>'btn btn-primary']);   !!}

                    {!! link_to('subsecretaria', 'Volver', ['class' => 'btn btn-primary']) !!}


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

