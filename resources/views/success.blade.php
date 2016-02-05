<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        table.gridtable {
            font-family: verdana, arial, sans-serif;
            font-size: 10px;
            color: #333333;
            border-width: 1px;
            border-color: #666666;
            border-collapse: collapse;
        }




        table.gridtable th {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #666666;
            background-color: #dedede;
        }

        table.gridtable td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #666666;
            background-color: #ffffff;
        }

        td.checklist {

            background: url("{{ asset('cortes_agenda/checked.png')  }}") no-repeat;
            width: 100px;
            height: 100px;

            background-position: left top;

        }


    </style>

</head>
<body>


<script type="text/php">
{{-- $text = 'pagina: {PAGE_NUM} / {PAGE_COUNT}';
 $font = Font_Metrics::get_font("helvetica", "bold");
 $pdf->page_text(100, 300, $text, $font, 9);--}}









</script>

<table class="gridtable" width="100%">
    {{--    <tr>
            <td><img src="{{ asset('cortes_agenda/logoGDC.png')  }}" width="80" height="80">
            </td>
        </tr>--}}

    <tr>
        <th colspan="2" style=" text-align: center">SECRETARIA DE GESTIÓN SOCIAL <br> SUBSECRETARIA DE ATENCION SOCIAL
        </th>
    </tr>

    <tr>

        <td>
            Fecha de la entrevista: {{ date("d-m-Y", strtotime($informe->created_at) ) }}

        </td>
        <td>
            Lugar: Caracas

        </td>

    </tr>

    <tr>
        <th style="text-align: center" colspan="2">DESCRIPCION DE LA SOLICITUD</th>

    </tr>

    <tr>
        <td colspan="2"> {{ $informe->descripcion }}
        </td>


    </tr>

    <tr>
        <th colspan="2" style="text-align: center"> DATOS DE IDENTIFICACIÓN DEL SOLICITANTE</th>
    </tr>


    <tr>
        <td colspan="2"> Nombres
            Apellidos: {{ $informe->solicitante->nombres." ".$informe->solicitante->apellidos  }}</td>
    </tr>
    <tr>

        <td>Cedula:{{ $informe->solicitante->cedula  }}</td>
        <td>Sexo: {{ $informe->solicitante->sexo }}</td>

    </tr>
    <tr>
        <td>Afinidad:</td>
        <td>Fecha de nacimiento: {{ date("d-m-Y", strtotime($informe->solicitante->fecha_nacimiento) ) }} </td>

    </tr>
    <tr>
        <td>Escolaridad:</td>
        <td>Telefono:</td>

    </tr>

    <tr>
        <th colspan="2" style="text-align: center"> DATOS DE IDENTIFICACIÓN DEL BENEFICIARIO</th>
    </tr>

    <tr>
        <td>Cedula:19387292</td>
        <td> Nombres Apellidos: {{ $informe->beneficiario->nombres." ".$informe->beneficiario->apellidos }}</td>
    </tr>

    <tr>
        <td>Sexo:M</td>
        <td>Edo.Civil:{{ $informe->beneficiario->edoCivil->descripcion }}</td>

    </tr>
    <tr>
        <td>Fecha de nacimiento: {{ date("d-m-Y", strtotime($informe->beneficiario->fecha_nacimiento) ) }} </td>
        <td>Telefono:</td>

    </tr>
    <tr>
        <td colspan="2">Direccion: {{ $informe->beneficiario->direccion }}</td>

    </tr>

    <tr>
        <th colspan="2" style="text-align: center"> PRESENTA ALGUNA DISCAPACIDAD</th>
    </tr>

    <tr>
        <td>Discapacidad: {{  $informe->beneficiario->beneficiario_discapacidad[0]->discapacidad->nombre  }}  </td>
        <td>Grado:{{  $informe->beneficiario->beneficiario_discapacidad[0]->GradoDiscapacidad->nombre  }}</td>

    </tr>
    <tr>
        <td>Necesita ayuda
            tecnica: {{ ($informe->beneficiario->beneficiario_discapacidad[0]->certificado_discp == 1) ? 'SI' : 'NO'  }}   </td>
        <td>Numero de certificado: {{ $informe->beneficiario->beneficiario_discapacidad[0]->certificado_discp  }}</td>

    </tr>


</table>

<table class="gridtable" width="100%">

    <tr>
        <th colspan="8" style="text-align: center"> DATOS SOCIECONOMICOS</th>
    </tr>

    <tr>
        <td colspan="8" style="text-align: center">CONFORMACIÓN DEL GRUPO FAMILIAR</td>
    </tr>

    <tr>
        <th>Jefe de Familia</th>
        <th> Nombre y Apellido</th>
        <th>Edad</th>
        <th>Parentesco</th>
        <th>Ocupacion Actual</th>
        <th>Nivel de Instruccion</th>
        <th>Ingresos</th>
        <th>Cantidad en Bs.</th>
    </tr>


    @for($i=0; $i < count($informe->ingresos_grupo); $i++)
        <tr>
            <td> {!!  ($informe->ingresos_grupo[$i]->jefe_familia == 1)? '<b>X</b>'  : "-"     !!} </td>
            <td>{{ $informe->ingresos_grupo[$i]->nombre_apellido }}</td>
            <td>{{ $informe->ingresos_grupo[$i]->edad   }}</td>
            <td>{{ $informe->ingresos_grupo[$i]->parentesco->nombre   }}</td>
            <td>{{ $informe->ingresos_grupo[$i]->ocupacion->nombre   }}</td>
            <td>{{ $informe->ingresos_grupo[$i]->nivel_instruccion->nombre   }}</td>
            <td>{{ $informe->ingresos_grupo[$i]->consulta_ingresos->nombre   }}</td>
            <td>{{ $informe->ingresos_grupo[$i]->cantidad   }}</td>
        </tr>
    @endfor

