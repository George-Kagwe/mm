<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Line Chart</title>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
          $.getJSON("<?php echo site_url('welcome/Leasehold_Fee');?>", function(json) {  

                        Highcharts.chart('container', {

    chart: {
        type: 'variablepie'
    },
    title: {
        text: 'Conservancies in the Mara and the year Established'
    },
    tooltip: {
        headerFormat: '',
        pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
            'Size (Acres): <b>{point.y}</b><br/>' +
            'Established in <b>{point.z}</b><br/>'
    },
    series: [{
        minPointSize: 10,
        innerSize: '20%',
        zMin: 0,
        name: 'countries',
        data:json

    }]
});




 

          });

        });
     
     
        </script>

          

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/variable-pie.js"></script>
        
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