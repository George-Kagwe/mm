<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Line Chart</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
           $.getJSON("<?php echo site_url('welcome/clean');?>", function(json) {  

                  Highcharts.chart('container', {

    chart: {
        type: 'column'
    },
    plotOptions: {
                column: {
                    colorByPoint: true
                }
            },
            colors: [
                '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                           '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
                           '#D7504B','#C6E579','#F4E001','#F0805A','#26C0C0'
            ],
    title: {
        text: 'World\'s largest cities per 2014'
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
        data:json
       
    }]
});  
            });
        });
        </script>
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
    </head>
    <body>
        <div id="container" name="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>

        <div id="container" name="container1" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
    </body>
</html>