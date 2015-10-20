@extends('app')
@section('content')


    <h2 class="text-center" >Solicitudes </h2>

    @if (Session::has('mensaje'))
        <div class="alert alert-success">{{ Session::get('mensaje') }}</div>
    @endif


    {!! Form::open(['action'=>'CoordinacionController@index','method'=>'get']) !!}
    <div class=" col-xs-3 pull-right input-group">
        {!! Form::text('lolo',null,['class'=>'form-control mayusculas','placeholder'=>'NOMBRE'] );  !!}
        <span class="input-group-btn">
          {!! Form::submit('BUSCAR',['class'=>'btn btn-default']) !!}
      </span>
    </div>
    {!! Form::close() !!}


    <div STYLE="margin-bottom: 20px" class="pull-left">

        {!! link_to('filtro', 'NUEVA SOLICITUD', ['class' => 'btn btn-primary']) !!}

    </div>



    <table  class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Abrevacion</th>
            <th>Sub-secretaria</th>
            <th>Estatus</th>
            <th>Accion</th>

        </tr>
        </thead>
        <tbody>


        @foreach($coordinacion as $us)

            <tr>
                <td>{!! $us->nombre !!}</td>
                <td>{!! $us->abreviacion !!}</td>
                <td>{!! $us->subsecretaria['descripcion'] !!}</td>
                <td>{!! ($us->estatus == 1) ? 'ACTIVO':'INACTIVO'   !!}</td>

                <td class=" text-center" >
                    {{--
                                    <a  title="" href="{{ url("ver_discapacidad/$us->iduser")  }} "  > <span style="margin-right: 10px; " class="glyphicon glyphicon-eye-open"></span></a>
                    --}}
                    <a title="Editar" href="{{ url("editar_coordinacion/$us->id")  }} " ><span class="glyphicon glyphicon-pencil"></span></a> </td>


            </tr>




        @endforeach




        </tbody>
    </table>
    <div style=" text-align: center">
        {!! $coordinacion->render(); !!}

    </div>



    <script>
        $('.mayusculas').keyup(function()
        {
            $(this).val($(this).val().toUpperCase());
        });

    </script>




@endsection