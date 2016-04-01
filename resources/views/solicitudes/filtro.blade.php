@extends('app')

@section('content')

    <style >



    </style>



    <div style="  margin-top: 20px;"></div>

    <div class="container-fluid">

        @if (session('mensaje'))
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif




        <div class="row">
            <div class="col-md-5 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <label>CONSULTA DE BENEFICIARIO</label>
                    </div>
                    <div class="panel-body">

                        @foreach ($errors->all('<li>:message</li>') as $message)
                            <div class="alert alert-danger">
                                {!! $message; !!}
                            </div>
                        @endforeach

                        {!! Form::open(['url' => 'filtro','id'=>'example1' ]) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <div class="col-md-13">
                                {!! Form::text('cedula',null,["required"=>"required",'class'=>'numeros form-control','id'=>'cedula','maxlength'=>"8",'placeholder'=>"INTRODUZCA LA CÉDULA"])   !!}
                            </div>

                            <div  style=" margin-top: 10px" class="row-fluid col-md-13">
                              {!!   Form::checkbox('menorEdad',1,false,['id'=>'menorEdad'])   !!}
                              {!! ('¿Menor de edad?')  !!}
                            </div>



                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                                    Enviar
                                </button>

                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>


        $(document).ready(function () {
            $('#example1').parsley();
        });


    </script>

@endsection
