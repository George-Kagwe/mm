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
                    text: 'MALE AND FEMALE POPULATION IN VARIOUS CONSERVANCIES',
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
                        text: 'POPULATION'
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

                series: []
            }
   
            $.getJSON("<?php echo site_url('welcome/population');?>", function(json) {
                
                options.xAxis.categories = json[0]['data'];
                options.series.push(json[1]);
                options.series.push(json[2]);
                options.series.push(json[3]);
                
                var chart = new Highcharts.Chart(options);
            });


    $("#filter").click(function()
    {       
     $.ajax({
        
         type: "POST",
         url:"<?php echo site_url('welcome/population');?>", 
         data: {location: $("#location").val()},
         dataType: "json",  
         cache:false,
         success: 
           function(json) {
             //  function(data){
                // alert(JSON.stringify(json));  
                // console.log(json);

                 var options = {
                chart: {
                    renderTo: 'container',
                    type: 'column',
                    inverted:false,
                    marginRight: 130,
                    marginBottom: 150
                },
                title: {
                    text: 'MALE AND FEMALE POPULATION IN VARIOUS CONSERVANCIES',
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
                        text: 'POPULATION'
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

                series: []
            }
                              
                options.xAxis.categories = json[0]['data'];
                options.series.push(json[1]);
                options.series.push(json[2]);
                options.series.push(json[3]);
                
                var chart = new Highcharts.Chart(options);  
           
           }
             // })
            //}
            });
          });
     return false;
 });
        // });
     
        </script>

          
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
    </head>
    <body>

     <div class="container-fluid">
             <div class="row">
                  
                  <div class="col-lg-12">
                      <div class="form-group well">
                     <!--  <form action="<?=site_url('population/filter')?>" method="post" class="form-inline"> -->
                   <form class="form-inline">
                                            <label>Select a Conservancy</label><br>

                                          <div class="form-group">
                                              <select  class="form-control" multiple="multiple" id="location"   name="location[] required="true"  >
                                          <!--    <option value="2" selected="selected">Option 2</option> -->

                                            
                                          <option value='<?php 

foreach($all as $alls)
{
    $new_arr[] = $alls->id;
}
$res_arr = implode(",",$new_arr);
print_r($res_arr);


 ?> 'selected="selected"  >All Selected</option>

                                                <?php
                                              
                                            foreach ($locations as $locations) {?>
                                               <?php echo '<option value='.$locations->id.'>'.$locations->locations.'</option>' ;?>
                                              
                                             <?php }?> 
                                              </select>
                                              </div>
                                              <button type="button"  id="filter" class="btn btn-danger">Filter</button>
                     </form>
                            </div> 
                                     

                  </div>
                  
                 
             </div>
            
        </div>

        <div class="container-fluid">

             <div class="row">
                  
                  <div class="col-lg-12">
                      <div id="container" name="container"></div>

                  </div>
                 <!--  <div class="col-lg-6">
                      <div id="container2" name="container2"></div>

                  </div> -->
                    
                 
             </div>
            
        </div>
             <br>
  <script type="text/javascript">
               $(document).ready(function(){   

 });

  </script>
         
        
      </body>      
</html>