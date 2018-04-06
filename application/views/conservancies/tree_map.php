<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Line Chart</title>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {

              $.getJSON("<?php echo site_url('welcome/women_Land_Owners');?>", function(json) {  
            

                            Highcharts.setOptions({
                                colors: ['#C1232B','#B5C334',
                                                                '#FCCE10','#E87C25',
                                                                '#27727B','#FE8463'],
                                lang: {
                                    thousandsSep: ','
                                }
                            });

                            Highcharts.chart('container', {
                                         chart: {
                                                    backgroundColor: 'rgba(255,255,255,0)'
                                                },
                                                credits: {
                                                    enabled: false
                                                },
                                                plotOptions: {
                                                    series: {
                                                        colorByPoint: true,
                                                        borderColor: '#fff',
                                                        
                                              
                                                        dataLabels: {
                                                            enabled: true,
                                                            style: {
                                                                textOutline: 'none',
                                                                fontFamily: 'Roboto',
                                                                fontWeight: '300',
                                                                fontSize: '1rem'
                                                            }
                                                        }
                                                    }
                                                },
                                                tooltip: {
                                                    valuePostfix: 'Women'
                                                },
                                          xAxis: {
                                            opposite: true,
                                            offset: 1
                                            },
                                            yAxis: {
                                              offset: 1
                                            },
                                                series: [{
                                                    type: 'treemap',
                                                    layoutAlgorithm: 'squarified',
                                                    data: json
                                                }],
                                                title: {
                                                    text: ''
                                                },
                                                legend: {
                                                    enabled: false
                                                }
                            });

              });

        });
     
     
        </script>

          

        <script src="https://code.highcharts.com/highcharts.js"></script>
       <script src="https://code.highcharts.com/modules/heatmap.js"></script>
<script src="https://code.highcharts.com/modules/treemap.js"></script>
        
        <style type="text/css">
            #container {
    min-width: 300px;
    max-width: 800px;
    height: 500px;
    margin: 1em auto;
}
        </style>
    </head>
    <body>


<div id="container"></div>