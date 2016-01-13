<div id="socioEco" role="tabpanel" class=" tab-pane">


    {{--
        <div class="panel panel-primary">
            <div class="panel-heading">DATOS SOCIOECONOMICOS</div>
            <div class="panel-body">
                <div class="row">
                    <div class="text-center col-xs-12">
                        <label for="comment">Descripcion de la solicitud</label>
                        <textarea class="form-control" rows="2" id="comment"></textarea>
                    </div>

                </div>

            </div>
        </div>
    --}}


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
                        <th class="col-xs-2">Parentesco</th>
                        <th>Ocupacion Actual</th>
                        <th>Nivel de Instruccion</th>
                        <th>Ingresos</th>
                        <th class="col-xs-2">Cantidad en Bs.</th>
                        {{--    <th></th>--}}

                    </tr>

                    <tbody class="input_fields_wrap">

                    <?php $i = 0; ?>
                    @foreach($solicitudes->ingresos_grupo as $ingresos)
                        <tr>
                            <td class="text-center"> {!! Form::radio("jefe_familia",$i,($ingresos->jefe_familia == 1) ? 1 : 0  ) !!}   </td>
                            <td> {!! Form::text("nombre_Apellido[$i]",$ingresos->nombre_apellido,["class"=>"mayusculas form-control"]); !!}  </td>
                            <td> {!! Form::text("edad[$i]",$ingresos->edad,["class"=>"form-control"]); !!} </td>
                            <td> {!!Form::select("parentesco[$i]",$parentesco,$ingresos->id_parentesco,['class'=>'form-control']); !!} </td>
                            <td> {!! Form::select("ocupacion[$i]",$ocupacion,$ingresos->id_ocupacion,[ 'id'=>'cambia', 'class'=>'form-control']); !!} </td>
                            <td> {!! Form::select("nivel_instruccion[$i]",$nivelInstruccion,$ingresos->id_nivel_instr,[ "id"=>'cambia', "class"=>"form-control"]); !!} </td>
                            <td> {!! Form::select("ingresos[$i]",$consulta_ingreso,$ingresos->id_ingresos,['class'=>'form-control']); !!} </td>
                            <td> {!! Form::text("cantidad[$i]",$ingresos->cantidad,["class"=>"income_count form-control"]); !!}</td>

                        </tr>

                        <?php  $i++ ?>
                    @endforeach

                    </tbody>
                </table>


            </div>

            <br>

            <table id="egresos" class="table table-striped">
                <tr class="info">
                    <th colspan="12" class="text-center">
                        EGRESO MENSUAL POR GRUPO FAMILIAR
                    </th>
                </tr>

                @foreach($solicitudes->egresos_grupo as $egresos)

                    <tr>
                        {{--   <td> {!! Form::checkbox("egresoDescrip[$egresos->id]",$egresos->nombre); !!}</td>--}}
                        <td><strong>{!!  $egresos->nombre  !!}</strong></td>
                        <td>{!!
                        Form::text("egreso[$egresos->nombre]",$egresos->cantidad,['class'=>'income_count2 form-control','id'=>'alimentacion', 'placeholder'=>'Cantidad en Bs.']); !!}
                        </td>
                    </tr>
                @endforeach


            </table>

            {{--  <div>
                  <br>


                  <div class="row">
                      <div class="col-xs-4"> {!! Form::label('Tipo','Otros Ingresos:'); !!}</div>
                      <div class="col-xs-4"> {!! Form::label('Tipo','Ingreso Total:'); !!}</div>
                      <div class="col-xs-4"> {!! Form::label('Tipo','Egreso Total:'); !!}</div>

                  </div>

                  <div class="row">
                      <div class="col-xs-4"> {!! Form::text("otrosIngresos",null,["class"=>"form-control" ]); !!}</div>
                      <div class="col-xs-4"> {!! Form::text("ingresoTotal",null,['id'=>"income_sum",'readonly'=>true,"class"=>"form-control total"]); !!}</div>
                      <div class="col-xs-4"> {!! Form::text("egresoTotal",null,[ 'id'=>"income_sum2","class"=>"form-control",'readonly'=>true]); !!}</div>


                  </div>
              </div>--}}


        </div>
    </div>


    <div class="panel panel-primary">
        <div class=" panel-heading text-center">IV.DATOS SOCIO-DEMOGRAFICOS DEL GRUPO FAMILIAR:</div>
        <div class="panel-body">


            <div class="row">

                <div class="col-xs-3">

                    {!! Form::label('Tipo de Vivienda') !!}
                    {!! Form::select("socio_demofrafico[vivienda][]",$vivienda,unserialize($solicitudes->socio_demografico[0]->id_viviendas),['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>


                <div class="col-xs-3">

                    {!! Form::label('Tipo de paredes') !!}

                    {!! Form::select('socio_demofrafico[paredes][]',$paredes,unserialize($solicitudes->socio_demografico[0]->id_paredes),['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}


                </div>
                <div class="col-xs-3">

                    {!! Form::label('Tipo de pisos') !!}

                    {!! Form::select('socio_demofrafico[pisos][]',$pisos,unserialize($solicitudes->socio_demografico[0]->id_pisos),['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>
                <div class="col-xs-3">

                    {!! Form::label('Tipo de techos') !!}

                    {!! Form::select('socio_demofrafico[techos][]',$techos,unserialize($solicitudes->socio_demografico[0]->id_techos),['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>


            </div>
            <br>


            <div class="row">


                <div class="col-xs-3">

                    {!! Form::label('suministro de agua') !!}
                    {!! Form::select('socio_demofrafico[agua][]',$suministro_agua,unserialize($solicitudes->socio_demografico[0]->id_agua),['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>

                <div class="col-xs-3">

                    {!! Form::label('suministro de gas') !!}
                    {!! Form::select('socio_demofrafico[gas][]',$gas,unserialize($solicitudes->socio_demografico[0]->id_gas),['class'=>'selectpicker form-control','multiple
                    data-selected-text-format'=>'count']); !!}

                </div>


                <div class="col-xs-3">

                    {!! Form::label('desecho de basura') !!}
                    {!! Form::select('socio_demofrafico[basura][]',$desecho,unserialize($solicitudes->socio_demografico[0]->id_basura),['class'=>'selectpicker form-control','multiple
                    data-selected-text-format'=>'count']); !!}

                </div>


                <div class="col-xs-3">

                    {!! Form::label('Aguas servidas') !!}

                    {!! Form::select('socio_demofrafico[aguas_servidas][]',$agua_ser,unserialize($solicitudes->socio_demografico[0]->id_agua_servida),['class'=>'selectpicker form-control','multiple
                    data-selected-text-format'=>'count']); !!}

                </div>

            </div>
            <br>

            <div class="row">

                <div class="col-xs-3">
                    {!! Form::label('servicios que presta la comunidad'); !!}
                    {!! Form::select('socio_demofrafico[servicio_comunidad][]',$servicios_comunidad,unserialize($solicitudes->socio_demografico[0]->id_comunidad),['class'=>'selectpicker
                    form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>


                <div class="col-xs-4">
                    {!! Form::label('programa que presta la comunidad (comites)'); !!}
                    {!! Form::select('socio_demofrafico[programa][]',$comite,unserialize($solicitudes->socio_demografico[0]->id_comite),['class'=>'selectpicker form-control','multiple
                    data-selected-text-format'=>'count']); !!}

                </div>


                <div class="col-xs-4">
                    {!! Form::label('programa que presta la comunidad (misiones)'); !!}
                    {!! Form::select('socio_demofrafico[misiones][]',$misiones,unserialize($solicitudes->socio_demografico[0]->id_misiones),['class'=>'selectpicker form-control','multiple
                    data-selected-text-format'=>'count']); !!}

                </div>

            </div>

        </div>

    </div>

    <div class="panel panel-primary">
        <div class=" text-center  panel-heading">BASADO EN LAS PREGUNTAS ANTERIORES DONDE UBICA LA REALIDAD
            SOCIOECONOMICA DEL GRUPO FAMILIAR
        </div>
        <div class="panel-body">

            @foreach($realidad as $in => $real )

                <div class="col-xs-12">
                    {!! Form::radio('preguntas',$in,($in == $solicitudes->id_realidad_socieco) ? 1 : 0  ) !!}
                    {!! Form::label($real) !!}

                </div>
                <br>

            @endforeach

        </div>
    </div>


    <div class="col-xs-12 text-center">

        {!! Form::submit('Editar',['class'=>'btn btn-primary btn-lg']); !!}

    </div>


</div>
















