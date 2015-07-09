@extends('app')
@section('content')


<h2 class="text-center" >TIPOS DE SUB-SECRETARIA </h2>

@if (Session::has('mensaje'))
    <div class="alert alert-success">{{ Session::get('mensaje') }}</div>
@endif


    {!! Form::open(['action'=>'SubSecretariaController@index','method'=>'get']) !!}

    <div class=" col-xs-3 pull-right input-group">
        {!! Form::text('lolo',null,['class'=>'form-control mayusculas','placeholder'=>'NOMBRE'] );  !!}
        <span class="input-group-btn">
          {!! Form::submit('BUSCAR',['class'=>'btn btn-default']) !!}
      </span>
    </div>
{!! Form::close() !!}


<div STYLE="margin-bottom: 20px" class="pull-left">

    {!! link_to('nueva_subsecretaria', 'NUEVA SUB-SECRETARIA', ['class' => 'btn btn-primary']) !!}

</div>



<table  class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Sub secretaria</th>
        <th>Dependencia</th>
        <th>Estatus</th>
        <th>Accion</th>

    </tr>
    </thead>
    <tbody>


    @foreach($secretaria as $us)


        <tr>
            <td>{!! $us['descripcion'] !!}</td>
            <td>{!! $us->secretaria['descripcion'] !!}</td>
            <td>{!! ($us->estatus == 1) ? 'ACTIVO':'INACTIVO'   !!}</td>

            <td class=" text-center" >
{{--
                <a  title="" href="{{ url("ver_discapacidad/$us->iduser")  }} "  > <span style="margin-right: 10px; " class="glyphicon glyphicon-eye-open"></span></a>
--}}
                <a title="Editar" href="{{ url("editar_subsecretaria/$us->id")  }} " ><span class="glyphicon glyphicon-pencil"></span></a> </td>


        </tr>




    @endforeach




    </tbody>
</table>
<div style=" text-align: center">
    {!! $secretaria->render(); !!}

</div>



<script>
    $('.mayusculas').keyup(function()
    {
        $(this).val($(this).val().toUpperCase());
    });

</script>




@endsection