@extends('app')
@section('content')

    <h2 class="text-center">NUEVA DISCAPACIDAD</h2>


    {!!  Form::open(['url'=>'discapacidades'])   !!}

    <div class="panel panel-primary">

        <div class="panel-heading">REGISTRO PARA NUEVA DISCAPACIDAD</div>
        <div class="panel-body">
            @foreach ($errors->all('<li>:message</li>') as $message)
                <div class="alert alert-danger">
                    {!! $message; !!}
                </div>
            @endforeach

            <div   class="row">

                <div class="col-xs-3">

                    {!! Form::label('nombre','Nombre de la Discapacidad:');  !!}
                    {!! Form::text('nombre',old('nombre'),[ 'class'=>"form-control mayusculas "]) !!}

                </div>


                <div class="col-xs-3">
                    {!! Form::label('descripcion','Descripcion de la Discapacidad:');   !!}
                    {!! Form::text('descripcion',old('descripcion'),['class'=>'form-control mayusculas' ]) !!}

                    <br>

                    {!! Form::submit('Registrar',['class'=>'btn btn-primary']);   !!}
                    {!! link_to('discapacidades', 'Volver', ['class' => 'btn btn-primary']) !!}

                </div>

        </div>

    </div>
    </div>

    {!! Form::close()   !!}


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

