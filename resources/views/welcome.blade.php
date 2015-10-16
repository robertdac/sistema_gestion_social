@extends('app')
@section('content')

    <div class="container">
        <div class="content">



            {!! Form::text('cedula1',null,['id'=>'valor','onblur'=>"getData($('#valor').val())"])   !!}
            <br>
            {!! Form::text('cedula',null,['class'=>'aqui'])   !!}


            <button id="action-button">Click me to load info!</button>
            <div id="info"></div>


        </div>
    </div>
    </body>


    <script>

        [{  "strnacionalidad": "V",
            "intcedula": 1,
            "strnombre_primer": "ISAIAS",
            "strnombre_segundo": "",
            "strapellido_primer": "MEDINA",
            "strapellido_segundo": "ANGARITA",
            "dtmnacimiento": "1897-07-06 00:00:00",
            "strgenero": "F",
            "clvestado_civil": 0,
            "strestado_civil": null
        }]


        //$(document).ready(function () {

            function getData(id) {

                        $.ajax({
                        url: "{{ url('consulta') }}",
                        data: "id=" + id
                        ,
                        error: function () {
                            $('#info').html('<p>An error has occurred</p>');
                        },
                        dataType: 'json',
                        success: function (data) {
                            $("[name=cedula]").val(data[0].strnombre_primer);

                        },
                        type: 'GET'
                    });
               // });


            }
       // });
    </script>





@endsection



