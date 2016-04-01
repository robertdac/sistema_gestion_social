@extends('app')
@section('content')

    <div id="container" style="min-width: 300px; height: 400px; margin: 0 auto">




    </div>


    {!!  Form::select('años',['2012','2013'],0)   !!}

    <script type="text/javascript">


        $( document ).ready(function() {
            $('#demo-form').parsley();
        });

        $(function () {
            $('#container').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Casos Atendidos 2015'
                },
                subtitle: {
                    text: 'Source: <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>'
                },
                xAxis: {
                    type: 'category',
                    labels: {
                        rotation: -45,
                        style: {
                            fontSize: '13px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Population (millions)'
                    }
                },
                legend: {
                    enabled: false
                },
                tooltip: {
                    pointFormat: 'Population in 2008: <b>{point.y:.1f} millions</b>'
                },
                series: [{
                    name: 'Population',
                    data: [
                        ['Enero', 12.5],
                        ['Febrero', 16.1],
                        ['Marzo', 14.2],
                        ['Abril', 14.0],
                        ['Mayo', 123.7],
                        ['Junio', 12.1],
                        ['Julio', 11.8],
                        ['Agosto', 11.7],
                        ['Septiembre', 11.1],
                        ['Octubre', 11.1],
                        ['Noviembre', 10.5],
                        ['Diciembre', 10.4],

                    ],
                    dataLabels: {
                        enabled: true,
                        rotation: -90,
                        color: '#FFFFFF',
                        align: 'right',
                        format: '{point.y:.1f}', // one decimal
                        y: 10, // 10 pixels down from the top
                        style: {
                            fontSize: '13px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }
                }]
            });
        });


    </script>


{{--

    SELECT idsolicitudes, MONTH( f_registro ) AS meses
    FROM solicitudes
    WHERE YEAR(f_registro) =2014
    GROUP BY meses

    SELECT COUNT( idsolicitudes )
    FROM solicitudes
    WHERE MONTH( f_registro ) =6
    AND YEAR( f_registro ) =2014
    LIMIT 0 , 30



    --}}


@endsection