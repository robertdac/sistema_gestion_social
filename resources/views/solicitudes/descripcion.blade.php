<div id="profile" role="tabpanel" class=" tab-pane">


    <div class="panel panel-primary">
        <div class=" text-center panel-heading">DESCRIPCION DEL CASO</div>
        <div class="panel-body">
            <div class="row">

                <div class="col-xs-12 text-center">
                    <label for="comment">Breve descripcion del caso:</label>
                    <textarea required="" name="descripcion_caso" class="form-control" rows="3" id="comment"></textarea>
                </div>


            </div>
            <br>

            <div class="row text-center">

                <div class="col-xs-12">
                    <label for="comment">Observaciones de la solicitud:</label>
                    <textarea required="" name="observacion_caso" class="form-control" rows="3" id="comment"></textarea>
                </div>


            </div>

            <br>

            <div class="row">

                <div class=" col-xs-3">
                    {!!  Form::label('Recepcion');    !!}
                    {!!  Form::select('recepcion',$recepcion,"",['class'=>'form-control','required'=>'']);    !!}
                </div>

            </div>

        </div>
    </div>

    <div role="tabpanel" class="panel panel-primary">
        <div class=" text-center panel-heading">INFORME MEDICO ORIGINAL:</div>
        <div class="panel-body">


            <div class=" col-xs-3">
                {!!  Form::label('tipo de establecimiento de salud:');    !!}
                {!! Form::select('centro_salud',$establecimientoSalud,0,['class'=>'form-control Esalud','data-live-search'=>"false"]); !!}

            </div>

            <div class=" col-xs-3">
                {!!  Form::label('Centro de salud');    !!}
                {!! Form::select('centro_salud',['SELECCIONE'],0,['class'=>'form-control Csalud']); !!}

            </div>


            <div class=" col-xs-3">
                {!!  Form::label('Medico tratante');    !!}
                {!!  Form::text('medico_tratante',null,['class'=>'form-control','required'=>'']);    !!}
            </div>


            <div class=" col-xs-3">
                {!!  Form::label('Resumen de informe medico');    !!}
                <textarea required="" name="resumen_infome_medico" class="form-control" rows="3"
                          id="comment"></textarea>

            </div>


        </div>
    </div>


    <div role="tabpanel" class="panel panel-primary">
        <div class=" text-center panel-heading">PRESUPUESTO ORIGINAL:</div>
        <div class="panel-body">

            <div class=" col-xs-3">
                {!!  Form::label('Casa comercial');    !!}
                {!! Form::select('casa_comercial',$casa_comercial,0,['class'=>'casaComercial selectpicker form-control','data-live-search'=>"false"]); !!}
            </div>

            <div class=" col-xs-3">
                {!! Form::label('Monto Solicitado') !!}
                {!! Form::text('monto_solicitado',null,['id'=>'montoSolicitado', 'class'=>'numeros form-control','placeholder'=>'BS.','required'=>''])   !!}
            </div>

        </div>
    </div>

    <div role="tabpanel" class="panel panel-primary">
        <div class="text-center panel-heading">ANEXOS</div>
        <div class="panel-body">

            <div class="row">

                @foreach($anexos as $inde => $nom)
                    @if($inde <> 5 && $inde <> 6 )
                        <div class=" col-xs-3">
                            {!! Form::label('nombre', $nom.':')   !!}
                            {!! Form::file("file[$inde]",['class'=>'filestyle',"data-buttonText"=>"Buscar"])  !!}
                        </div>
                    @endif


                @endforeach

            </div>
            <br>

            <div class="row">


                @foreach($anexos as $inde => $nom)

                    @if($inde <> 1 && $inde <> 2 && $inde <> 3 && $inde <> 4 )
                        <div class=" col-xs-3">
                            {!! Form::label('nombre', $nom.':')   !!}
                            {!! Form::file("file[$inde]",['class'=>'filestyle',"data-buttonText"=>"Buscar"])  !!}
                        </div>
                    @endif


                @endforeach


            </div>


        </div>
    </div>


</div>







