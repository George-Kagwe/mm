<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Line Chart</title>
        
        <script type="text/javascript">
        $(document).ready(function() {
          
            var options = {
                chart: {
                    renderTo: 'container',
                    type: 'column',
                    inverted:false,
                    marginRight: 130,
                    marginBottom: 150
                },
                
                title: {
                    text: 'CONSERVANCIES SIZES',
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
                        text: 'SIZE IN ACRES'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080',
                    }]
                },
                tooltip: {
                    formatter: function() {
                            return '<b>'+ this.series.name +'</b><br/>'+
                            this.x +': '+ this.y;
                    }
                },
                legend: {
                    padding:3,
                    itemMarginLeft: 5,
                     align: 'center',
                    verticalAlign: 'middle',
                    layout: 'horizontal',
                    x: -100,
                    y: 160,
                    borderWidth: 0,
                    itemStyle: {
                    lineHeight: '54px'
                }
                },
                 plotOptions: {
                      series: {
                          borderWidth: 0,
                          dataLabels: {
                              enabled: false,
                              format: '{point.x[-4]:.1f}%'
                          }

                      }
                  },

                series: []
            }
   
            $.getJSON("<?php echo site_url('welcome/conservancies');?>", function(json) {
                
                options.xAxis.categories = json[0]['data'];
                // options.series.push(json[1]);
                options.series.push(json[2]);
                // options.series.push(json[3]);
                
                var chart = new Highcharts.Chart(options);
            });

        });


        $(document).ready(function() {
          
            var options = {
                chart: {
                    renderTo: 'container1',
                    type: 'column',
                    inverted:false,
                    marginRight: 130,
                    marginBottom: 150
                },
                title: {
                    text: 'CAMPS',
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
                        text: 'TOTAL'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080',
                    }]
                },
                tooltip: {
                    formatter: function() {
                            return '<b>'+ this.series.name +'</b><br/>'+
                            this.x +': '+ this.y;
                    }
                },
                legend: {
                    padding:3,
                    itemMarginLeft: 5,
                     align: 'center',
                    verticalAlign: 'middle',
                    layout: 'horizontal',
                    x: -100,
                    y: 160,
                    borderWidth: 0,
                    itemStyle: {
                    lineHeight: '54px'
                }
                },
                 plotOptions: {
                      series: {
                          borderWidth: 0,
                          dataLabels: {
                              enabled: true,
                              format: '{point.y[-4]:}'
                          }

                      }
                  },

                series: []
            }
   
            $.getJSON("<?php echo site_url('welcome/conservancies');?>", function(json) {
                
                options.xAxis.categories = json[0]['data'];
                 options.series.push(json[3]);
                options.series.push(json[4]);
               
                
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
                      <div class="form-group well">
                     <!--  <form action="<?=site_url('population/filter')?>" method="post" class="form-inline"> -->
                      <form class="form-inline">
                                          <label>Select a Conservancy</label><br>

                              <div class="form-group">
                                    
                                  <select  class="form-control" multiple="multiple" id="location"         name="location[] required="true"  >
                                            <!--    <option value="2" selected="selected">Option 2</option> -->

                                             
                                           <option value='<?php 

                                                foreach($all as $alls)
                                                {
                                                    $new_arr[] = $alls->id;
                                                }
                                                $res_arr = implode(",",$new_arr);
                                                print_r($res_arr);


                                                 ?> 'selected="selected"  >All Selected
                                            </option>

                                             <?php
                                              
                                                  foreach ($locations as $locations) {?>
                                                  <?php echo '<option value='.$locations->id.'>'.$locations->locations.'</option>' ;?>
                                              
                                             <?php 
                                                 }?> 
                                 </select>
                               </div>
                                              <button type="button"  id="filter" class="                  btn btn-danger">Filter
                                              </button>
                      </form>
                            </div> 
                                     

                  </div>
                  <div class="col-lg-6">
                      <div class="form-group well">
                     <!--  <form action="<?=site_url('population/filter')?>" method="post" class="form-inline"> -->
                      <form class="form-inline">
                                          <label>Select a Conservancy</label><br>

                              <div class="form-group">
                                    
                                  <select  class="form-control" multiple="multiple" id="location1"         name="location[] required="true"  >
                                            <!--    <option value="2" selected="selected">Option 2</option> -->

                                             
                                           <option value='<?php 

                                                foreach($all as $alls)
                                                {
                                                    $new_arr[] = $alls->id;
                                                }
                                                $res_arr = implode(",",$new_arr);
                                                print_r($res_arr);


                                                 ?> 'selected="selected"  >All Selected
                                            </option>

                                             <?php
                                              
                                                  foreach ($locations as $locations) {?>
                                                  <?php echo '<option value='.$locations->id.'>'.$locations->locations.'</option>' ;?>
                                              
                                             <?php 
                                                 }?> 
                                 </select>
                               </div>
                                              <button type="button"  id="filter" class="                  btn btn-danger">Filter
                                              </button>
                      </form>
                            </div> 
                                     

                  </div>
                  
                 
             </div>
            
        </div>

        <div class="container">

             <div class="row">
                  
                  <div class="col-lg-6">
                      <div id="container" name="container"></div>

                  </div>
                <div class="col-lg-6">
                      <div id="container1" name="container1"></div>

                  </div> 
                    
                 
             </div>
            
        </div>
             <br>
  <script type="text/javascript">
               $(document).ready(function(){   

 });

  </script>
         
        
      </body>      
</html>