<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Line Chart</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'container',
                    type: 'line',
                    marginRight: 130,
                    marginBottom: 25
                },
                title: {
                    text: 'Project Requests',
                    x: -20 //center
                },
                subtitle: {
                    text: '',
                    x: -20
                },
                xAxis: {
                    categories: []
                },
                yAxis: {
                    title: {
                        text: 'Requests'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    formatter: function() {
                            return '<b>'+ this.series.name +'</b><br/>'+
                            this.x +': '+ this.y;
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 100,
                    borderWidth: 0
                },

                series: []
            }
   
            $.getJSON("<?php echo site_url('welcome/get_facebook');?>", function(json) {
                
                options.xAxis.categories = json[0]['data'];
                options.series.push(json[1]);
                options.series.push(json[2]);
                options.series.push(json[3]);
                 options.series.push(json[4]);
                options.series.push(json[5]);
                options.series.push(json[6]);
                 options.series.push(json[7]);
                options.series.push(json[8]);
                options.series.push(json[9]);
                 options.series.push(json[10]);
                options.series.push(json[11]);
                options.series.push(json[12]);
                var chart = new Highcharts.Chart(options);
            });
        });
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'container1',
                    type: 'area',
                    marginRight: 130,
                    marginBottom: 25
                },
                title: {
                    text: 'Project Requests',
                    x: -20 //center
                },
                subtitle: {
                    text: '',
                    x: -20
                },
                xAxis: {
                    categories: []
                },
                yAxis: {
                    title: {
                        text: 'Requests'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    formatter: function() {
                            return '<b>'+ this.series.name +'</b><br/>'+
                            this.x +': '+ this.y;
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 100,
                    borderWidth: 0
                },

                series: []
            }
   
            $.getJSON("<?php echo site_url('welcome/get_facebook1');?>", function(json) {
                
                options.xAxis.categories = json[0]['data'];
                options.series.push(json[1]);
                options.series.push(json[2]);
                options.series.push(json[3]);
                 options.series.push(json[4]);
                options.series.push(json[5]);
                options.series.push(json[6]);
                 options.series.push(json[7]);
                options.series.push(json[8]);
                options.series.push(json[9]);
                 options.series.push(json[10]);
                options.series.push(json[11]);
                options.series.push(json[12]);
                var chart = new Highcharts.Chart(options);
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