</table>


<table style="margin-top: 200px" class="gridtable">

    <tr>
        <th colspan="7" style="text-align: center">Tipo de vivienda</th>
    </tr>

    <tr>

        @foreach($vivienda as $in=>$val)

            <td>   {!!   ($in == $val) ?  '<b>X</b> '.$val   : $val   !!} </td>




        @endforeach

    </tr>

    <tr>
        <th colspan="7" style="text-align: center">TIPO DE PAREDES</th>
    </tr>

    <tr>

        @foreach($paredes as $in=>$val)

            <td>   {!!   ($in == $val) ?  '<b>X</b> '.$val   : $val   !!} </td>

        @endforeach
    </tr>

    <tr>
        <th colspan="7" style="text-align: center">TIPO DE PISOS</th>
    </tr>

    <tr>

        @foreach($pisos as $in=>$val)

            <td>   {!!  ($in == $val) ? '<b>X</b> '.$val  : $val   !!} </td>

        @endforeach


    </tr>


    <tr>
        <th colspan="7" style="text-align: center">TIPO DE TECHOS</th>
    </tr>

    <tr>
        @foreach($techos as $in=>$val)

            <td>   {!!   ($in == $val) ?  '<b>X</b> '.$val   : $val   !!} </td>
        @endforeach
        <td></td>
    </tr>


    <tr>
        <th colspan="7" style="text-align: center">SUMINISTRO DE AGUA</th>
    </tr>
    <tr>
        @foreach($suministro_agua  as $in=>$val)

            <td>   {!!   ($in == $val) ?  '<b>X</b> '.$val   : $val   !!} </td>
        @endforeach
        <td></td>
    </tr>

    <tr>
        <th colspan="7" style="text-align: center">SUMINISTRO DE GAS</th>
    </tr>

    <tr>

        @foreach($gas as $in=>$val)

            <td>   {!!   ($in == $val) ?  '<b>X</b> '.$val   : $val   !!} </td>
        @endforeach
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <th colspan="7" style="text-align: center">DESECHO BASURA</th>
    </tr>

    <tr>
        @foreach($basura as $in=>$val)

            <td>   {!!   ($in == $val) ?  '<b>X</b> '.$val   : $val   !!} </td>
        @endforeach
        <td></td>
        <td></td>
        <td></td>
    </tr>


</table>


<table class="gridtable">

    <tr>
        <th colspan="8" style="text-align: center">COMITES</th>
    </tr>


    <tr>
        @for($x=1; $x <= 7; $x++ )
            @if(isset($comites1[$x]) == true )
                <td>{!! '<b>X</b> '. $comites1[$x]  !!}    </td>

            @else

                <td> {!!  $comites[$x] !!}</td>

            @endif

        @endfor


        <td></td>
    </tr>

    <tr>
        @for($x=8; $x <= 15; $x++ )
            @if(isset($comites1[$x]) == true )

                <td>{!! '<b>X</b> '. $comites1[$x]  !!}    </td>

            @else

                <td> {!!  $comites[$x] !!}</td>

            @endif

        @endfor



    </tr>


</table>


<table class="gridtable">


    <tr>
        <th colspan="7" style="text-align: center">MISIONES</th>
    </tr>


    <tr>


        @for($x=1; $x <= 7; $x++ )
            @if(isset($misiones1[$x]) == true )

                <td>{!! '<b>X</b> '. $misiones1[$x]  !!}    </td>

            @else

                <td> {!!  $misiones[$x] !!}</td>

            @endif

        @endfor

    </tr>

    <tr>
        @for($x=8; $x <= 14; $x++ )
            @if(isset($misiones1[$x]) == true )

                <td>{!! '<b>X</b> '. $misiones1[$x]  !!}    </td>

            @else

                <td> {!!  $misiones[$x] !!}</td>

            @endif


        @endfor

    </tr>

    <tr>
        @for($x=15; $x <= 21; $x++ )
            @if(isset($misiones1[$x]) == true )

                <td>{!! '<b>X</b> '. $misiones1[$x]  !!}    </td>

            @else

                <td> {!!  $misiones[$x] !!}</td>

            @endif


        @endfor

    </tr>
    <tr>
        @for($x=22; $x <= 25; $x++ )
            @if(isset($misiones1[$x]) == true )

                <td>{!! '<b>X</b> '. $misiones1[$x]  !!}    </td>

            @else

                <td> {!!  $misiones[$x] !!}</td>

            @endif

        @endfor
        <td></td>
        <td></td>
        <td></td>
    </tr>


</table>


</body>
</html>


{{--<div>
    <img src="{{ asset('cortes_agenda/instrucciones.png') }}" width="150">

    Welcome to {!! 'nemo' !!} website!
</div>--}}

