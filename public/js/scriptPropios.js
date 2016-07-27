/**
 * Created by robert on 29/02/16.
 */

$(document).ready(function () {

    $('#editForm').parsley();
    $('#solicitud').parsley();
    $('#aprobar').parsley();
    $('#verificar').parsley();


    //Verificar la solicitud

    //alert(APP_URL);

    $('.Esalud').click(function () {

        $.get(APP_URL + "/establecimientoSalud",
            // $.get("{{ url('establecimientoSalud')}}",
            {option: $(this).val()},
            function (data) {
                $('.Csalud').empty();
                $.each(data, function (key, element) {
                    $('.Csalud').append("<option value='" + key + "'>" + element + "</option>");

                });
            });
    });


    $('.aprobar').change(function () {

        var apro = $(this).val();

        if (apro == 4) {

            $('.monto_sugerido').prop('readonly', true);
            $('.monto_sugerido').val('N/A');
            $('.sugerencia').prop('disabled', true);
            $('.sugerencia').append("<option selected='selected' value='NULL' >N/A</option>");

        } else {

            $('.monto_sugerido').prop('readonly', false);
            $('.monto_sugerido').val('');
            $('.sugerencia').removeAttr('disabled')
            $('option:selected', '.sugerencia').remove();


        }


    });


    $('.sugerencia').change(function () {
        var gdc = $(this).val();

        if (gdc == 1 || gdc == 3 || gdc == 4) {
            $('.monto_sugerido').prop('readonly', true);
            $('.monto_sugerido').val('N/A');
        } else {

            $('.monto_sugerido').prop('readonly', false);
            $('.monto_sugerido').val('');
        }


    });


    //filtro
    $('#menorEdad').click(function () {
        if ($(this).is(":checked")) {
            $('#cedula').val('');
            $('#cedula').attr("disabled", true);
            $('#cedula').removeAttr("required");

            $('#nac').val('');
            $('#nac').attr("disabled", true);
            $('#nac').removeAttr("required");

        } else {
            $('#cedula').removeAttr("disabled");
            $('#cedula').attr("required", true);
            $('#nac').removeAttr("disabled");
            $('#nac').attr("required", true);


        }


    });


//si es menor de edad sin cedula habilitamos los  campos de nombre, apellido y fecha nacimiento.
    if ($('#menor').val() == '') {
        $("[name ='nombre_be']").removeAttr("readonly");
        $("[name ='apellido_be']").removeAttr("readonly");
        $("[name='naci_be']").removeAttr('readonly');
        $("[name='naci_be']").attr('required', true);
        $("[name='fecha_nacimiento_be']").removeAttr('readonly');
        $("[name='fecha_nacimiento_be']").val('');
        $("[name='fecha_nacimiento_be']").addClass('datepicker');
    }

    $('.datepicker').datepicker({
        format: 'dd-mm-yyyy',
        language: 'es'
    });


    $('.casaComercial').change(function () {
        var gdc = $(this).val();

        if (gdc == 38) {
            $('#montoSolicitado').prop('readonly', true);
            $('#montoSolicitado').val('N/A');
        } else {

            $('#montoSolicitado').prop('readonly', false);
            $('#montoSolicitado').val('');
        }


    });


    /*  $("select.parentesco1 option[value='12']").remove();
     $("select.parentesco2 option[value='12']").remove();
     $("select.parentesco3 option[value='12']").remove();
     $("select.parentesco4 option[value='12']").remove();
     $("select.parentesco5 option[value='12']").remove();
     */

    $('.parentesco0').change(function () {
        var val = $(this).val();
        if (val == 4) {
            $("select.parentesco1 option[value='4']").remove();
            $("select.parentesco2 option[value='4']").remove();
            $("select.parentesco3 option[value='4']").remove();
            $("select.parentesco4 option[value='4']").remove();
            $("select.parentesco5 option[value='4']").remove();
        }

    });
    $('.parentesco1').change(function () {
        var val = $(this).val();

        if (val == 4) {

            $("select.parentesco0 option[value='4']").remove();
            $("select.parentesco2 option[value='4']").remove();
            $("select.parentesco3 option[value='4']").remove();
            $("select.parentesco4 option[value='4']").remove();
            $("select.parentesco5 option[value='4']").remove();

        }


    });
    $('.parentesco2').change(function () {

        var val = $(this).val();

        if (val == 4) {


            $("select.parentesco0 option[value='4']").remove();
            $("select.parentesco1 option[value='4']").remove();
            $("select.parentesco3 option[value='4']").remove();
            $("select.parentesco4 option[value='4']").remove();
            $("select.parentesco5 option[value='4']").remove();

        }

    });
    $('.parentesco3').change(function () {

        var val = $(this).val();

        if (val == 4) {
            $("select.parentesco0 option[value='4']").remove();
            $("select.parentesco1 option[value='4']").remove();
            $("select.parentesco2 option[value='4']").remove();
            $("select.parentesco4 option[value='4']").remove();
            $("select.parentesco5 option[value='4']").remove();
        }

    });
    $('.parentesco4').change(function () {

        var val = $(this).val();

        if (val == 4) {
            $("select.parentesco0 option[value='4']").remove();
            $("select.parentesco1 option[value='4']").remove();
            $("select.parentesco2 option[value='4']").remove();
            $("select.parentesco3 option[value='4']").remove();
            $("select.parentesco5 option[value='4']").remove();

        }

    });
    $('.parentesco5').change(function () {

        var val = $(this).val();

        if (val == 4) {
            $("select.parentesco0 option[value='4']").remove();
            $("select.parentesco1 option[value='4']").remove();
            $("select.parentesco2 option[value='4']").remove();
            $("select.parentesco3 option[value='4']").remove();
            $("select.parentesco4 option[value='4']").remove();
        }

    });


    $('.coordinacion').click(function () {

            var tipo = $('.coordinacion option:selected').val();

            if (tipo == 1) {
                $(".discapacidad").show("slow");
                $('.quitar').removeAttr("onlyread");
            } else {
                $('.discapacidad').hide("slow");
                $('.quitar').attr("onlyread", true);

            }

        }
    );


    $('#dpMonths').datepicker();


    $('#action-button').click(function () {
        $.ajax({
            url: "{{ url('consulta') }}",
            data: {
                format: 'json'
            },
            error: function () {
                $('#info').html('<p>An error has occurred</p>');
            },
            dataType: 'jsonp',
            success: function (data) {
                var $title = $('<h1>').text(data.talks[0].talk_title);
                var $description = $('<p>').text(data.talks[0].talk_description);
                $('#info')
                    .append($title)
                    .append($description);
            },
            type: 'GET'
        });
    });


    /*        $('#cambia').on('change', function () {
     var valor = $(this).val();

     if (valor != '1' && valor != '2' && valor != '') {
     $("#muestra").show()
     }
     else {
     $("#muestra").hide()
     }
     });*/


    $('.sub_secretaria').change(function () {
        $('.tipo_solicitud').empty();
        $('.tipo_solicitud').append("<option value='' >Debe Seleccionar un Tipo de solicitud</option>");
        $.get("{{ url('coordinaciones')}}",
            {option: $(this).val()},
            function (data) {
                $('.coordinacion').empty();
                $.each(data, function (key, element) {
                    $('.coordinacion').append("<option value='" + key + "'>" + element + "</option>");

                });
            });
    });


    $('.coordinacion').click(function () {
        $.get("{{ url('tipo_solicitud')}}",
            {option: $(this).val()},
            function (data) {
                $('.tipo_solicitud').empty();
                $.each(data, function (key, element) {
                    $('.tipo_solicitud').append("<option value='" + key + "'>" + element + "</option>");

                });
            });
    });


    $('.estado').change(function () {
        $.get("{{ url('municipios')}}",
            {option: $(this).val()},
            function (data) {
                $('.municipio').empty();
                $.each(data, function (key, element) {
                    $('.municipio').append("<option value='" + key + "'>" + element + "</option>");

                });
            });
    });


    //municipios
    $('.municipio').click(function () {
        $.get("{{ url('parroquias')}}",
            {option: $(this).val()},
            function (data) {
                $('.parroquias').empty();
                $.each(data, function (key, element) {
                    $('.parroquias').append("<option value='" + key + "'>" + element + "</option>");
                });
            });
    });


    $('.estado').change(function () {
        $('.parroquias').empty();
        $('.parroquias').append("<option value='' >Debe Seleccionar una Parroquia</option>");
    });
    $('.estado2').change(function () {
        $.get("{{ url('municipios')}}",
            {option: $(this).val()},
            function (data) {
                $('.municipio2').empty();
                $.each(data, function (key, element) {
                    $('.municipio2').append("<option value='" + key + "'>" + element + "</option>");

                });
            });
    });


    //municipios
    $('.municipio2').click(function () {
        $.get("{{ url('parroquias')}}",
            {option: $(this).val()},
            function (data) {
                $('.parroquias2').empty();
                $.each(data, function (key, element) {
                    $('.parroquias2').append("<option value='" + key + "'>" + element + "</option>");
                });
            });
    });


    $('.estado2').change(function () {
        $('.parroquias2').empty();
        $('.parroquias2').append("<option value='' >Debe Seleccionar una Parroquia</option>");
    });


    //============================DUPLICA CAMPOS=============================================

    var max_fields = 10; //maximum input boxes allowed
    var wrapper = $(".input_fields_wrap"); //Fields wrapper
    var add_button = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function (e) { //on add input button click
        e.preventDefault();


        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            // $(wrapper).append('<div><input type="text" name="mytext['+ x +'  ]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
            // $(wrapper).append('<tr><td>{!! Form::text("nombre_Apellidonombre",null,["class"=>"mayusculas form-control"]);  !!}</td><td> {!! Form::text("edad[edad]",null,["class"=>"form-control"]);  !!}</td><td>{!! Form::select('parentesco[parentesco]',[''=>'SELECCIONE...','CONYUGE','HIJO(A)','NIETO(A)','MADRE','PADRE','SUEGRO','HERMANO(A)','SOBRINO(A)','PRIMO(A)','YERNO(A)','NUERO(A)'],'',['class'=>'form-control']);!!}</td><td>{!! Form::select('ocupacion[ocupacion]',$ocupacion,'',[ 'id'=>'cambia', 'class'=>'form-control']);  !!}</td><td>{!! Form::select("nivel_instruccion[nivelI]",[''=>'SELECCIONE','UNIVERSITARIO','TECNICO','BACHILLERATO','PRIMARIA COMPLETA','PRIMARIA INCOMPLETA'],'',[ "id"=>'cambia', "class"=>"form-control"]);  !!}</td><td> {!! Form::select('ingresos[ingresos]',[''=>'SELECCIONE...','FORTUNA HEREDADADA O ADQUIRIDA','GANANCIAS O BENEFICIOS, HONORARIOS PROFESIONALES','SUELDO MENSUAL','SALARIO SEMANAL , POR DIA, ENTRADA A DESTAJO','DONACIONES DE ORIGEN PUBLICO O PRIVADO, PENSIONES, JUBILACIONES'],'',['class'=>'form-control']);  !!}</td><td>{!! Form::text("cantidad[cantidad]",null,["class"=>"suma form-control"]);  !!}</td><td><a href="#" class="remove_field">Remover</a></td></tr>'); //add input box
        }
    });

    $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
        e.preventDefault();
        //$(this).parent('tr').remove();
        $(this).closest('tr').remove();

        x--;
    })

