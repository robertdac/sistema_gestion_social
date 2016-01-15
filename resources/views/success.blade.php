<!DOCTYPE html>
<html>
<head>
    <style>
body{
     font-family: Arial;
    font-size: 80% ;


}

        table{

         border-spacing: 10px;



        }
    </style>
</head>
<body>


<script type="text/php">
 $text = 'pagina: {PAGE_NUM} / {PAGE_COUNT}';
 $font = Font_Metrics::get_font("helvetica", "bold");
 $pdf->page_text(100, 300, $text, $font, 9);
</script>



<table width="100%" border="0">
    <tr>
        <td><img src="{{ asset('cortes_agenda/logoGDC.png')  }}" width="80" height="80">
        </td>
    </tr>

    <tr>
        <td colspan="2" style=" text-align: center">Secretaría de Gestión Social <br> Subsecretaría de Atención Social
        </td>
    </tr>

    <tr>

        <td>
            Fecha de la entrevista: 21/08/1989

        </td>
        <td>
            Lugar: Caracas

        </td>

    </tr>

    <tr>
        <td style="text-align: center" colspan="2">DESCRIPCION DE LA SOLICITUD</td>

    </tr>

    <tr>
        <td colspan="2"> {{ $informe->descripcion }}
        </td>



    </tr>

    <tr>
        <td colspan="2" style="text-align: center"> DATOS DE IDENTIFICACIÓN DEL SOLICITANTE</td>
    </tr>


    <tr>
        <td colspan="2"> Nombres Apellidos: {{ $informe->solicitante->nombres." ".$informe->solicitante->apellidos  }}</td>
    </tr>
    <tr>

        <td>Cedula:{{ $informe->solicitante->cedula  }}</td>
        <td>Sexo: {{ $informe->solicitante->sexo }}</td>

    </tr>
    <tr>
        <td>Afinidad:</td>
        <td>Fecha de nacimiento: {{ $informe->solicitante->fecha_nacimiento }}</td>

    </tr>
    <tr>
        <td>Escolaridad:</td>
        <td>Telefono:</td>

    </tr>

    <tr>
        <td colspan="2" style="text-align: center"> DATOS DE IDENTIFICACIóN DEL BENEFICIARIO</td>
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
        <td>Fecha de nacimiento: {{ $informe->beneficiario->fecha_nacimiento }} </td>
        <td>Telefono:</td>

    </tr>
    <tr>
        <td colspan="2">Direccion: {{ $informe->direccion }}</td>

    </tr>

    <tr>
        <td colspan="2" style="text-align: center"> PRESENTA ALGUNA DISCAPACIDAD</td>
    </tr>

    <tr>
        <td>Discapacidad:</td>
        <td>Grado:</td>

    </tr>
    <tr>
        <td>Necesita ayuda tecnica:</td>
        <td>Numero de certificado:</td>

    </tr>


    <tr>
        <td colspan="2" style="text-align: center"> DATOS SOCIECONOMICOS</td>
    </tr>

</table>

<table width="100%">

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
            <td> {{ ($informe->ingresos_grupo[$i]->jefe_familia == 1)?  'X' : "-"     }} </td>
            <td>{{ $informe->ingresos_grupo[$i]->nombre_apellido }}</td>
            <td>{{ $informe->ingresos_grupo[$i]->edad   }}</td>
            <td>{{ $informe->ingresos_grupo[$i]->parentesco->nombre   }}</td>
            <td>{{ $informe->ingresos_grupo[$i]->ocupacion->nombre   }}</td>
            <td>{{ $informe->ingresos_grupo[$i]->nivel_instruccion->nombre   }}</td>
            <td>{{ $informe->ingresos_grupo[$i]->consulta_ingresos->nombre   }}</td>
            <td>{{ $informe->ingresos_grupo[$i]->cantidad   }}</td>
    </tr>
        @endfor




    <tr>
        <td colspan="8" style="text-align: center">Tipo de vivienda</td>
    </tr>

    <tr>

      @foreach($vivienda as $vi)

          <td> {{ $vi  }}</td>
      @endforeach


    </tr>

    <tr>
        <td colspan="8" style="text-align: center">Tipo de Paredes</td>
    </tr>

    <tr>
        @foreach($paredes as $pa)

            <td> {{ $pa  }}</td>
        @endforeach
    </tr>
    <tr>
        <td colspan="8" style="text-align: center">Tipo de Pisos</td>
    </tr>

    <tr>
        @foreach($pisos as $pi)

            <td> {{ $pi  }}</td>
        @endforeach

    </tr>

    <tr>
        <td colspan="8" style="text-align: center">Tipo de techos</td>
    </tr>

    <tr>
        @foreach($techos as $te)

            <td> {{ $te  }}</td>
        @endforeach
    </tr>


    <tr>
        <td colspan="8" style="text-align: center">Suministro de Agua</td>
    </tr>
    <tr>
        @foreach($suministro_agua as $sumi)

            <td> {{ $sumi  }}</td>
        @endforeach
    </tr>


    <tr>
        <td colspan="8" style="text-align: center">Suministro de Gas</td>
    </tr>

    <tr>
        @foreach($gas as $ga)

            <td> {{ $ga  }}</td>
        @endforeach
    </tr>


    <tr>
        <td colspan="8" style="text-align: center">Desecho de Basura</td>
    </tr>

    <tr>
        @foreach($basura as $ba)

            <td> {{ $ba  }}</td>
        @endforeach
    </tr>

</table>


</body>
</html>


{{--<div>
    <img src="{{ asset('cortes_agenda/instrucciones.png') }}" width="150">

    Welcome to {!! 'nemo' !!} website!
</div>--}}

