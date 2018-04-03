<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Line Chart</title>
        
        <script type="text/javascript">
$(document).ready(function() {
    $.getJSON('http://localhost/mara/welcome/conservancies', function (population) {
      Highcharts.chart('conservancy', {

    title: {
        text: 'Combination chart'
    },
    plotOptions: {
                                column: {
                                    colorByPoint: true
                                }
                            },
                            colors: [
                                '#C1232B','#B5C334',
                                '#FCCE10','#E87C25',
                                '#27727B','#FE8463',
                                '#9BCA63','#FAD860',
                                '#F3A43B','#60C0DD',
                                '#D7504B','#C6E579',
                                '#F4E001','#F0805A',
                                '#26C0C0'
                            ],
    xAxis: {
        categories: population[0]['data']
    },
    labels: {
        items: [{
            html: 'area',
            style: {
                left: '50px',
                top: '18px',
                color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
            }
        }]
    },
    series: [{
        type: 'column',
        name: 'Total Camps',
        data:  population[14]['data']
    }]

   

});
     });
        });  

</script>

    
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
    </head>
    <body>

    <div class="col-lg-12">
         <div id="conservancy" name="conservancy"></div>

     </div>