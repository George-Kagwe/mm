
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'facebook',
                    type: 'areaspline',
                    marginRight: 130,
                    marginBottom: 25
                },
                title: {
                    text: 'FACEBOOK ACTIVITIES',
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
   
            $.getJSON("<?php echo site_url('welcome/facebook');?>", function(json) {
                
                options.xAxis.categories = json[0]['data'];
                options.series.push(json[1]);
                options.series.push(json[2]);
                options.series.push(json[3]);
                options.series.push(json[4]);
                options.series.push(json[5]);
                var chart = new Highcharts.Chart(options);
            });
        });
         $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'instagram',
                    type: 'areaspline',
                    marginRight: 130,
                    marginBottom: 25
                },
                title: {
                    text: 'INSTAGRAM ACTIVITIES',
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
   
            $.getJSON("<?php echo site_url('welcome/instagram');?>", function(json) {
                
                options.xAxis.categories = json[0]['data'];
                options.series.push(json[1]);
                options.series.push(json[2]);
                options.series.push(json[3]);
                options.series.push(json[4]);
               
                var chart = new Highcharts.Chart(options);
            });
        });
         $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'container',
                    type: 'areaspline',
                    marginRight: 130,
                    marginBottom: 25
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
                options.series.push(json[5]);
                options.series.push(json[6]);
                var chart = new Highcharts.Chart(options);
            });
        });
         $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'container',
                    type: 'area',
                    marginRight: 130,
                    marginBottom: 25
                },
                title: {
                    text: '     WEBSITE ACTIVITIES',
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
   
            $.getJSON("<?php echo site_url('welcome/website');?>", function(json) {
                
                options.xAxis.categories = json[0]['data'];
                options.series.push(json[1]);
                options.series.push(json[2]);
                options.series.push(json[3]);
                
                var chart = new Highcharts.Chart(options);
            });
        });
        </script>
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
<div class="container"><h4>Social Media</h4></div>

<div id="exTab2" class="container"> 
      <ul class="nav nav-tabs">
            <li class="active"><a href="#1">FACEBOOK</a></li>
              <li ><a href="#2">INSTAGRAM</a></li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Instagram <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">Submenu 1-1</a></li>
        <li><a href="#">Submenu 1-2</a></li>
        <li><a href="#">Submenu 1-3</a></li>                        
      </ul>
    </li>
    <li><a href="#">Menu 2</a></li>
    <li><a href="#">Menu 3</a></li
            
      </ul>

      <div class="tab-content ">
        <div class="tab-pane active" id="1">
             <div class="container" id="1">
             <div class="row">
                  
                  <div class="col-lg-12">
                      <div id="facebook" name="facebook"></div>

                  </div>
                  
                 
             </div>
            
             </div>      
        </div>
        <div class="tab-pane" id="2">
                <div class="container" id="2">
             <div class="row">
                  
                  <div class="col-lg-12" >
                      <div id="instagram" name="instagram"></div>

                  </div>
                  
                 
             </div>
            
             </div>       
        </div> 

        <div class="tab-pane" id="3">
                 
        </div>
        <div class="tab-pane" id="4">
                  
        </div>
       
      </div>
</div>

<hr></hr>

