<!DOCTYPE html>
<html lang="es">
<head>
    <title>SURAGS</title>

    {!! Html::style('css/bootstrap.min.css')  !!}
    {{--{!! Html::style('css/jumbotron-narrow.css') !!}--}}
    {!! Html::style('css/datepicker.css') !!}
    {!! Html::style('css/bootstrap-select.css') !!}
    {!! Html::script('js/jquery.js') !!}

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

                    <?php App\Models\opciones_perfiles::menu_complete(Auth::user()->id)  ?>

                </div>


            </div>
        </nav>
    @endif


    @yield('content')

    <!-- Aqui se incluiran los codigos de las vistas que
    use cada metodo de los controladores -->

    <div class="footer">
        {!! HTML::image('cortes_agenda/barra_inferior.png', 'alt-text',array("class"=>"img-responsive")) !!}
    </div>
</div>


{{--<script src="https://code.jquery.com/jquery.js"></script>--}}
<!-- Incluimos el JS de boostrap con el Helper de Laravel -->
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/bootstrap-filestyle.min.js') !!}
{!! Html::script('js/bootstrap-datepicker.js') !!}
{!! Html::script('js/bootstrap-select.js') !!}


<style>


    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu > .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
        margin-left: -1px;
        -webkit-border-radius: 0 6px 6px 6px;
        -moz-border-radius: 0 6px 6px;
        border-radius: 0 6px 6px 6px;
    }

    .dropdown-submenu:hover > .dropdown-menu {
        display: block;
    }

    .dropdown-submenu > a:after {
        display: block;
        content: " ";
        float: right;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid;
        border-width: 5px 0 5px 5px;
        border-left-color: #ccc;
        margin-top: 5px;
        margin-right: -10px;
    }

    .dropdown-submenu:hover > a:after {
        border-left-color: #fff;
    }

    .dropdown-submenu.pull-left {
        float: none;
    }

    .dropdown-submenu.pull-left > .dropdown-menu {
        left: -100%;
        margin-left: 10px;
        -webkit-border-radius: 6px 0 6px 6px;
        -moz-border-radius: 6px 0 6px 6px;
        border-radius: 6px 0 6px 6px;
    }


</style>


    <script>


    $(document).ready(function() {

//MAYUSCULAS
        $('.form-control').keyup(function()
        {
            $(this).val($(this).val().toUpperCase());
        });


    });

</script>






</body>
</html>