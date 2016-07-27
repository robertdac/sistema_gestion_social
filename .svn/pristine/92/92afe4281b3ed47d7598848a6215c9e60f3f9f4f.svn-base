@extends('app')
@section('content')


        <h2>SubSecretaría</h2>
        <p>The .table-bordered class adds borders to a table:</p>

        <div style="float:right; margin-bottom: 15px; " class="col-lg-0">
            <div class="input-group">
        <input type="text" class="form-control">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Buscar</button>
      </span>
            </div>
        </div>


        <table  class="table table-bordered">
            <thead>
            <tr>
                <th style=" text-align: center">Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Accion</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td >John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td style=" width: 15px" >
                    <span style="margin-right: 10px; " class="glyphicon glyphicon-eye-open"></span>
                    <span class="glyphicon glyphicon-pencil"></span></td>

            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
             <td> <span class="glyphicon glyphicon-eye-open"></span>
              <span class="glyphicon glyphicon-pencil"></span></td>

            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                 <td  >  <span class="glyphicon glyphicon-eye-open"></span>
                  <span class="glyphicon glyphicon-pencil"></span></td>

            </tr>




            </tbody>
        </table>
<div style=" text-align: center">
        <ul class="pagination">
            <li class="disabled">
                <a href="#">«</a>
            </li>
            <li class="active">
                <a href="#">1</a>
            </li>
            <li>
                <a href="#">2</a>
            </li>
            <li>
                <a href="#">3</a>
            </li>
            <li>
                <a href="#">4</a>
            </li>
            <li>
                <a href="#">5</a>
            </li>
            <li>
                <a href="#">»</a>
            </li>
        </ul>

</div>



        <td>{!! Form::text("nombre_Apellido[]",$datos[2].' '.$datos[4],["class"=>"form-control"]);  !!}</td><td> {!! Form::text("edad[]",date('Y-m-d') - str_replace('"','',$datos[6]),["class"=>"form-control"]);  !!}</td><td>{!! Form::text("parentesco[]",'BENEFICIARIO',["class"=>"form-control"]);  !!}</td><td>{!! Form::select('ocupacion',$ocupacion,'',[ 'id'=>'cambia', 'class'=>'form-control']);  !!}</td><td>{!! Form::select("nivel_instruccion[]",[''=>'SELECCIONE','UNIVERSITARIO','TECNICO','BACHILLERATO','PRIMARIA COMPLETA','PRIMARIA INCOMPLETA'],'',[ "id"=>'cambia', "class"=>"form-control"]);  !!}</td><td> {!! Form::select('ingresos[]',[''=>'SELECCIONE...','FORTUNA HEREDADADA O ADQUIRIDA','GANANCIAS O BENEFICIOS, HONORARIOS PROFESIONALES','SUELDO MENSUAL','SALARIO SEMANAL , POR DIA, ENTRADA A DESTAJO','DONACIONES DE ORIGEN PUBLICO O PRIVADO, PENSIONES, JUBILACIONES'],'',['class'=>'form-control']);  !!}</td><td>{!! Form::text("cantidad[]",null,["class"=>"form-control"]);  !!}</td>










@endsection