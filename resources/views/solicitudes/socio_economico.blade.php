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
                        <th class="col-xs-1"> Jefe de Familia  </th>
                        <th class="col-xs-2">Nombre y Apellido</th>
                        <th>Edad</th>
                        <th class="col-xs-2">Parentesco</th>
                        <th>Ocupacion Actual</th>
                        <th>Nivel de Instruccion</th>
                        <th>Ingresos</th>
                        <th class="col-xs-2" >Cantidad en Bs.</th>
                        {{--    <th></th>--}}

                    </tr>

                    <tbody class="input_fields_wrap">

                    <tr><p>
                        <td class="text-center"> {!! Form::radio('jefe_familia',0)  !!}</td>
                        </p>
                        <td> {!! Form::text("nombre_Apellido[0]",$datos[0]->strnombre_primer.' '.$datos[0]->strapellido_primer,["class"=>"mayusculas form-control",'required'=>""]); !!}  </td>
                        <td> {!! Form::text("edad[0]",date('Y-m-d') - str_replace('"','',$datos[0]->dtmnacimiento),["class"=>"numeros form-control",'required'=>""]); !!} </td>
                        <td>{!! Form::select("parentesco[0]",$parentesco,null,["class"=>"form-control parentesco0",'required'=>""]); !!} </td>
                        <td>{!! Form::select('ocupacion[0]',$ocupacion ,'',[ 'id'=>'cambia', 'class'=>'form-control','required'=>""]); !!} </td>
                        <td>{!! Form::select("nivel_instruccion[0]",$nivel_instruccion,'',[ "id"=>'cambia', "class"=>"form-control",'required'=>""]); !!} </td>
                        <td> {!! Form::select('ingresos[0]',$consulta_ingreso,'',['class'=>'form-control','required'=>""]); !!} </td>
                        <td>{!! Form::text("cantidad[0]",null,["class"=>"numeros income_count form-control",'required'=>""]); !!}</td>

                        {{--    <td><a class="add_field_button"
                                       href="#">Agregar</a>
                            <button class="add_field_button">Add More Fields</button>
                        </td>--}}

                    </tr>


                    @for($i=1; $i<=5; $i++)
                        <tr>
                            <td class="text-center"> {!! Form::radio("jefe_familia",$i) !!}   </td>
                            <td> {!! Form::text("nombre_Apellido[$i]",null,["class"=>"mayusculas form-control"]); !!}  </td>
                            <td> {!! Form::text("edad[$i]",null,["class"=>"numeros form-control"]); !!} </td>
                            <td> {!!Form::select("parentesco[$i]",$parentesco,'',['class'=>"form-control parentesco$i"]); !!} </td>
                            <td> {!! Form::select("ocupacion[$i]",$ocupacion,'',[ 'id'=>'cambia', 'class'=>'form-control']); !!} </td>
                            <td> {!! Form::select("nivel_instruccion[$i]",$nivel_instruccion,'',[ "id"=>'cambia', "class"=>"form-control"]); !!} </td>
                            <td> {!! Form::select("ingresos[$i]",$consulta_ingreso,'',['class'=>'form-control']); !!} </td>
                            <td> {!! Form::text("cantidad[$i]",null,["class"=>"numeros income_count form-control"]); !!}</td>

                        </tr>
                    @endfor

                    </tbody>
                </table>


            </div>

            <br>

            <table id="egresos" class="table table-striped">
                <tr class="info">
                    <th colspan="12" class="text-center">
                        EGRESO MENSUAL POR GRUPO FAMILIAR
                    </th>


                <tr>
                    <td> {!! Form::checkbox("egresoDescrip[0]",'ALIMENTACION',null,['id'=>'activo_alimentacion']); !!}</td>
                    <td><strong>Alimentacion</strong></td>
                    <td>{!!
                        Form::text('egreso[ALIMENTACION]',null,['class'=>'numeros income_count2 form-control','id'=>'alimentacion','disabled'=>'true', 'placeholder'=>'Cantidad en Bs.']); !!}
                    </td>

                </tr>
                <tr>
                    <td>{!! Form::checkbox('egresoDescrip[1]','SERVICIOS PUBLICOS',null,['id'=>'activo_spublicos']); !!}</td>
                    <td><strong>Servicios Publicos</strong></td>
                    <td>{!!
                        Form::text("egreso[SERVICIOS PUBLICOS]",null,['class'=>'numeros income_count2 form-control','id'=>'servicios','disabled'=>'true','placeholder'=>'Cantidad en Bs.']); !!}
                    </td>


                </tr>
                <tr>
                    <td>{!! Form::checkbox('egresoDescrip[2]','TELEFONO',null,['id'=>'activo_telefono']); !!}</td>
                    <td><strong>Telefono</strong></td>
                    <td>{!! Form::text("egreso[TELEFONO]",null,['class'=>'numeros income_count2 form-control','disabled'=>'true','id'=>'telefono','placeholder'=>'Cantidad en Bs.']); !!}
                    </td>


                </tr>
                <tr>
                    <td>{!! Form::checkbox('egresoDescrip[3]','GAS',null,['id'=>'activo_gas']); !!}</td>
                    <td><strong>Gas</strong></td>
                    <td>{!! Form::text("egreso[GAS]",null,['class'=>'numeros income_count2 form-control','id'=>'gas','disabled'=>'true','placeholder'=>'Cantidad en Bs.']); !!}
                    </td>


                </tr>
                <tr>
                    <td>{!! Form::checkbox('egresoDescrip[4]','AGUA',null,['id'=>'activo_agua']); !!}</td>
                    <td><strong>Agua</strong></td>
                    <td>{!! Form::text('egreso[AGUA]',null,['class'=>'numeros income_count2 form-control','id'=>'agua', 'disabled'=>'true','placeholder'=>'Cantidad en Bs.']); !!}
                    </td>

                </tr>
                <tr>
                    <td>{!! Form::checkbox('egresoDescrip[5]','SALUD',null,['id'=>'activo_salud']) !!}</td>
                    <td><strong>Salud</strong></td>
                    <td>{!! Form::text('egreso[SALUD]',null,['class'=>'numeros income_count2 form-control','id'=>'salud','disabled'=>'true','placeholder'=>'Cantidad en Bs.']); !!}
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
                    <div class="col-xs-4"> {!! Form::text("otrosIngresos",null,["class"=>"form-control" ]); !!}</div>
                    <div class="col-xs-4"> {!! Form::text("ingresoTotal",null,['id'=>"income_sum",'readonly'=>true,"class"=>"form-control total"]); !!}</div>
                    <div class="col-xs-4"> {!! Form::text("egresoTotal",null,[ 'id'=>"income_sum2","class"=>"form-control",'readonly'=>true]); !!}</div>


                </div>
            </div>


        </div>
    </div>
    <div class="panel panel-primary">
        <div class=" panel-heading text-center">IV.DATOS SOCIO-DEMOGRAFICOS DEL GRUPO FAMILIAR:</div>
        <div class="panel-body">


            <div class="row">

                <div class="col-xs-3">

                    {!! Form::label('Tipo de Vivienda') !!}
                    {!! Form::select("socio_demofrafico[vivienda][]",$vivienda,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>


                <div class="col-xs-3">

                    {!! Form::label('Tipo de paredes') !!}

                    {!! Form::select('socio_demofrafico[paredes][]',$paredes,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}


                </div>
                <div class="col-xs-3">

                    {!! Form::label('Tipo de pisos') !!}

                    {!! Form::select('socio_demofrafico[pisos][]',$pisos,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>
                <div class="col-xs-3">

                    {!! Form::label('Tipo de techos') !!}

                    {!! Form::select('socio_demofrafico[techos][]',$techos,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>


            </div>
            <br>


            <div class="row">


                <div class="col-xs-3">

                    {!! Form::label('suministro de agua') !!}
                    {!! Form::select('socio_demofrafico[agua][]',$suministro_agua,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>

                <div class="col-xs-3">

                    {!! Form::label('suministro de gas') !!}
                    {!! Form::select('socio_demofrafico[gas][]',$gas,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>


                <div class="col-xs-3">

                    {!! Form::label('desecho de basura') !!}
                    {!! Form::select('socio_demofrafico[basura][]',$desecho,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>


                <div class="col-xs-3">

                    {!! Form::label('Aguas servidas') !!}

                    {!! Form::select('socio_demofrafico[aguas_servidas][]',$agua_ser,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>

            </div>
            <br>

            <div class="row">

                <div class="col-xs-3">
                    {!! Form::label('servicios que presta la comunidad'); !!}
                    {!! Form::select('socio_demofrafico[servicio_comunidad][]',$servicios_comunidad,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>


                <div class="col-xs-4">
                    {!! Form::label('programa que presta la comunidad (comites)'); !!}
                    {!! Form::select('socio_demofrafico[programa][]',$comites,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>


                <div class="col-xs-4">
                    {!! Form::label('programa que presta la comunidad (misiones)'); !!}
                    {!! Form::select('socio_demofrafico[misiones][]',$misiones,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>

            </div>

        </div>

    </div>
    {{--  <div class="panel panel-primary">
          <div class=" text-center  panel-heading">V.PARTICIPACIÓN POLÍTICA Y SOCIO-COMUNITARIA:</div>
          <div class="panel-body">
              <p class="text-center">¿Usted o alǵun miembro de su grupo familiar participa en alguna
                  organizacíon,
                  misión o cualquier otro programa impulsado por el Gobierno Bolivariano</p>


              <div class="row">

                  <div class="col-xs-1">
                      {!! Form::radio('polisi','Si',false,['class'=>'robert']) !!}
                      {!! Form::label('si','Si') !!}
                  </div>

                  <div class="col-xs-1">
                      {!! Form::radio('polisi','No',false,['id'=>'politica2']) !!}
                      {!! Form::label('si','No') !!}

                  </div>

                  <div style="display:none" class="misiones col-xs-3">

                      {!! Form::select('misiones[32]',$misiones,0,['class'=>'selectpicker','multiple
                      data-selected-text-format'=>'count']); !!}


                  </div>


                  <div style="display:none" class="misiones col-xs-3">
                      {!! Form::label('si','¿Pertenece a un comite?') !!} <br>

                      {!! Form::radio('comite','Si') !!}
                      {!! Form::label('si','Si') !!}
                      {!! Form::radio('comite','No') !!}
                      {!! Form::label('si','No') !!}
                  </div>


                  <div style="display:none" class="comites col-xs-3">
                      {!! Form::select('comites[32]',$comites,0,['class'=>'selectpicker','multiple data-selected-text-format'=>'count']); !!}
                  </div>


              </div>


          </div>
      </div>--}}
    <div class="panel panel-primary">
        <div class=" text-center  panel-heading">BASADO EN LAS PREGUNTAS ANTERIORES DONDE UBICA LA REALIDAD
            SOCIOECONOMICA DEL GRUPO FAMILIAR
        </div>
        <div class="panel-body">

            @foreach($realidad as $in => $real )

                <div class="col-xs-12">
                    <p>
                    {!! Form::radio('preguntas',$in,null,($in == 1 )? ['required'=>""] : ''  ) !!}
                    {!! Form::label($real) !!}
                    </p>

                </div>
                <br>

            @endforeach


        </div>
    </div>


    <div class="col-xs-12 text-center">

        {!! Form::submit('Registrar',['name'=>'submit', 'class'=>'btn btn-primary btn-lg']); !!}

    </div>


</div>
















