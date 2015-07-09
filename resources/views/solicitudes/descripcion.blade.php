<div id="profile" role="tabpanel" class=" tab-pane">


    <div class="panel panel-primary">
        <div class="panel-heading">DESCRIPCION DEL CASO</div>
        <div class="panel-body">
            <div class="row">

                <div class="col-xs-12 text-center">
                    <label for="comment">Breve descripcion del caso:</label>
                    <textarea class="form-control" rows="3" id="comment"></textarea>
                </div>


            </div>
            <br>

            <div class="row text-center">

                <div class="col-xs-12">
                    <label for="comment">Observaciones de la solicitud:</label>
                    <textarea class="form-control" rows="3" id="comment"></textarea>
                </div>


            </div>

            <br>

            <div class="row">
                <div class=" col-xs-3">
                    <label for="email">Monto Solicitado:</label>

                    <input type="text" placeholder="Bs." class="form-control">
                </div>

                <div class=" col-xs-3">
                    {!!  Form::label('Recepcion');    !!}
                    {!!  Form::select('recepcion',$recepcion,"",['class'=>'form-control']);    !!}
                </div>

            </div>

        </div>
    </div>


    <div role="tabpanel" class="panel panel-primary">
        <div class="panel-heading">INFORME MEDICO ORIGINAL:</div>
        <div class="panel-body">


            <div class=" col-xs-3">
                {!!  Form::label('Centro de salud');    !!}
                {!!  Form::select('recepcion',$recepcion,"",['class'=>'form-control']);    !!}
            </div>


            <div class=" col-xs-3">
                {!!  Form::label('Medico tratante');    !!}
                {!!  Form::text('medico_tratante',null,['class'=>'form-control']);    !!}
            </div>


            <div class=" col-xs-3">
                {!!  Form::label('Resumen de informe medico');    !!}
                <textarea name="resumen_infome_medico" class="form-control" rows="3" id="comment"></textarea>


            </div>


        </div>
    </div>


    <div role="tabpanel" class="panel panel-primary">
        <div class="panel-heading">PRESUPUESTO ORIGINAL:</div>
        <div class="panel-body">

            <div class=" col-xs-3">
                {!!  Form::label('Centro de salud');    !!}
                {!!  Form::select('recepcion',$recepcion,"",['class'=>'form-control']);    !!}
            </div>


        </div>
    </div>

    <div role="tabpanel" class="panel panel-primary">
        <div class="panel-heading">ANEXOS</div>
        <div class="panel-body">

            <div class="row">

                <div class=" col-xs-3">
                    {!! Form::label('Copia','Copia de la cedula:')   !!}
                    {!! Form::file('cedula',['class'=>'filestyle',"data-buttonText"=>"Buscar"])  !!}
                </div>
                <div class=" col-xs-3">
                    {!! Form::label('Copia','Carta de Solicitud:')   !!}
                    {!! Form::file('cartaSol',['class'=>'filestyle',"data-buttonText"=>"Buscar"])  !!}
                </div>
                <div class=" col-xs-3">
                    {!! Form::label('Copia','Certificado de discapacidad:')   !!}
                    {!! Form::file('cerDis',['class'=>'filestyle',"data-buttonText"=>"Buscar"])  !!}
                </div>
                <div class="col-xs-3">
                    {!! Form::label('partida','Partida de Nacimiento')   !!}
                    {!! Form::file('parNac',['class'=>'filestyle',"data-buttonText"=>"Buscar"])  !!}
                </div>

            </div>
            <br>

            <div class="row">

                <div class=" col-xs-3">

                    {!! Form::label('Presupuesto','Infome Medico:')   !!}
                    {!! Form::file('infMed',['class'=>'filestyle',"data-buttonText"=>"Buscar"])  !!}

                </div>
                <div class=" col-xs-3">

                    {!! Form::label('Presupuesto','Presupuesto Original:')   !!}
                    {!! Form::file('presupuesto',['class'=>'filestyle',"data-buttonText"=>"Buscar"])  !!}

                </div>
            </div>


        </div>
    </div>


</div>







