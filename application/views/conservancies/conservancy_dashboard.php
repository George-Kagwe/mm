

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">
        //facebook activities
        $(document).ready(function() {

                    Highcharts.setOptions({
                                colors: ['#C1232B','#B5C334',
                                                                '#FCCE10','#E87C25',
                                                                '#27727B','#FE8463'],
                                lang: {
                                    thousandsSep: ','
                                }
                    });
                    var options = {
                        chart: {
                            renderTo: 'facebook',
                            type: 'areaspline',
                            marginRight: 130,
                            marginBottom: 25
                        },
                        title: {
                            text: 'Facebook  activities',
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
                                text: 'Activity total'
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
                                    this.x +': '+ Highcharts.numberFormat(this.y, 0, '.', ',');
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
        //Instgram Activities
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'instagram',
                    type: 'line',
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
        //Twitter Activities
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'twitter_activities',
                    type: 'areaspline',
                    marginRight: 130,
                    marginBottom: 25
                },
                title: {
                    text: 'Twitter activites',
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
                        text: 'activities total'
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
                            this.x +': '+Highcharts.numberFormat(this.y, 0, '.', ',');
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
        //Twitter Followers
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'twitter_followers',
                    type: 'column',
                    marginRight: 130,
                    marginBottom: 100
                },
                title: {
                    text: 'Twitter folowers',
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
                        text: 'Total followers'
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
                            this.x +': '+Highcharts.numberFormat(this.y, 0, '.', ',');
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
        //Instagram followers
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'instagram_followers',
                    type: 'areaspline',
                    marginRight: 130,
                    marginBottom: 100
                },
                title: {
                    text: 'Instagram followers',
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
                        text: 'Total followers'
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
                // options.series.push(json[2]);
                // options.series.push(json[3]);
                // options.series.push(json[4]);
               
                var chart = new Highcharts.Chart(options);
            });
        });
        //Instagram activities
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'instagram_activities',
                    type: 'areaspline',
                    marginRight: 130,
                    marginBottom: 100
                },
                title: {
                    text: 'Instagram activities',
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
                        text:'Total activities'
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
                //options.series.push(json[1]);
                options.series.push(json[2]);
                options.series.push(json[3]);
                options.series.push(json[4]);
               
                var chart = new Highcharts.Chart(options);
            });
        });
        //Website Activities
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'website_activities',
                    type: 'column',
                    marginRight: 130,
                    marginBottom: 25
                },
                title: {
                    text: '     User behaviour activites',
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
                        text: 'Activity Total'
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
                            this.x +': '+ Highcharts.numberFormat(this.y, 0, '.', ',');
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
               // options.series.push(json[2]);
                options.series.push(json[3]);
                
                var chart = new Highcharts.Chart(options);
            });
        });
        //Website Visits
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'website_visits',
                    type: 'column',
                    marginRight: 130,
                    marginBottom: 100
                },
                title: {
                    text: '     Website visits',
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
                        text: 'Visits total'
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
                            this.x +': '+Highcharts.numberFormat(this.y, 0, '.', ',');
                    }
                },
                legend: {
                    // layout: 'horizontal',
                    // align: 'right',
                    // verticalAlign: 'top',
                    // x: -10,
                    // y: 100,

                    align: 'right',
                    verticalAlign: 'middle',
                    layout: 'horizontal',
                    x: -100,
                    y: 160,
                    borderWidth: 0
                },

                series: []
            }
   
            $.getJSON("<?php echo site_url('welcome/website');?>", function(json) {
                
                options.xAxis.categories = json[0]['data'];
                
                //options.series.push(json[2]);
                
                options.series.push(json[4]);
                
                var chart = new Highcharts.Chart(options);
            });
        });
        //website visit_duration
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'visit_duration',
                    type: 'column',
                    marginRight: 130,
                    marginBottom: 100
                },
                title: {
                    text: '     Website visitor duration ',
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
                        text: 'Duration total'
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
                            this.x +': '+Highcharts.numberFormat(this.y, 0, '.', ',');
                    }
                },
                legend: {
                    // layout: 'horizontal',
                    // align: 'right',
                    // verticalAlign: 'top',
                    // x: -10,
                    // y: 100,

                    align: 'right',
                    verticalAlign: 'middle',
                    layout: 'horizontal',
                    x: -100,
                    y: 160,
                    borderWidth: 0
                },

                series: []
            }
   
            $.getJSON("<?php echo site_url('welcome/website');?>", function(json) {
                
                options.xAxis.categories = json[0]['data'];
                
                options.series.push(json[2]);
                
                // options.series.push(json[4]);
                
                var chart = new Highcharts.Chart(options);
            });
        });
