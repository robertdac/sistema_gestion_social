@extends('app')
@section('content')

    <h2 class="text-center">FICHA TECNICA </h2>




    <div class="pull-left">

        {!! link_to('filtro', 'NUEVA SOLICITUD', ['class' => 'btn btn-primary']) !!}

    </div>


    <div STYLE="margin-top: 70px" class="panel panel-primary">
        <div class=" text-center panel-heading">DATOS DEL BENEFICIARIO</div>
        <div class="panel-body">

            <div class="row">
                <div class="col-xs-3">
                    <label for="email">Nacionalidad:</label>
                    {!! Form::text('naci_be',$soli->beneficiario->nacionalidad,['class'=>'form-control','readonly'=>'true']) !!}

                </div>
                <div class="col-xs-3">

                    {!! Form::label('cedula','Cedula de identidad:');  !!}
                    {!! Form::text('cedula_be',$soli->beneficiario->cedula,['class'=>"form-control","readonly"=>"true"]) !!}

                </div>


                <div class="col-xs-3">
                    {!! Form::label('nombre','Nombre:');   !!}
                    {!! Form::text('nombre_be',$soli->beneficiario->nombres,['class'=>'form-control','disabled'=>1 ]) !!}

                </div>

                <div class="col-xs-3 ">

                    {!! Form::label('apellido','Apellido')   !!}
                    {!! Form::text('apellido_be',$soli->beneficiario->apellidos,['class'=>'form-control','disabled'=>1 ])  !!}

                </div>

            </div>
            <br>

            <div class="row">

                <div class="col-xs-3 ">
                    {!! Form::label('Edo.Civil','Edo.Civil')   !!}
                    {!! Form::text('Edocivil_be',$soli->beneficiario->edoCivil->descripcion,['class'=>'form-control','disabled'=>1])   !!}

                </div>

                <div class="col-xs-3 ">
                    @if($soli->beneficiario == 'M')
                        {!! Form::label('masculimo','Masculino')   !!}
                        {!! Form::radio('sexo_be','M',true)  !!}

                    @else
                        {!! Form::label('femenino','Femenino')   !!}
                        {!! Form::radio('sexo_be','F',true)  !!}
                    @endif
                </div>


                <div class="col-xs-3 ">
                    {!! Form::label('fecha','Fecha de Nacimiento:')    !!}
                    {!! Form::text('fecha_nacimiento_be',Carbon\Carbon::parse(str_replace('"','',$soli->beneficiario->fecha_nacimiento))->format('d-m-Y'),['class'=>'form-control','disabled'=>1])    !!}
                </div>
                <div class="col-xs-3 ">
                    {!! Form::label('Estatus','Estatus:')    !!}
                    {!! Form::text('estatus',$soli->estatus->descripcion,['class'=>'form-control','disabled'=>1])    !!}
                </div>

            </div>
            <br>

            <div class="row">

                <div class="col-xs-3 ">
                    {!! Form::label('Ocupacion','Ocupacion:')   !!}
                    {!! Form::text('ocupacion_be',$soli->beneficiario->ocupacion->nombre,['class'=>'form-control','disabled'=>1]);  !!}
                </div>


                <div class="col-xs-3 ">
                    {!! Form::label('Estado','Estado:')   !!}
                    {!! Form::text('estado_be',$soli->beneficiario->estado->nombre,['class'=>'form-control', 'disabled'=>1]);  !!}
                </div>
                <div class="col-xs-3">
                    {!! Form::label('Municipio','Municipio:')   !!}
                    {!! Form::text('estado_be',$soli->beneficiario->municipio->nombre,['class'=>'form-control', 'disabled'=>1]);  !!}
                </div>

                <div class="col-xs-3 ">
                    {!! Form::label('Parroquia','Parroquias:')   !!}
                    {!! Form::text('estado_be',$soli->beneficiario->parroquia->nombre,['class'=>'form-control','disabled'=>1]);  !!}

                </div>


            </div>

            <br>
            @if(count($soli->beneficiario->beneficiario_discapacidad) > 0)
                <div class="row discapacidad">

                    <div class="col-xs-3">

                        {!! Form::label('Tipo','Presenta alguna discapacidad:'); !!}
                        {!! Form::text('discapacidad[algunaDis]',$soli->beneficiario->beneficiario_discapacidad[0]->discapacidad->nombre,['class'=>'form-control quitar','disabled'=>true]) !!}

                    </div>


                    <div class="col-xs-3 grado">

                        {!! Form::label('Tipo','Grado:'); !!}
                        {!! Form::text('discapacidad[grado]',$soli->beneficiario->beneficiario_discapacidad[0]->GradoDiscapacidad->nombre,['class'=>'form-control quitar','disabled'=>true]) !!}

                    </div>

                    <div class="col-xs-3 grado">
                        {!! Form::label('Tipo','Necesita ayuda tecnica:'); !!}
                        {!! Form::select('discapacidad[ayudaTecnica]',[''=>'SELECCIONE..',1=>'SI',0=>'NO'],$soli->beneficiario->beneficiario_discapacidad[0]->ayuda_tecnica,['class'=>'form-control quitar','disabled'=>true]) !!}

                    </div>
                    <div class="col-xs-3 grado">
                        {!! Form::label('Tipo','N° de certificado:'); !!}
                        {!! Form::text('discapacidad[certificado]',$soli->beneficiario->beneficiario_discapacidad[0]->certificado_discp,['class'=>'form-control quitar','disabled'=>true]) !!}

                    </div>

                </div>
                <br>
            @endif
            <div class="row">

                <div class="col-xs-6">
                    <label for="comment">Sector:</label>
                                    <textarea name="sector_be" id='municipio' class="mayusculas form-control" rows="3"
                                              id="comment"> {{ $soli->beneficiario->direccion }} </textarea>
                </div>

                <div class="col-xs-3 ">

                    {!! Form::label('Telefono 1:')  !!}
                    {!! Form::text('celular_be',$soli->beneficiario->telefonos[0]->numero,['class'=>'form-control','disabled'=>1]);  !!}

                </div>
                <div class="col-xs-3 ">

                    {!! Form::label('Telefono 2:')  !!}
                    {!! Form::text('telefono_be',$soli->beneficiario->telefonos[1]->numero,['class'=>'form-control','disabled'=>1]);  !!}

                </div>


            </div>

        </div>
    </div>

@endsection