// click checkbox activo
    $('#activo_alimentacion').click(function () {

        if ($(this).is(":checked")) {
            $('#alimentacion').removeAttr("onlyread");
        } else {
            $('#alimentacion').attr("onlyread", true);
            $('#alimentacion').val('');
        }


    });
    $('#activo_spublicos').click(function () {

        if ($(this).is(":checked")) {
            $('#servicios').removeAttr("onlyread");
        } else {
            $('#servicios').attr("onlyread", true);
            $('#servicios').val('');
        }


    });
    $('#activo_telefono').click(function () {

        if ($(this).is(":checked")) {
            $('#telefono').removeAttr("onlyread");
        } else {
            $('#telefono').attr("onlyread", true);
            $('#telefono').val('');
        }


    });
    $('#activo_gas').click(function () {
        if ($(this).is(":checked")) {
            $('#gas').removeAttr("onlyread");
        } else {
            $('#gas').attr("onlyread", true);
            $('#gas').val('');
        }


    });
    $('#activo_agua').click(function () {
        if ($(this).is(":checked")) {
            $('#agua').removeAttr("onlyread");
        } else {
            $('#agua').attr("onlyread", true);
            $('#agua').val('');
        }


    });

    $('#activo_salud').click(function () {
        if ($(this).is(":checked")) {
            $('#salud').removeAttr("onlyread");
        } else {
            $('#salud').attr("onlyread", true);
            $('#salud').val('');
        }


    });


    $("input[name=polisi]").change(function () {
        if ($(this).val() == "Si") {
            $(".misiones").slideDown()
        }
        else {
            $(".misiones").slideUp();
            $(".comites").slideUp();
        }
    });


    $("input[name=comite]").change(function () {
        if ($(this).val() == "Si") {
            $(".comites").slideDown()
        }
        else {
            $(".comites").slideUp();
        }
    });

    //SUMA INGRESOS
    var $form = $('#ingresos'),
        $summands = $form.find('.income_count'),
        $sumDisplay = $('#income_sum');

    $form.delegate('.income_count', 'change', function () {
        var sum = 0;
        $summands.each(function () {
            var value = Number($(this).val());
            if (!isNaN(value)) sum += value;
        });

        $sumDisplay.val(sum + ' Bs.');
    });


    //SUMA EGRESOS
    var $form2 = $('#egresos'),
        $summands2 = $form2.find('.income_count2'),
        $sumDisplay2 = $('#income_sum2');

    $form2.delegate('.income_count2', 'change', function () {
        var sum = 0;
        $summands2.each(function () {
            var value = Number($(this).val());
            if (!isNaN(value)) sum += value;
        });

        $sumDisplay2.val(sum + ' Bs.');
    });


    //SUMAR CAMPOS DE INGRESOS Y EGRESOS FAMILIAR


//            $(document).on("keydown keyup", ".suma", function () {
//                var sum = 0;
//                $(".suma").each(function () {
//                    sum += +$(this).val();
//                });
//                $(".total").val(sum);
//            });


    /*   function calculateSum() {
     var sum = 0;
     //iterate through each textboxes and add the values

     $(".suma").each(function() {
     //add only if the value is number
     if (!isNaN(this.value) && this.value.length != 0) {
     sum += parseFloat(this.value);
     $(this).css("background-color", "#FEFFB0");
     }
     else if (this.value.length != 0){
     $(this).css("background-color", "red");
     }
     });

     $("input#sum1").val(sum.toFixed(2));
     }


     $(".suma").on("keydown keyup", function() {
     calculateSum();
     });*/


//MAYUSCULAS
    $('.form-control').keyup(function () {
        $(this).val($(this).val().toUpperCase());
    });


    $(".numeros").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                // Allow: Ctrl+A, Command+A
            (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) ||
                // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });


});