</script>
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>

<div class="container">
	

			        
			<ul class="nav nav-tabs " id="conservancies_tab">
			    <li class="active"><a href="#facebooks" data-toggle="tab">FACEBOOK</a></li>
			    <li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#twitter">TWITTER <span class="fa fa-chevron-down"></span></a>
			        <ul class="dropdown-menu">
			             <li><a href="#2a" data-toggle="tab">ACTIVITIES</a></li>
                         <li><a href="#2b" data-toggle="tab">FOLLOWERS</a></li>
			        </ul>
			    </li>
			     <li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#twitter">INSTAGRAM <span class="fa fa-chevron-down"></span></a>
			        <ul class="dropdown-menu">
			             <li><a href="#3a" data-toggle="tab">FOLLOWERS</a></li>
                         <li><a href="#3b" data-toggle="tab">ACTIVITIES</a></li>
			        </ul>
			    </li>
			      <li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#twitter">WEBSITE <span class="fa fa-chevron-down"></span></a>
			        <ul class="dropdown-menu">
			            <li><a href="#4a" data-toggle="tab">VISITS</a></li>
                        <li><a href="#4b" data-toggle="tab">VISIT DURATION</a></li>
                        <li><a href="#4c" data-toggle="tab">ACTIVITIES</a></li>
			        </ul>
			    </li>
			   
			</ul>
             <br>
			<div class="tab-content">
			    <div class="tab-pane active" id="facebooks">
			         <div class="container">

                         <div class="row">
                          <div class="col-lg-12">
                                  <div id="facebook" name="facebook"></div>

                          </div>
                              

                            
                             
                         </div>
                        
                    </div>
			    </div>

			    <div class="tab-pane" id="2a">
			         <div class="container">

                         <div class="row">
                              
                              
                             <div class="col-lg-12">
                                  <div id="twitter_activities" name="twitter_activities"></div>

                              </div>
                             
                         </div>
                        
                    </div>
			    </div>
			    <div class="tab-pane" id="2b">
			           <div class="container">

                         <div class="row">
                              
                              <div class="col-lg-12">
                                  <div id="twitter_followers" name="twitter_followers"></div>

                              </div>
                            
                             
                         </div>
                        
                    </div>
			    </div>
			     <div class="tab-pane" id="3a">
			         <div class="container">

                         <div class="row">
                              
                              
                             <div class="col-lg-12">
                                  <div id="instagram_followers" name="instagram_followers"></div>

                              </div>
                             
                         </div>
                        
                    </div>
			    </div>
			    <div class="tab-pane" id="3b">
			           <div class="container">

                         <div class="row">
                              
                              <div class="col-lg-12">
                                  <div id="instagram_activities" name="instagram_activities"></div>

                              </div>
                            
                             
                         </div>
                        
                    </div>
			    </div>
			     <div class="tab-pane" id="4a">
			         <div class="container">

                         <div class="row">
                              
                              
                             <div class="col-lg-12">
                                  <div id="website_visits" name="website_visits"></div>

                              </div>
                             
                         </div>
                        
                    </div>
			    </div>
			    <div class="tab-pane" id="4b">
			           <div class="container">

                         <div class="row">
                              
                              <div class="col-lg-12">
                                   <div id="visit_duration" name="visit_duration"></div>

                              </div>
                            
                             
                         </div>
                        
                    </div>
			    </div>
			    <div class="tab-pane" id="4c">
			           <div class="container">

                         <div class="row">
                              
                              <div class="col-lg-12">
                                  <div id="website_activities" name="website_activities"></div>
                              </div>
                            
                             
                         </div>
                        
                    </div>
			    </div>
			    

			</div>

</div>