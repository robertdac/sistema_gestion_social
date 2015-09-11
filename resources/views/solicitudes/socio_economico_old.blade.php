<div id="socioEco" role="tabpanel" class=" tab-pane">

    <div class="col-xs-4">
        {!! Form::label('programa que presta la comunidad (misiones)'); !!}
        {!! Form::select('misiones[1]',$misiones,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

    </div>

{{--
<div class="panel panel-primary">
    <div class=" panel-heading">III. CONFORMACION DEL GRUPO FAMILIAR:</div>
    <div class="panel-body">
        <p class=" alert-info text-center"></p>

        <div class="table-responsive">
            <table class="table table-bordered">
                <tr class="info">
                    <th class="text-center" colspan="12">INGRESOS POR PERSONA</th>
                </tr>

                <tr>
                    <th class="col-xs-2">Nombre y Apellido</th>
                    <th>Edad</th>
                    <th class="col-xs-2">Parentesco</th>
                    <th>Ocupacion Actual</th>
                    <th>Nivel de Instruccion</th>
                    <th>Ingresos</th>
                    <th>Cantidad en Bs.</th>
                --}}
{{--    <th></th>--}}{{--


                </tr>

                <tbody class="input_fields_wrap">

                <tr>

                    <td> {!! Form::text("nombre_Apellido[0]",$datos[2].' '.$datos[4],["class"=>"mayusculas form-control"]); !!}  </td>
                    <td> {!! Form::text("edad[0]",date('Y-m-d') - str_replace('"','',$datos[6]),["class"=>"form-control"]); !!} </td>
                    <td>{!! Form::text("parentesco[0]",'BENEFICIARIO(A)',['readonly'=>'true',"class"=>"form-control"]); !!} </td>
                    <td>{!! Form::select('ocupacion[0]',$ocupacion,'',[ 'id'=>'cambia', 'class'=>'form-control']); !!} </td>
                    <td>{!! Form::select("nivel_instruccion[0]",[''=>'SELECCIONE','UNIVERSITARIO','TECNICO','BACHILLERATO','PRIMARIA COMPLETA','PRIMARIA INCOMPLETA'],'',[ "id"=>'cambia', "class"=>"form-control"]); !!} </td>
                    <td> {!! Form::select('ingresos[0]',[''=>'SELECCIONE...','FORTUNA HEREDADADA O ADQUIRIDA','GANANCIAS O BENEFICIOS, HONORARIOS PROFESIONALES','SUELDO MENSUAL','SALARIO SEMANAL , POR DIA, ENTRADA A DESTAJO','DONACIONES DE ORIGEN PUBLICO O PRIVADO, PENSIONES,JUBILACIONES'],'',['class'=>'form-control']); !!} </td>
                    <td>{!! Form::text("cantidad[0]",null,["class"=>"suma form-control"]); !!}</td>

                    --}}
{{--    <td><a class="add_field_button"
                               href="#">Agregar</a>
                            <button class="add_field_button">Add More Fields</button>
                        </td>--}}{{--


                </tr>


                    @for($i=1; $i<=5; $i++)
                <tr>

                    <td> {!! Form::text("nombre_Apellido[$i]",null,["class"=>"mayusculas form-control"]); !!}  </td>
                    <td> {!! Form::text("edad[$i]",null,["class"=>"form-control"]); !!} </td>
                    <td> {!!Form::select("parentesco[$i]",[''=>'SELECCIONE...','CONYUGE','HIJO(A)','NIETO(A)','MADRE','PADRE','SUEGRO','HERMANO(A)','SOBRINO(A)','PRIMO(A)','YERNO(A)','NUERO(A)'],'',['class'=>'form-control']); !!} </td>
                    <td> {!! Form::select("ocupacion[$i]",$ocupacion,'',[ 'id'=>'cambia', 'class'=>'form-control']); !!} </td>
                    <td> {!! Form::select("nivel_instruccion[$i]",[''=>'SELECCIONE','UNIVERSITARIO','TECNICO','BACHILLERATO','PRIMARIA COMPLETA','PRIMARIA INCOMPLETA'],'',[ "id"=>'cambia', "class"=>"form-control"]); !!} </td>
                    <td> {!! Form::select("ingresos[$i]",[''=>'SELECCIONE...','FORTUNA HEREDADADA O ADQUIRIDA','GANANCIAS O BENEFICIOS, HONORARIOS PROFESIONALES','SUELDO MENSUAL','SALARIO SEMANAL , POR DIA, ENTRADA A DESTAJO','DONACIONES DE ORIGEN PUBLICO O PRIVADO, PENSIONES,JUBILACIONES'],'',['class'=>'form-control']); !!} </td>
                    <td> {!! Form::text("cantidad[$i]",null,["class"=>"suma form-control"]); !!}</td>

                </tr>
                    @endfor

                </tbody>
            </table>


        </div>

        <br>

        <table class="table table-striped">
            <tr class="info">
                <th colspan="12" class="text-center">
                    EGRESO MENSUAL POR GRUPO FAMILIAR
                </th>


            </tr>


            <tr>
                <td> {!! Form::checkbox('alimentacion',null,null,['id'=>'activo_alimentacion']); !!}</td>
                <td><strong>Alimentacion</strong></td>
                <td>{!!
                        Form::text('alimentacion_egre',null,['class'=>'form-control','id'=>'alimentacion','disabled'=>'true'
                        , 'placeholder'=>'Cantidad en Bs.']); !!}
                </td>

            </tr>
            <tr>
                <td>{!! Form::checkbox('servicios publicos',null,null,['id'=>'activo_spublicos']); !!}</td>
                <td><strong>Servicios Publicos</strong></td>
                <td>{!!
                        Form::text('spublicos_egre',null,['class'=>'form-control','id'=>'servicios','disabled'=>'true'
                        ,'placeholder'=>'Cantidad en Bs.']); !!}
                </td>


            </tr>
            <tr>
                <td>{!! Form::checkbox('telefono',null,null,['id'=>'activo_telefono']); !!}</td>
                <td><strong>Telefono</strong></td>
                <td>{!! Form::text('telefono_egre',null,['class'=>'form-control','disabled'=>'true'
                        ,'id'=>'telefono','placeholder'=>'Cantidad en Bs.']); !!}
                </td>


            </tr>
            <tr>
                <td>{!! Form::checkbox('gas',null,null,['id'=>'activo_gas']); !!}</td>
                <td><strong>Gas</strong></td>
                <td>{!! Form::text('gas_egre',null,['class'=>'form-control','id'=>'gas','disabled'=>'true'
                        ,'placeholder'=>'Cantidad en Bs.']); !!}
                </td>


            </tr>
            <tr>
                <td>{!! Form::checkbox('agua',null,null,['id'=>'activo_agua']); !!}</td>
                <td><strong>Agua</strong></td>
                <td>{!! Form::text('agua_egre',null,['class'=>'form-control','id'=>'agua', 'disabled'=>'true'
                        ,'placeholder'=>'Cantidad en Bs.']); !!}
                </td>

            </tr>
            <tr>
                <td>{!! Form::checkbox('salud',null,null,['id'=>'activo_salud']) !!}</td>
                <td><strong>Salud</strong></td>
                <td>{!! Form::text('salud_egre',null,['class'=>'form-control','id'=>'salud','disabled'=>'true'
                        ,'placeholder'=>'Cantidad en Bs.']); !!}
                </td>

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
                <div class="col-xs-4"> {!! Form::text("otrosIngresos",null,["class"=>"form-control"]); !!}</div>
                <div class="col-xs-4"> {!! Form::text("ingresoTotal",null,["class"=>"form-control total"]); !!}</div>
                <div class="col-xs-4"> {!! Form::text("egresoTotal",null,["class"=>"form-control"]); !!}</div>


            </div>
        </div>


    </div>
</div>
--}}

</div>