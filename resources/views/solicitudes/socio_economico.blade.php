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
        <div class=" panel-heading">IV.DATOS SOCIO-DEMOGRAFICOS DEL GRUPO FAMILIAR:</div>
        <div class="panel-body">

            <table class="table table-bordered">

                <tr class="info">
                    <th class=" col-sm-1 text-center" colspan="12">TIPO DE VIVIENDA</th>
                </tr>

                <tr>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>CASA</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>RANCHO</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>APARTAMENTO</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>HABITACION</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>REFUGIO</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>CASA DE ABRIGO</th>

                </tr>

                <tr>

                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>ESPACIOS IMPROVISADOS</th>
                </tr>
                <tr>
                    <th class="text-center info" colspan="12">CARACTERISTICAS DE LA VIVIENDA</th>
                </tr>
                <tr class="info">
                    <th class="text-center" colspan="12">PAREDES</th>
                </tr>


                <tr>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th> FRISAR</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th> SIN FRISAR</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th> ZINC</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>LATON</th>
                    <td>{!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>CARTON</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>MADERA</th>

                </tr>

                <tr>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>BAHAREQUE</th>
                </tr>


                <tr class="info text-center ">
                    <th colspan="12"> PISOS</th>
                </tr>


                <tr>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>GRANITO</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>CERAMICA</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>CEMENTO</th>
                    <td>{!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>TIERRA</th>
                    <td>{!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>PARKE</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>MADERA</th>

                </tr>

                <tr>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>PLASTICO</th>

                </tr>


                <tr class="info">

                    <th class="text-center" colspan="12">TECHO</th>
                </tr>

                <tr>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>PLATABANDA</th>
                    <td>{!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>ZINC</th>
                    <td>{!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>ACEROLIT</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>ASBESTO</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>TEJAS</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>MACHIHEMBRADO</th>

                </tr>

                <tr class="info">
                    <th class="text-center" colspan="12">TENENCIA DE LA VIVIENDA</th>
                </tr>

                <tr>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>PROPIA</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>ALQUILADA</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>CEDIDA</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>INVADIDA</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>ADJUDICADO</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>DE FAMILIAR</th>


                </tr>

                <tr>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>ARRIMADO</th>

                </tr>


                <tr class="info">
                    <th class="text-center" colspan="12">ESPACIOS DE LOS QUE DISPONE LA VIVIENDA</th>
                </tr>

                <tr>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>COCINA</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>SALA</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>DORMITORIOS</th>
                    {{-- <td>{!! Form::select('tipo_vivienda',['1','2'],0,['class'=>'form-control'])  !!}</td>--}}
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>BAÑO</th>
                    {{--        <td>{!! Form::select('tipo_vivienda',['1','2'],0,['class'=>'form-control'])  !!}</td>--}}
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>LAVADERO</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>ESTACIONAMIENTO</th>

                </tr>

                <tr>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>TERRAZA</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>JARDIN</th>

                </tr>

                <tr class="info">
                    <th class="text-center" colspan="12">SERVICIOS DE LOS QUE DISPONE LA VIVIENDA</th>
                </tr>

                <tr>
                    <td>{!! Form::select('tipo_vivienda',['TUBERIA','LLUVIA','MANANTIAL','POZO','TANQUE','CISTERNA'],0,['class'=>'form-control'])  !!}</td>
                    <th class="text-center">SUMINISTRO DE AGUA</th>
                    <td>{!! Form::select('tipo_vivienda',['DIRECTO','BOMBONA'],0,['class'=>'form-control'])  !!}</td>
                    <th class="text-center">GAS</th>
                    <td>{!! Form::select('tipo_vivienda',['CAMION','CAMIONETA','CONTAINER','CONTAINER','AL AIRE LIBRE'],0,['class'=>'form-control'])  !!}</td>
                    <th class="text-center">DESECHO DE BASURA</th>
                    <td>{!! Form::select('tipo_vivienda',['CLOACAS','POZO SEPTICO','LETRINA'],0,['class'=>'form-control'])  !!}</td>
                    <th class="text-center">AGUAS SERVIDAS</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>TELEVISIÓN POR SUSCRIPCION</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>TELEFONO:</th>


                </tr>
                <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                <th>INTERNET:</th>
                <tr>


                </tr>


                <tr class="info">
                    <th class="text-center" colspan="12">SERVICIOS DE LOS QUE DISPONE LA COMUNIDAD</th>
                </tr>
                <tr>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>ESCALERAS Y CAMINERIAS</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>ALUMBRADO PUBLICO</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>AREAS RECREATIVAS</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>CENTROS DE SALUD</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>VIGILANCIA POLICIAL</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>TELEFONOS PUBLICOS</th>
                </tr>
                <tr>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>TRANSPORTE PUBLICO</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>AREAS DEPORTIVAS</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>SIMONCITO</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>ESCUELA</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>LICEO</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>UNIVERSIDAD</th>
                </tr>

                <tr>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>BIBLIOTECA</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>INFOCENTRO</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>DRENAJE FLUVIAL</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>CONSEJOS COMUNALES</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>ORGANIZACIONES COMUNITARIAS</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MOVIMIENTOS SOCIALES</th>
                </tr>

                <tr>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>COMUNAS</th>

                </tr>
                <tr class="info">
                    <th class="text-center" colspan="12">PROGRAMAS EN LA COMUNIDAD</th>
                </tr>

                <tr>
                    <td> {!! Form::select('tipo_vivienda',['SELECCIONE','COMITÉ DE SALUD,COMITÉ DE TIERRA URBANA','COMITÉ DE VIVIENDA Y HÁBITAT','COMITÉ DE ECONOMÍA COMUNAL','COMITÉ DE SEGURIDAD Y DEFENSA INTEGRAL','COMITÉ DE MEDIOS ALTERNATIVOS COMUNITARIOS','COMITÉ DE RECREACIÓN Y DEPORTES','COMITÉ DE ALIMENTACIÓN Y DEFENSA DEL CONSUMIDOR','COMITÉ DE MESA TÉCNICA DE AGUA','COMITÉ DE MESA TÉCNICA DE ENERGÍA Y GAS','COMITÉ DE PROTECCIÓN SOCIAL DE NIÑOS, NIÑAS Y ADOLESCENTES','COMITÉ COMUNITARIO DE PERSONAS CON DISCAPACIDAD','COMITÉ DE EDUCACIÓN, CULTURA Y FORMACIÓN CIUDADANA','COMITÉ DE FAMILIA E IGUALDAD DE GÉNERO'],0,['class'=>'form-control'])  !!}</td>
                    <th>COMITE</th>

                    <th>
                    <td></td>

                </tr>

                <tr>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN RÓBINSON</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN SUCRE</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN RIBAS</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN CULTURA</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN BARRIO ADENTRO</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>GRAN MISIÓN SABER Y TRABAJO</th>

                </tr>

                <tr>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN JOSÉ GREGORIO HERNÁNDEZ</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN MILAGRO</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN NEGRA HIPÓLITA</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN JOVENES DE LA PATRIA</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN JOSÉ GREGORIO HERNÁNDEZ</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN MILAGRO</th>

                </tr>
                <tr>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN ÁRBOL</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN CHE GUEVARA</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN ALIMENTACIÓN</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>GRAN MISIÓN A TODA VIDA VENEZUELA</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>GRAN MISIÓN AGROVENEZUELA</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN SONRISA</th>

                </tr>
                <tr>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN GUAICAIPURO</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN CIENCIA</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN PIAR</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN IDENTIDAD</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>MISIÓN REVOLUCIÓN ENERGÉTICA</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>GRAN MISIÓN VIVIENDA</th>

                </tr>
                <tr>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>GRAN MISIÓN AMOR MAYOR</th>
                    <td> {!! Form::checkbox('tipo_vivienda','casa')  !!}</td>
                    <th>GRAN MISION HOGARES DE LA PATRIA</th>

                </tr>

                <tr class="info">
                    <th class="text-center" colspan="12">DONDE UBICA LA REALIDAD SOCIOECONOMICA DEL GRUPO FAMILIAR</th>


                </tr>
                <tr>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>VIVIENDA EN OPTIMAS CONDICIONES SANITARIAS EN AMBIENTES DE GRAN LUJO</th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>VIVIENDA EN OPTIMAS CONDICIONES SANITARIAS EN AMBIENTES CON LUJO SIN EXCESO Y SUFICIENTES
                    </th>


                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>VIVIENDAS CON BUENAS CONDICIONES SANITARIAS EN ESPACIOS REDUCIDOS O NO, PERO SIEMPRE MENORES QUE
                        EN LAS VIVIENDAS 1 Y 2
                    </th>
                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>VIVIENDAS CON AMBIENTES ESPACIOSOS O REDUCIDOS Y/O CON DEFICIENCIAS EN ALGUNAS CONDICIONES
                        SANITARIAS
                    </th>


                    <td> {!! Form::radio('tipo_vivienda','casa')  !!}</td>
                    <th>RANCHO O VIVIENDA CON CONDICIONES SANITARIAS MARCADAMENTE INADECUADAS Y REFUGIOS</th>

                </tr>


            </table>


        </div>
    </div>


    <div class="panel panel-primary">
        <div class=" panel-heading">V.PARTICIPACIÓN POLÍTICA Y SOCIO-COMUNITARIA:</div>
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

                <div  style="display:none"  class="misiones col-xs-3">

                    {!! Form::select('misiones',$misiones,1,['class'=>'form-control muestra_misiones ']); !!}


                </div>


                <div  style="display:none"  class="misiones col-xs-3">
                    {!! Form::label('si','¿Pertenece a un comite?')    !!} <br>

                    {!! Form::radio('comite','Si')    !!}
                    {!! Form::label('si','Si')    !!}
                    {!! Form::radio('comite','No')    !!}
                    {!! Form::label('si','No')    !!}
                </div>


                <div style="display:none" class="comites col-xs-3">
                    {!! Form::select('comites',$comites,1,['class'=>'form-control']); !!}
                </div>


            </div>


        </div>


    </div>


</div>








