<div class="panel panel-primary">
    <div class=" text-center panel-heading">III. CONFORMACION DEL GRUPO FAMILIAR:</div>
    <div class="panel-body">
        <p class=" alert-info text-center"></p>

        <div class="table-responsive">
            <table id="ingresos" class="table table-bordered">
                <tr class="info">
                    <th class="text-center" colspan="12">INGRESOS POR PERSONA</th>
                </tr>

                <tr>
                    <th class="col-xs-1"> Jefe de Familia</th>
                    <th class="col-xs-2">Nombre y Apellido</th>
                    <th>Edad</th>
                    <th>Parentesco</th>
                    <th>Ocupacion Actual</th>
                    <th>Nivel de Instruccion</th>
                    <th>Ingresos</th>
                    <th class="col-xs-1">Cantidad en Bs.</th>
                    {{--    <th></th>--}}

                </tr>

                <tbody class="input_fields_wrap">
                <?php $totali = 0; ?>



                @foreach($informe[0]->ingresos_grupo as $ingresos)
                    <tr>
                        <td class="text-center">  @if($ingresos->jefe_familia == 1 )  <span
                                    class="glyphicon glyphicon-ok"></span>  @endif     </td>
                        <td> {!! $ingresos->nombre_apellido !!}  </td>
                        <td>{!! $ingresos->edad !!} </td>
                        <td> {!! $ingresos->parentesco['nombre'] !!} </td>
                        <td> {!! $ingresos->ocupacion['nombre'] !!} </td>
                        <td> {!! $ingresos->nivel_instruccion['nombre'] !!} </td>
                        <td>{!! $ingresos->consulta_ingresos['nombre'] !!} </td>
                        <td>{!! $ingresos->cantidad !!}</td>

                        <?php $totali += $ingresos->cantidad   ?>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>

        <br>

        <table id="egresos" class="table table-bordered">
            <tr class="info">
                <th colspan="12" class="text-center">
                    EGRESO MENSUAL POR GRUPO FAMILIAR
                </th>
            </tr>

            <tr>
                @foreach($informe[0]->egresos_grupo as $egresos)
                    <th> {!! $egresos->nombre   !!}</th>

                @endforeach
            </tr>
            <tr>

                <?php $totale = 0; ?>
                @foreach($informe[0]->egresos_grupo as $egresos)
                    <td> {!! $egresos->cantidad   !!}</td>
                    <?php  $totale += $egresos->cantidad  ?>
                @endforeach

            </tr>

        </table>

        <div>
            <br>

            <div class="row">
                <div class="col-xs-4"> {!! Form::label('Tipo','Otros Ingresos:'); !!}</div>
                <div class="col-xs-4"> {!! Form::label('Tipo','Ingreso Total:'); !!}</div>
                <div class="col-xs-4"> {!! Form::label('Tipo','Egreso Total:'); !!}</div>
            </div>

            <div class="row">
                <div class="col-xs-4"> {!! Form::text("otrosIngresos",null,["class"=>"form-control" ]); !!}</div>
                <div class="col-xs-4"> {!! Form::text("ingresoTotal",$totali,['id'=>"income_sum",'readonly'=>true,"class"=>"form-control total"]); !!}</div>
                <div class="col-xs-4"> {!! Form::text("egresoTotal", $totale ,[ 'id'=>"income_sum2","class"=>"form-control",'readonly'=>true]); !!}</div>

            </div>
        </div>


    </div>
</div>


<div class="panel panel-primary">
    <div class=" text-center panel-heading">IV. DATOS SOCIO-DEMOGRAFICO DEL GRUPO FAMILIAR:</div>

    <div class="panel-body">

        <table>

            <tr class="table table-bordered">
                <th colspan="12" class="text-center">
                    TENENCIA DE LA VIVIENDA:
                </th>

                @foreach($socio['vivienda'] as $vivi)
                    <th> {!! $vivi->nombre   !!}</th>

                @endforeach



            </tr>





        </table>








    </div>


</div>
