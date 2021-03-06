<div id="profile" role="tabpanel" class=" tab-pane">
    <div class="panel panel-primary">
        <div class=" text-center panel-heading">DESCRIPCION DEL CASO</div>
        <div class="panel-body">
            <div class="row">

                <div class="col-xs-12 text-center">
                    <label for="comment">Breve descripcion del caso:</label>
                    <textarea required="" name="descripcion_caso" class="form-control" rows="3" id="comment">{!! $solicitudes->descripcion  !!}
                    </textarea>
                </div>


            </div>
            <br>

            <div class="row text-center">

                <div class="col-xs-12">
                    <label for="comment">Observaciones de la solicitud:</label>
                    <textarea required="" name="observacion_caso" class="form-control" rows="3" id="comment">{!!  $solicitudes->observacion  !!}
                    </textarea>
                </div>


            </div>

            <br>

            <div class="row">

                <div class=" col-xs-3">
                    {!!  Form::label('Recepcion');    !!}
                    {!!  Form::select('recepcion',$recepcion,$solicitudes->id_trecepcion ,['required'=>'','class'=>'form-control']);    !!}
                </div>

            </div>

        </div>
    </div>


    <div role="tabpanel" class="panel panel-primary">
        <div class=" text-center panel-heading">INFORME MEDICO ORIGINAL:</div>
        <div class="panel-body">


            <div class=" col-xs-3">
                {!!  Form::label('Centro de salud');    !!}
                {!! Form::select('centro_salud',['SELECCIONE'],0,['class'=>'selectpicker form-control','data-live-search'=>"true"]); !!}

            </div>


            <div class=" col-xs-3">
                {!!  Form::label('Medico tratante');    !!}
                {!!  Form::text('medico_tratante',null,['required'=>'','class'=>'form-control']);    !!}
            </div>


            <div class=" col-xs-3">
                {!!  Form::label('Resumen de informe medico');    !!}
                <textarea  required="" name="resumen_infome_medico" class="form-control" rows="3" id="comment"></textarea>


            </div>


        </div>
    </div>


    <div role="tabpanel" class="panel panel-primary">
        <div class=" text-center panel-heading">PRESUPUESTO ORIGINAL:</div>
        <div class="panel-body">

            <div class=" col-xs-3">
                {!!  Form::label('Casa comercial');    !!}
                {!! Form::select('casa_comercial',$casa_comercial,0,['class'=>'selectpicker form-control','data-live-search'=>"true"]); !!}
            </div>

            <div class=" col-xs-3">
                {!! Form::label('Monto Solicitado') !!}
                {!! Form::text('monto_solicitado',$solicitudes->monto_solicitado,['required'=>'','class'=>'numeros form-control','placeholder'=>'BS.'])   !!}
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