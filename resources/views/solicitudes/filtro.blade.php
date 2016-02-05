@extends('app')

@section('content')


    {{  html_entity_decode('&#10004;')  }}
    <div style="  margin-top: 20px;"></div>

    <div class="container-fluid">


        <div class="row">
            <div class="col-md-5 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <label>CONSULTA DE BENEFICIARIO</label>
                    </div>
                    <div class="panel-body">
                        @if (session('mensaje'))
                            <div class="alert alert-success">
                                {{ session('mensaje') }}
                            </div>
                        @endif

                        @foreach ($errors->all('<li>:message</li>') as $message)
                            <div class="alert alert-danger">
                                {!! $message; !!}
                            </div>
                        @endforeach

                        {!! Form::open(['url' => 'filtro','id'=>'example1' ]) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">

                             <div class="col-md-6">
                                <input   required="required" name="cedula" type="text" class="form-control" id="cedula" placeholder="INTRODUZCA LA CÉDULA">
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

{{--<form id="example1" action="javascript:alert('Validation Successful')">
    <div>
        <label>Name<span class="red">*</span></label>
        <input name="name" required="required" type="text">
    </div>

    <div>
        <label>Email<span class="red">*</span></label>
        <input name="email" required="required" type="email">
    </div>

    <div>
        <label>Phone</label>
        <input name="phone" type="tel">
    </div>

    <input name="submit" value="Submit" type="submit">
</form>--}}




<script>

        $(document).ready(function() {
            $('#example1').guardian();

       });

    </script>

@endsection
