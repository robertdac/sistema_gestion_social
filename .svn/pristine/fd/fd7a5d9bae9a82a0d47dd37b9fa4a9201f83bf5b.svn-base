@extends('app')
@section('content')

    <?php $hijo = $roles; $nieto = $roles; $check = $roles;   ?>


    <h2 class="text-center">EDITAR OPCIONES PARA EL {{  $nombre->perfiles->nombre  }}
        : {{ $nombre->nombres.' '.$nombre->apellidos  }}</h2>

    {!!   Form::open(['url'=>'roles'])   !!}

    <div class="panel panel-primary">

        <div class="text-center panel-heading">EDICIÓN DE LAS OPCIONES DEL USUARIO</div>
        <div class="panel-body">
            @foreach ($errors->all('<li>:message</li>') as $message)

                <div class="alert alert-danger">
                    {!! $message; !!}

                </div>
            @endforeach

            <table class="table table-responsive table-hover">
                <tr>
                    <th width="65%">    </th>
                    <td width="35%" ></td>
                </tr>
                @for($i=0; $i < count($roles); $i++)
                    @if($roles[$i]->padre == 0)
                        <tr>
                            <th>
                                <label id="padre{{$roles[$i]->id  }}"> {{$roles[$i]->id.'-'. $roles[$i]->nombre  }}  </label>
                            </th>
                            <td>

                                @if(isset($usuario[$roles[$i]->id]) && $usuario[$roles[$i]->id] == $roles[$i]->nombre  )
                                    {!! Form::checkbox('idopcion[]',$roles[$i]->id,true)!!}
                                @else
                                    {!! Form::checkbox('idopcion[]',$roles[$i]->id,false)!!}
                                @endif

                            </td>

                        </tr>
                        <?php $sub = 1;  ?>

                        @for($j=0; $j < count($hijo); $j++)
                            @if($roles[$i]->id == $hijo[$j]->padre)
                                <tr class="hijo{{$roles[$i]->id  }}">
                                    <th style="padding-left: 25px">
                                        <label> {{ $roles[$i]->id.'.'.$sub.'-'.$hijo[$j]->nombre  }} </label>
                                    </th>
                                    <td>
                                        @if(isset($usuario[$hijo[$j]->id]) && $usuario[$hijo[$j]->id] == $hijo[$j]->nombre  )
                                            {!! Form::checkbox('idopcion[]',$hijo[$j]->id,true)  !!}
                                        @else
                                            {!! Form::checkbox('idopcion[]',$hijo[$j]->id)  !!}

                                        @endif

                                    </td>
                                </tr>
                                <?php $sub++;  ?>
                                @for($k=0; $k < count($nieto); $k++)
                                    @if($hijo[$j]->id == $nieto[$k]->padre)

                                        <tr class="nieto{{$roles[$i]->id  }}">
                                            <th style="padding-left:50px">
                                                <label> {{  $nieto[$k]->nombre  }} </label>
                                            </th>
                                            <td>
                                                @if(isset($usuario[$nieto[$k]->id]) && $usuario[$nieto[$k]->id] == $nieto[$k]->nombre  )
                                                    {!! Form::checkbox('idopcion[]',$nieto[$k]->id,true)  !!}
                                                @else
                                                    {!! Form::checkbox('idopcion[]',$nieto[$k]->id)  !!}
                                                @endif
                                            </td>
                                        </tr>

                                    @endif
                                @endfor

                            @endif
                        @endfor

                    @endif
                @endfor


            </table>


            <div class="row">

                <div class="text-center col-xs-12">


                    {!!   Form::hidden('id',$nombre->id)    !!}
                    {!! link_to(URL::previous(), 'Volver', ['class' => 'btn btn-primary']) !!}
                    {!! Form::submit('Enviar',['class'=>'btn btn-primary']);   !!}


                </div>

            </div>
        </div>
    </div>



    {!!   Form::close()   !!}



    <style>

        .hijo2, .nieto2,
        .hijo3, .nieto3,
        .hijo4, .nieto4,
        .hijo5, .nieto5 {

            display: none;

        }

        #padre2, #padre3,
        #padre4, #padre5 {

            cursor: pointer;

        }


    </style>



    <script>
        $("#padre2").click(function () {
            $(".hijo2").toggle("slow");
            $(".nieto2").toggle("slow");
        });
        $("#padre3").click(function () {
            $(".hijo3").toggle("slow");
            $(".nieto3").toggle("slow");
        });
        $("#padre4").click(function () {
            $(".hijo4").toggle("slow");
            $(".nieto4").toggle("slow");
        });

        $("#padre5").click(function () {
            $(".hijo5").toggle("slow");
            $(".nieto5").toggle("slow");
        });


    </script>



@endsection