<div id="socioEco" role="tabpanel" class=" tab-pane">


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


    <div class="panel panel-primary">
        <div class="panel-heading">DATOS DE IDENTIFICACION DEL SOLICITANTE</div>
        <div class="panel-body">

            <div class="row">
                <div class="col-xs-3">
                    <label for="email">Nacionalidad:</label>
                    <?php $nac = str_replace('(', '', $datos[0]);  ($nac == 'V') ? $naci = 'VENEZOLANO(A)' : $naci = 'EXTRANJERO(A)';   ?>
                    {!! Form::text('naci',$naci,['class'=>'form-control','readonly'=>'true']) !!}
                    {!! Form::hidden('nacionalidad',$nac)  !!}

                </div>
                <div class="col-xs-3">

                    {!! Form::label('cedula','Cedula de identidad:');  !!}
                    {!! Form::text('cedula',$datos[1],['class'=>"form-control","readonly"=>"true"]) !!}

                </div>


                <div class="col-xs-3">
                    {!! Form::label('nombre','Nombre:');   !!}
                    {!! Form::text('nombre',$datos[2],['class'=>'form-control' ]) !!}

                </div>

                <div class="col-xs-3 ">

                    {!! Form::label('apellido','Apellido')   !!}
                    {!! Form::text('apellido',$datos[4],['class'=>'form-control' ])  !!}

                </div>

            </div>
            <br>

            <div class="row">

                <div class="col-xs-3 ">
                    {!! Form::label('Edo.Civil','Edo.Civil')   !!}
                    {!! Form::select('Edocivil',$EdoCivil,$datos[8],['class'=>'form-control'])   !!}

                </div>

                <div class="col-xs-3 ">
                    {!! Form::label('masculimo','Masculino')   !!}
                    {!! Form::radio('sexo','M')  !!}
                    <br>

                    {!! Form::label('femenino','Femenino')   !!}
                    {!! Form::radio('sexo','F')  !!}

                </div>

                <div class="col-xs-3 ">
                    {!! Form::label('fecha','Fecha de Nacimiento:')    !!}
                    {!! Form::text('fecha_nacimiento',Carbon\Carbon::parse(str_replace('"','',$datos[6]))->format('d-m-Y'),['class'=>'form-control'])    !!}
                </div>

            </div>
            <br>

            <div class="row">

                <div class="col-xs-3 ">
                    {!! Form::label('Ocupacion','Ocupacion:')   !!}
                    {!! Form::select('ocupacion',$ocupacion,'',['class'=>'form-control']);  !!}
                </div>


                <div class="col-xs-3 ">
                    {!! Form::label('Estado','Estado:')   !!}
                    {!! Form::select('estado',$estados,0,['class'=>'form-control','id'=>'estado']);  !!}
                </div>
                <div class="col-xs-3">
                    {!! Form::label('Municipio','Municipio:')   !!}
                    <select class="form-control" id="municipio" name="municipio">
                        <option>Debe Seleccionar un Estado</option>
                    </select>
                </div>

                <div class="col-xs-3 ">
                    {!! Form::label('Parroquia','Parroquias:')   !!}

                    <select class="form-control" id="parroquias" name="parroquias">
                        <option name="parroquias">Debe Seleccionar un municipio</option>
                    </select>

                </div>


            </div>
            <br>


            <div class="row">

                <div class="col-xs-6">
                    <label for="comment">Sector:</label>
                    <textarea id='municipio' class="form-control" rows="3" id="comment"></textarea>
                </div>

                <div class="col-xs-3 ">
                    <label for="email">Celular:</label>
                    <input type="email" class="form-control">

                </div>
                <div class="col-xs-3 ">
                    <label for="email">Telefono(Casa):</label>
                    <input type="email" class="form-control">

                </div>


            </div>


        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">DATOS DE IDENTIFICACION DEL BENEFICIARIO</div>
        <div class="panel-body">

            <div class="row">
                <div class="col-xs-3">
                    <label for="email">Nacionalidad:</label>
                    <?php $nac = str_replace('(', '', $datos[0]);  ($nac == 'V') ? $naci = 'VENEZOLANO(A)' : $naci = 'EXTRANJERO(A)';   ?>
                    {!! Form::text('naci',$naci,['class'=>'form-control','readonly'=>'true']) !!}
                    {!! Form::hidden('nacionalidad',$nac)  !!}

                </div>
                <div class="col-xs-3">

                    {!! Form::label('cedula','Cedula de identidad:');  !!}
                    {!! Form::text('cedula',$datos[1],['class'=>"form-control","readonly"=>"true"]) !!}

                </div>


                <div class="col-xs-3">
                    {!! Form::label('nombre','Nombre:');   !!}
                    {!! Form::text('nombre',$datos[2],['class'=>'form-control' ]) !!}

                </div>

                <div class="col-xs-3 ">

                    {!! Form::label('apellido','Apellido')   !!}
                    {!! Form::text('apellido',$datos[4],['class'=>'form-control' ])  !!}

                </div>

            </div>
            <br>

            <div class="row">

                <div class="col-xs-3 ">
                    {!! Form::label('Edo.Civil','Edo.Civil')   !!}
                    {!! Form::select('Edocivil',$EdoCivil,$datos[8],['class'=>'form-control'])   !!}

                </div>

                <div class="col-xs-3 ">
                    {!! Form::label('masculimo','Masculino')   !!}
                    {!! Form::radio('sexo','M')  !!}
                    <br>

                    {!! Form::label('femenino','Femenino')   !!}
                    {!! Form::radio('sexo','F')  !!}

                </div>

                <div class="col-xs-3 ">
                    {!! Form::label('fecha','Fecha de Nacimiento:')    !!}
                    {!! Form::text('fecha_nacimiento',Carbon\Carbon::parse(str_replace('"','',$datos[6]))->format('d-m-Y'),['class'=>'form-control'])    !!}
                </div>


                <div class="col-xs-3 ">
                    {!! Form::label('fecha','Edad:')    !!}
                    {!! Form::text('edad',  date('Y-m-d') - str_replace('"','',$datos[6])  ,['class'=>'form-control'])    !!}
                </div>

            </div>
            <br>

            <div class="row">

                <div class="col-xs-3 ">
                    {!! Form::label('Ocupacion','Ocupacion:')   !!}
                    {!! Form::select('ocupacion',$ocupacion,'',['class'=>'form-control']);  !!}
                </div>


                <div class="col-xs-3 ">
                    {!! Form::label('Estado','Estado:')   !!}
                    {!! Form::select('estado',$estados,0,['class'=>'form-control','id'=>'estado']);  !!}
                </div>
                <div class="col-xs-3">
                    {!! Form::label('Municipio','Municipio:')   !!}
                    <select class="form-control" id="municipio" name="municipio">
                        <option>Debe Seleccionar un Estado</option>
                    </select>
                </div>

                <div class="col-xs-3 ">
                    {!! Form::label('Parroquia','Parroquias:')   !!}

                    <select class="form-control" id="parroquias" name="parroquias">
                        <option name="parroquias">Debe Seleccionar un municipio</option>
                    </select>

                </div>


            </div>
            <br>


            <div class="row">

                <div class="col-xs-6">
                    <label for="comment">Sector:</label>
                    <textarea id='municipio' class="form-control" rows="3" id="comment"></textarea>
                </div>

                <div class="col-xs-3 ">
                    <label for="email">Celular:</label>
                    <input type="email" class="form-control">

                </div>
                <div class="col-xs-3 ">
                    <label for="email">Telefono(Casa):</label>
                    <input type="email" class="form-control">

                </div>


            </div>
            <br>

            <div class="row">
                <div class="col-xs-3">
                    {!! Form::label('trabaja','Trabaja Actualemente:')   !!}
                    <br>
                    {!! Form::label('trabaja','Si')   !!}
                    {!! Form::radio('trabaja',1)  !!}
                    {!! Form::label('trabaja','No')   !!}
                    {!! Form::radio('trabaja', 0)  !!}
                </div>

                <div class="col-xs-3">

                    {!! Form::label('Tipo','Tipo de empleo:');  !!}
                    {!!  Form::text('tipo_empleo',null,['class'=>'form-control'])   !!}

                </div>


                <div class="col-xs-3">

                    {!! Form::label('Tipo','Presenta alguna discapacidad:');  !!}
                    {!!  Form::select('discapacidad',$discapacidad,0,['class'=>'form-control'])   !!}

                </div>


            </div>


        </div>
    </div>

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
                        <th></th>

                    </tr>

                    <tbody class="input_fields_wrap">
                    <tr>
                        <td>{!! Form::text("nombre_Apellido[]",$datos[2].' '.$datos[4],["class"=>"mayusculas form-control"]);  !!}</td>
                        <td> {!! Form::text("edad[]",date('Y-m-d') - str_replace('"','',$datos[6]),["class"=>"form-control"]);  !!}</td>
                        <td>{!! Form::text("parentesco[]",'BENEFICIARIO(A)',['readonly'=>'true', "class"=>"form-control"]);  !!}</td>
                        <td>{!! Form::select('ocupacion',$ocupacion,'',[ 'id'=>'cambia', 'class'=>'form-control']);  !!}</td>
                        <td>{!! Form::select("nivel_instruccion[]",[''=>'SELECCIONE','UNIVERSITARIO','TECNICO','BACHILLERATO','PRIMARIA COMPLETA','PRIMARIA INCOMPLETA'],'',[ "id"=>'cambia', "class"=>"form-control"]);  !!}</td>
                        <td> {!! Form::select('ingresos[]',[''=>'SELECCIONE...','FORTUNA HEREDADADA O ADQUIRIDA','GANANCIAS O BENEFICIOS, HONORARIOS PROFESIONALES','SUELDO MENSUAL','SALARIO SEMANAL , POR DIA, ENTRADA A DESTAJO','DONACIONES DE ORIGEN PUBLICO O PRIVADO, PENSIONES, JUBILACIONES'],'',['class'=>'form-control']);  !!}</td>
                        <td>{!! Form::text("cantidad[]",null,["class"=>"suma form-control"]);  !!}</td>
                        <td><a class="add_field_button"
                               href="#">Agregar</a>  {{--<button class="add_field_button">Add More Fields</button>--}}
                        </td>

                    </tr>

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
                    <td>  {!! Form::checkbox('alimentacion',null,null,['id'=>'activo_alimentacion']); !!} </td>
                    <td><strong>Alimentacion</strong></td>
                    <td>{!! Form::text('alimentacion_egre',null,['class'=>'form-control','id'=>'alimentacion','disabled'=>'true' , 'placeholder'=>'Cantidad en Bs.']); !!}</td>

                </tr>
                <tr>
                    <td>{!! Form::checkbox('servicios publicos',null,null,['id'=>'activo_spublicos']); !!}</td>
                    <td><strong>Servicios Publicos</strong></td>
                    <td>{!! Form::text('spublicos_egre',null,['class'=>'form-control','id'=>'servicios','disabled'=>'true' ,'placeholder'=>'Cantidad en Bs.']); !!}</td>


                </tr>
                <tr>
                    <td>{!! Form::checkbox('telefono',null,null,['id'=>'activo_telefono']); !!}</td>
                    <td><strong>Telefono</strong></td>
                    <td>{!! Form::text('telefono_egre',null,['class'=>'form-control','disabled'=>'true' ,'id'=>'telefono','placeholder'=>'Cantidad en Bs.']); !!}</td>


                </tr>
                <tr>
                    <td>{!! Form::checkbox('gas',null,null,['id'=>'activo_gas']); !!}</td>
                    <td><strong>Gas</strong></td>
                    <td>{!! Form::text('gas_egre',null,['class'=>'form-control','id'=>'gas','disabled'=>'true' ,'placeholder'=>'Cantidad en Bs.']); !!}</td>


                </tr>
                <tr>
                    <td>{!! Form::checkbox('agua',null,null,['id'=>'activo_agua']); !!}</td>
                    <td><strong>Agua</strong></td>
                    <td>{!! Form::text('agua_egre',null,['class'=>'form-control','id'=>'agua', 'disabled'=>'true' ,'placeholder'=>'Cantidad en Bs.']); !!}</td>

                </tr>
                <tr>
                    <td>{!! Form::checkbox('salud',null,null,['id'=>'activo_salud']); !!}</td>
                    <td><strong>Salud</strong></td>
                    <td>{!! Form::text('salud_egre',null,['class'=>'form-control','id'=>'salud','disabled'=>'true' ,'placeholder'=>'Cantidad en Bs.']); !!}</td>

                </tr>


            </table>

            <div>
                <br>


                <div class="row">
                    <div class="col-xs-4">  {!! Form::label('Tipo','Otros Ingresos:');  !!} </div>
                    <div class="col-xs-4">  {!! Form::label('Tipo','Ingreso Total:');  !!} </div>
                    <div class="col-xs-4">  {!! Form::label('Tipo','Egreso Total:');  !!} </div>

                </div>

                <div class="row">
                    <div class="col-xs-4">  {!! Form::text("nombre_Apellido[]",null,["class"=>"form-control"]);  !!} </div>
                    <div class="col-xs-4">  {!! Form::text("edad[]",null,["class"=>"form-control total"]);  !!} </div>
                    <div class="col-xs-4">  {!! Form::text("parentesco[]",null,["class"=>"form-control"]);  !!} </div>


                </div>
            </div>


        </div>
    </div>


    <div class="panel panel-primary">
        <div class=" panel-heading text-center">IV.DATOS SOCIO-DEMOGRAFICOS DEL GRUPO FAMILIAR:</div>
        <div class="panel-body">


            <div class="row">

                <div class="col-xs-3">

                    {!! Form::label('Tipo de Vivienda')  !!}
                    {!! Form::select('vivienda[]',$vivienda,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>


                <div class="col-xs-3">

                    {!! Form::label('Tipo de paredes')  !!}

                    {!! Form::select('paredes[]',$paredes,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}


                </div>
                <div class="col-xs-3">

                    {!! Form::label('Tipo de pisos')  !!}

                    {!! Form::select('pisos[]',$pisos,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>
                <div class="col-xs-3">

                    {!! Form::label('Tipo de techos')  !!}

                    {!! Form::select('techos[]',$techos,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>


            </div>
            <br>


            <div class="row">


                <div class="col-xs-3">

                    {!! Form::label('suministro de agua')  !!}
                    {!! Form::select('suministro[]',$suministro_agua,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>

                <div class="col-xs-3">

                    {!! Form::label('suministro de gas')  !!}
                    {!! Form::select('gas[]',$gas,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>


                <div class="col-xs-3">

                    {!! Form::label('desecho de basura')  !!}
                    {!! Form::select('desecho[]',$desecho,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>


                <div class="col-xs-3">

                    {!! Form::label('Aguas servidas')  !!}

                    {!! Form::select('aguas_servidas[]',$agua_ser,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>

            </div>
            <br>

            <div class="row">

                <div class="col-xs-3">
                    {!! Form::label('servicios que presta la comunidad'); !!}
                    {!! Form::select('aguas_comunidad[]',$servicios_comunidad,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>


                <div class="col-xs-4">
                    {!! Form::label('programa que presta la comunidad (comites)'); !!}
                    {!! Form::select('comites[]',$comites,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>


                <div class="col-xs-4">
                    {!! Form::label('programa que presta la comunidad (misiones)'); !!}
                    {!! Form::select('misiones[]',$misiones,0,['class'=>'selectpicker form-control','multiple data-selected-text-format'=>'count']); !!}

                </div>


            </div>


        </div>

    </div>


    <div class="panel panel-primary">
        <div class=" text-center  panel-heading">V.PARTICIPACIÓN POLÍTICA Y SOCIO-COMUNITARIA:</div>
        <div class="panel-body">

            <p class="text-center">¿Usted o alǵun miembro de su grupo familiar participa en alguna
                organizacíon,
                misión o cualquier otro programa impulsado por el Gobierno Bolivariano</p>


            <div class="row">

                <div class="col-xs-1">
                    {!! Form::radio('polisi','Si',false,['class'=>'robert'])    !!}
                    {!! Form::label('si','Si')    !!}
                </div>

                <div class="col-xs-1">
                    {!! Form::radio('polisi','No',false,['id'=>'politica2'])    !!}
                    {!! Form::label('si','No')    !!}

                </div>

                <div style="display:none" class="misiones col-xs-3">

                    {!! Form::select('misiones[]',$misiones,0,['class'=>'selectpicker','multiple data-selected-text-format'=>'count']); !!}


                </div>


                <div style="display:none" class="misiones col-xs-3">
                    {!! Form::label('si','¿Pertenece a un comite?')    !!} <br>

                    {!! Form::radio('comite','Si')    !!}
                    {!! Form::label('si','Si')    !!}
                    {!! Form::radio('comite','No')    !!}
                    {!! Form::label('si','No')    !!}
                </div>


                <div style="display:none" class="comites col-xs-3">
                    {!! Form::select('comites[]',$comites,0,['class'=>'selectpicker','multiple data-selected-text-format'=>'count']); !!}
                </div>


            </div>


        </div>


    </div>


</div>














