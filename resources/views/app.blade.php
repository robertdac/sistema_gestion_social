<!DOCTYPE html>
<html lang="es">
<head>
    <title>SURAGS</title>

    {!! Html::style('css/bootstrap.min.css')  !!}
    {{--{!! Html::style('css/jumbotron-narrow.css') !!}--}}
    {{-- {!! Html::style('css/datepicker.css') !!}--}}
    {!! Html::style('css/bootstrap-datepicker.css') !!}
    {!! Html::style('css/bootstrap-select.css') !!}
    {!! Html::script('js/jquery.js') !!}
    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/subMenu.css')!!}

    {!! Html::style('bower_components/datatables.net-bs/css/dataTables.bootstrap.css') !!}



    {{--{!! Html::style('bower_components/datatables/media/css/dataTables.bootstrap.min.css') !!}--}}
{{--
    <link href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css" type="text/css" rel="stylesheet">
--}}

      {{-- <script src="https://code.highcharts.com/highcharts.js"></script>
       <script src="https://code.highcharts.com/modules/exporting.js"></script>--}}
</head>
<body>


<div class="container">
    <div {{--style="width: 1139px; height: 158px;"--}}>
        {!! HTML::image('cortes_agenda/instrucciones.png','banner', array("class"=>"img-responsive","style"=>"width: 1139px; height: 158px;" )) !!}
    </div>


    @if(Auth::check())

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">

                    <span class="navbar-brand">Bienvenido: {{ Auth::user()->nombres .' '.Auth::user()->apellidos }} </span>
                </div>
                <div>

               {{--     $roles = \App\Models\Opciones::all();
                    $usuario = \App\User::find(Auth::user()->id)->roles()->lists('nombre', 'id');--}}


                      {{--@include('menu',['roles'=>$roles,'usuario'=>$usuario])--}}

                  <?php   App\Models\opciones_perfiles::menu_complete(Auth::user()->id)   ?>

                </div>


            </div>
        </nav>
        @endif


        @yield('content')


        <div class="footer">
            {!! HTML::image('cortes_agenda/barra_inferior.png', 'alt-text',array("class"=>"img-responsive")) !!}
        </div>
</div>
{{-- <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>--}}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/bootstrap-filestyle.min.js') !!}
{!! Html::script('js/bootstrap-datepicker.js') !!}
{!! Html::script('js/bootstrap-datepicker.es.min.js') !!}
{!! Html::script('js/bootstrap-select.js') !!}
{!! Html::script('js/parsley.min.js') !!}
{!! Html::script('js/es.js') !!}
{!! Html::script('js/scriptPropios.js') !!}

{!! Html::script('bower_components/highcharts/highcharts.js');   !!}
{!! Html::script('bower_components/highcharts/modules/exporting.js');   !!}

{!! Html::script('bower_components/datatables.net/js/jquery.dataTables.js') !!}
{!! Html::script('bower_components/datatables.net-bs/js/dataTables.bootstrap.js') !!}




{{--
<script src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js" type="text/javascript">
--}}




<script type="text/javascript">
    var APP_URL = {!! json_encode(url('/')) !!};
    //console.log(APP_URL);

</script>



</body>
</html>