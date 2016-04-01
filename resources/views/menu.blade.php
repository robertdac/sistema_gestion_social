{{--<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">DEFINICIONES <span class="caret"></span></a>

    <ul class="dropdown-menu" role="menu">
        <li><a href="#">Unidades administrativas</a></li>

        <li class="dropdown-submenu">
            <a href="#">Secretaria</a>
            <ul class="dropdown-menu">
                <li><a href="#">nueva</a></li>
                <li><a href="#">consulta</a></li>
            </ul>
        </li>


        <li><a href="#">Another action</a></li>

    </ul>
</li>--}}


<?php
$hijo = $roles;
$nieto = $roles;
$check = $roles;
?>

<ul class="nav navbar-nav">
    @for($i=0; $i < count($roles); $i++)
        @if($roles[$i]->padre == 0)

            <li class="dropdown"><a href='{{ url($roles[$i]->url)  }}' class='dropdown-toggle' data-toggle='dropdown' role='button'  aria-expanded='false'>{{ $roles[$i]->nombre }} <span class='caret'></span></a>

                <ul class="dropdown-menu" role="menu">
                    @for($j=0; $j < count($hijo); $j++)

                        @if($roles[$i]->id == $hijo[$j]->padre)

                            <li class="dropdown-submenu">

                                <a href="{{ url($hijo[$j]->url)  }}">{{$hijo[$j]->nombre   }}</a>

                                <ul class="dropdown-menu">
                                    @for($k=0; $k < count($nieto); $k++)
                                        @if($hijo[$j]->id == $nieto[$k]->padre)
                                            <li><a href="{{ url($nieto[$k]->url)  }}"> {{  $nieto[$k]->nombre }}</a> </li>

                                        @endif
                                    @endfor


                                </ul>


                            </li>



                        @endif
                    @endfor
                </ul>


            </li>



        @endif

    @endfor


</ul>



