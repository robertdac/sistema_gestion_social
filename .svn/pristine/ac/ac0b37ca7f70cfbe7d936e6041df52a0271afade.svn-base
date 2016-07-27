@extends('app')
@section('content')

    <h2 class="text-center">Usuarios del Sistema</h2>

    @if (Session::has('mensaje'))
        <div class="alert alert-success">{{ Session::get('mensaje') }}</div>
    @endif

    <div class="col-xs-3 pull-right">

        {!! Form::open(['action' => 'UserController@index','method'=>'get']) !!}
        <div class="input-group">
            {!! Form::text('lolo',null,['class'=>'form-control mayusculas '] );  !!}

            <span class="input-group-btn">
          {!! Form::submit('BUSCAR',['class'=>'btn btn-default']) !!}

      </span>
        </div>
    </div>
    {!! Form::close() !!}


    <div STYLE="margin-bottom: 20px" class="pull-left">

        {!! link_to('nuevo_usuario', 'CREAR USUARIO', ['class' => 'btn btn-primary']) !!}

    </div>







    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Cedula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Perfil</th>
            <th>Estatus</th>
            <th>Acción</th>

        </tr>
        </thead>
        <tbody>


        @foreach($user as $us)

            <tr>
                <td>{!! $us->cedula !!}</td>
                <td>{!! $us->nombres !!}</td>
                <td>{!! $us->apellidos !!}</td>
                <td>{!! $us->email !!}</td>
                <td>{!! $us->per !!}</td>
                <td>{!! ($us->estatus == 1) ? 'ACTIVO':'INACTIVO'   !!}</td>
                <td>
                    <a class="iconos" href="{{ url("ver_usuario/$us->iduser")  }} "> <span class="  glyphicon glyphicon-eye-open"></span></a>
                    <a class="iconos"  href="{{ url("editar_usuario/$us->iduser")  }} "><span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="iconos" href="{{ url("roles/$us->iduser")  }} "><span class="glyphicon glyphicon-align-right"></span></a>


                </td>


            </tr>




        @endforeach


        </tbody>
    </table>
    <div style=" text-align: center">
        {!! $user->render(); !!}

    </div>


    <style>

        .iconos{

            margin-right: 3px;


        }


    </style>


    <script>
        $('.mayusculas').keyup(function () {
            $(this).val($(this).val().toUpperCase());
        });

    </script>




@endsection