@extends('app')
@section('content')

    <h2 class="text-center">NUEVA COORDINACION</h2>


    {!!  Form::open(['url'=>'coordinacion'])   !!}

    <div class="panel panel-primary">

        <div class="panel-heading">REGISTRO PARA NUEVA COORDINACION </div>
        <div class="panel-body">
            @foreach ($errors->all('<li>:message</li>') as $message)
                <div class="alert alert-danger">
                    {!! $message; !!}
                </div>
            @endforeach

            <div   class="row">

                <div class="col-xs-3">

                    {!! Form::label('nombre','Nombre de la coordinacion:');  !!}
                    {!! Form::text('nombre',old('nombre'),[ 'class'=>"form-control mayusculas "]) !!}

</div>
                        <div class="col-xs-3">

                    {!! Form::label('nombre','Abreviacion');  !!}
                    {!! Form::text('abreviacion',old('abreviacion'),[ 'class'=>"form-control mayusculas "]) !!}

</div>

                <div class="col-xs-3">

                    {!! Form::label('nombre','Sub-secretaria');  !!}
                    {!! Form::select('subsecretaria',$secretaria,null,[ 'class'=>"form-control mayusculas "]) !!}

</div>


        </div>

                <div style="margin-top: 20px" class=" text-center">
                    {!! Form::submit('Registrar',['class'=>'btn btn-primary']);   !!}
                    {!! link_to('coordinacion', 'Volver', ['class' => 'btn btn-primary']) !!}

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

