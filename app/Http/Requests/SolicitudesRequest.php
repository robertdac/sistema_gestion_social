<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SolicitudesRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        return [
            // 'egreso[ALIMENTACION]' => 'required',
            'sub_secretaria' => 'required',
            'coordinacion' => 'required',
            'tipo_solicitud' => 'required',
            'celular_be' => 'required',
            'nombre_be' => 'required',
            'apellido_be' => 'required',
            'Edocivil_be' => 'required',
            'Edocivil_be' => 'required',
            'sexo_be' => 'required',
            'fecha_nacimiento_be' => 'required',
            'fecha_nacimiento_be' => 'required',
            'sector_be' => 'required',
            'celular_be' => 'required',
            'telefono_be' => 'required',
            'descripcion_caso' => 'required',
            'observacion_caso' => 'required',
            'recepcion' => 'required',
            'medico_tratante' => 'required',
            'resumen_infome_medico' => 'required',
            'casa_comercial' => 'required',
            'monto_solicitado' => 'required',
            'jefe_familia' => 'required',
            'nombre_Apellido.0' => 'required',
            /*'nombre_Apellido.1' => 'required',
            'nombre_Apellido.2' => 'required',
            'nombre_Apellido.2' => 'required',
            'nombre_Apellido.3' => 'required',
            'nombre_Apellido.4' => 'required',
            'nombre_Apellido.5' => 'required',
            'edad.1' => 'required|numeric',
            'edad.2' => 'required|numeric',
            'edad.3' => 'required|numeric',
            'edad.4' => 'required|numeric',
            'edad.5' => 'required|numeric',
            'parentesco.1' => 'required',
            'parentesco.2' => 'required',
            'parentesco.3' => 'required',
            'parentesco.4' => 'required',
            'parentesco.5' => 'required',
            'ocupacion.0' => 'required',
            'ocupacion.1' => 'required',
            'ocupacion.2' => 'required',
            'ocupacion.3' => 'required',
            'ocupacion.4' => 'required',
            'ocupacion.5' => 'required',
            'nivel_instruccion.0' => 'required',
            'nivel_instruccion.1' => 'required',
            'nivel_instruccion.2' => 'required',
            'nivel_instruccion.3' => 'required',
            'nivel_instruccion.4' => 'required',
            'nivel_instruccion.5' => 'required',
            'ingresos.0' => ' required',
            'ingresos.1' => ' required',
            'ingresos.2' => ' required',
            'ingresos.3' => ' required',
            'ingresos.4' => ' required',
            'ingresos.5' => ' required',
            'cantidad.0' => ' required|numeric',
            'cantidad.1' => ' required|numeric',
            'cantidad.2' => ' required|numeric',
            'cantidad.3' => ' required|numeric',
            'cantidad.4' => ' required|numeric',
            'cantidad.5' => ' required|numeric',*/
            'socio_demofrafico.vivienda' => 'required',
            'socio_demofrafico.paredes' => 'required',
            'socio_demofrafico.pisos' => 'required',
            'socio_demofrafico.techos' => 'required',

//            'nombre_Apellido[0]' => 'required',
//            'edad[0]' => 'required|numeric',
//            'ocupacion[0]' => 'required',
//            'nivel_instruccion[0]' => 'required',
//            'ingresos[0]' => 'required',
//            'cantidad[0]' => 'required',
//            'nombre_Apellido[1]' => 'required',
//            'edad[1]' => 'required|numeric',
//            'parentesco[1]' => 'required',
//            'ocupacion[1]' => 'required',
//            'nivel_instruccion[1]' => 'required',
//            'ingresos[1]' => 'required',
//            'cantidad[1]' => 'required',


//            'nombre_Apellido[2]' => 'required',
//            'edad[2]' => 'required|numeric',
//            'parentesco[2]' => 'required',
//            'ocupacion[2]' => 'required',
//            'nivel_instruccion[2]' => 'required',
//            'ingresos[2]' => 'required',
//            'cantidad[2]' => 'required',
//
//
//            'nombre_Apellido[3]' => 'required',
//            'edad[3]' => 'required|numeric',
//            'parentesco[4]' => 'required',
//            'ocupacion[3]' => 'required',
//            'nivel_instruccion[3]' => 'required',
//            'ingresos[3]' => 'required',
//            'cantidad[3]' => 'required',
//
//            'nombre_Apellido[4]' => 'required',
//            'edad[4]' => 'required|numeric',
//            'parentesco[4]' => 'required',
//            'ocupacion[4]' => 'required',
//            'nivel_instruccion[4]' => 'required',
//            'ingresos[4]' => 'required',
//            'cantidad[4]' => 'required',
//
//            'nombre_Apellido[5]' => 'required',
//            'edad[5]' => 'required|numeric',
//            'parentesco[5]' => 'required',
//            'ocupacion[5]' => 'required',
//            'nivel_instruccion[5]' => 'required',
//            'ingresos[5]' => 'required',
//            'cantidad[5]' => 'required',
//
//            'socio_demofrafico[vivienda][]' => 'required',
//            'socio_demofrafico[paredes][]' => 'required',
//            'socio_demofrafico[pisos][]' => 'required',
//            'socio_demofrafico[techos][]' => 'required',
//            'socio_demofrafico[agua][]' => 'required',
//            'socio_demofrafico[gas][]' => 'required',
//            'socio_demofrafico[basura][]' => 'required',
//            'socio_demofrafico[aguas_servidas][]' => 'required',
//            'socio_demofrafico[servicio_comunidad][]' => 'required',
//            'socio_demofrafico[programa][]' => 'required',
//            'socio_demofrafico[misiones][]' => 'required',
            'preguntas' => 'required'


        ];
    }

}
