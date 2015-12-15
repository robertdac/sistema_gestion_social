@extends('app')
@section('content')


    <h2 class="text-center">Solicitudes </h2>

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



    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Codigo</th>
            <th>Tipo de solicitud</th>
            <th>cedula</th>
            <th>Beneficiario</th>
            <th>Monto Solicitado</th>
            <th>Estatus</th>
            <th>Acción</th>

        </tr>
        </thead>
        <tbody>


        @foreach($solicitud as $sol)




            <tr>
                <td>{!! $sol->coordinacion->abreviacion.' '.$sol->id !!}</td>
                <td>{!! $sol->tipoSolicitud->nombre !!}</td>
                <td>{!! $sol->beneficiario->cedula !!}</td>
                <td>{!! $sol->beneficiario->nombres." ".$sol->beneficiario->apellidos !!}</td>
                <td>{!!$sol->monto_solicitado  !!}</td>
                <td>{!!$sol->estatus->descripcion  !!}</td>

                <td class=" text-center">
                    <a class="verFicha" data-toggle="modal" data-target="#myModal" title="Ver ficha"
                       href="{{ url("ficha/$sol->id")  }} "><span
                                class="glyphicon glyphicon-eye-open"></span></a>
                    <a title="Editar" href="{{ url("editar_solicitudes/$sol->id")  }} "><span
                                class="glyphicon glyphicon-pencil"></span></a>
                    <a title="Informe Socio Economico" href="{{ url("informe_socio_economico/$sol->id")  }} "> <span
                                style="margin-right: 10px; " class="glyphicon glyphicon-list-alt"></span></a>
            </tr>

            </td>


        @endforeach


        </tbody>
    </table>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>



    <div style=" text-align: center">
        {{--
                {!! $coordinacion->render(); !!}
        --}}

    </div>



    <script>


/*        $('.verFicha').click(function () {
            $.ajax({
                url: "",
                data: {
                    format: 'json'
                },
                error: function () {
                    $('#info').html('<p>An error has occurred</p>');
                },
                dataType: 'jsonp',
                success: function (data) {

                   // alert(data[0].descripcion);

                    var $title = $('<h1>').text(data[0].descripcion);
                    //var $description = $('<p>').text(data.talks[0].talk_description);
                    $('#modal-body').append($title);
                            //.append($description);
                },
                type: 'GET'
            });
        });*/


        $('.verFicha').on('click',function(){
           // var id=$(this).data('id');
            //alert(id);
            $('.modal-body').html('loading');
            $.ajax({
                type: 'GET',
                url: '{{ url("ficha/$sol->id")  }}',
               // data:{id: id},
                dataType: 'json',
                success: function(data) {
                    $('.modal-body').html(data[0].id);
                },
                error:function(err){
                    alert("error"+JSON.stringify(err));
                }
            })
        });


        $('.mayusculas').keyup(function () {
            $(this).val($(this).val().toUpperCase());
        });


    </script>




@endsection























