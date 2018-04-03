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
                    type: 'column',
                    marginRight: 130,
                    marginBottom: 100
                },
                title: {
                    text: 'TWITTER FOLLOWERS',
                    x: -20 //center
                }, 
                credits: {
                      enabled: false
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
                        text: 'ACTIVITY TOTAL'
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
   
            $.getJSON("<?php echo site_url('welcome/twitter');?>", function(json) {
                
                options.xAxis.categories = json[0]['data'];
                // options.series.push(json[1]);
                // options.series.push(json[2]);
                // options.series.push(json[3]);
                // options.series.push(json[4]);
                options.series.push(json[5]);
                options.series.push(json[6]);
                var chart = new Highcharts.Chart(options);
            });
        });
            
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'container2',
                    type: 'areaspline',
                    marginRight: 130,
                    marginBottom: 100
                },
                title: {
                    text: 'TWITTER ACTIVITIES',
                    x: -20 //center
                }, 
                credits: {
                      enabled: false
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
                        text: 'ACTIVITY TOTAL'
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
   
            $.getJSON("<?php echo site_url('welcome/twitter');?>", function(json) {
                
                options.xAxis.categories = json[0]['data'];
                options.series.push(json[1]);
                options.series.push(json[2]);
                options.series.push(json[3]);
                options.series.push(json[4]);
                // options.series.push(json[5]);
                // options.series.push(json[6]);
                var chart = new Highcharts.Chart(options);
            });
        });
        </script>
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
    </head>
    <body>
        <div class="container">
             <div class="row">
                  
                  <div class="col-lg-6">
                      <div id="container" name="container" style="width:100%; height:100%; padding-bottom: 20%;"></div>

                  </div>
                  <div class="col-lg-6">
                      <div id="container2" name="container2" style="width:100%; height:100%; padding-bottom: 20%;"></div>

                  </div>
                  
                 
             </div>
            
        </div>
      </body>      
</html>