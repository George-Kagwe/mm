
 <script type="text/javascript">
        //conservancies pie
        $(document).ready(function() {
          $.getJSON("<?php echo site_url('welcome/Leasehold_Fee');?>", function(json) {  

                        Highcharts.chart('container', {

                            chart: {
                                type: 'variablepie'
                            },
                            title: {
                                text: 'Size in (acres) and the year established',
                                 style: {
                                            fontSize: '15px',
                                            fontFamily: 'Verdana, sans-serif',
                                            fontWeight: 'bold'
                                         }
                            },
                            tooltip: {
                                headerFormat: '',
                                pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
                                    'Size (Acres): <b>{point.y}</b><br/>' +
                                    'Established in <b>{point.z:0f}</b><br/>'
                            },
                            series: [{
                                minPointSize: 10,
                                innerSize: '30%',
                                zMin: 0,
                                name: 'countries',
                                data:json

                            }]
                      });




 

                });

         });
        
        //women land owners tree map
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

                           Highcharts.chart('Women_Land_Owners', {
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
                                                                color: 'black',
                                                                textOutline: 'none',
                                                                fontFamily: 'Roboto',
                                                                fontWeight: '300',
                                                                fontSize: '1.5rem'
                                                            }
                                                        }
                                                    }
                                        },
                                        tooltip: {
                                              valueSuffix: ' Women land owners'
                                        },
                                        // colorAxis: {
                                        //     minColor: '#FFFFFF',
                                        //     maxColor: Highcharts.getOptions().colors[0,1,2,3,4,5]
                                        // },
                                        series: [{
                                            type: 'treemap',
                                            layoutAlgorithm: 'squarified',
                                            data:json
                                        }],
                                        title: {
                                            text: 'Women land owners',
                                            style: {
                                                        fontSize: '15px',
                                                        fontFamily: 'Verdana, sans-serif',
                                                        fontWeight: 'bold'
                                                    }

                                        }
                             });
              });

        });
        //total land owners  
        $(document).ready(function() {
           $.getJSON("<?php echo site_url('welcome/land_owners');?>", function(json) {  

              

                Highcharts.chart('land_owner', {

                    chart: {
                        type: 'column'
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
                    title: {
                        text: 'Land owners per conservancies',
                        style: {
                                fontSize: '15px',
                                fontFamily: 'Verdana, sans-serif',
                                fontWeight: 'bold'
                            }

                    },
                    credits: {
                                        enabled: false
                                       },
                    subtitle: {
                        text: ''
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
                            text: 'Total land owners'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: ' Total of <b>{point.y:,.0f} Land Owners</b>'
                    },
                    series: [{
                        name: 'Land Owners',
                        data:json
                       
                    }]
                });  
                            });
        });  

        


       //employment

        $(document).ready(function() {
               $.getJSON("<?php echo site_url('welcome/employment');?>", function(json) {  

              

                Highcharts.chart('EMPLOYMENT', {

                    chart: {
                        type: 'column'
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
                    title: {
                        text: 'Direct Employment',
                        style: {
                                fontSize: '15px',
                                fontFamily: 'Verdana, sans-serif',
                                fontWeight: 'bold'
                            }

                    },
                    credits: {
                                        enabled: false
                                       },
                    subtitle: {
                        text: ''
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
                            text: 'Employment in numbers'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: ' <b>{point.y:,.0f} direct employees</b>'
                    },
                    series: [{
                        name: 'Employment',
                        data:json
                       
                    }]
                });  
                            });
        }); 
         
         //budgets
        
         $(document).ready(function() {
               $.getJSON("<?php echo site_url('welcome/budgets');?>", function(json) {  

              

                Highcharts.chart('budget', {

                    chart: {
                        type: 'column'
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
                    title: {
                        text: 'Budget',
                        style: {
                                fontSize: '15px',
                                fontFamily: 'Verdana, sans-serif',
                                fontWeight: 'bold'
                            }

                    },
                    credits: {
                                        enabled: false
                                       },
                    subtitle: {
                        text: ''
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
                            text: 'Budget amount in shillings'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: 'Budget Amount: <b>{point.y:,.0f} </b>'
                    },
                    series: [{
                        name: 'Budegt',
                        data:json
                       
                    }]
                });  
                            });
        }); 

         //bursaries
          $(document).ready(function() {
               $.getJSON("<?php echo site_url('welcome/bursaries');?>", function(json) {  

              

                Highcharts.chart('bursaries', {

                    chart: {
                        type: 'column'
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
                    title: {
                        text: 'Bursaries',
                        style: {
                                fontSize: '15px',
                                fontFamily: 'Verdana, sans-serif',
                                fontWeight: 'bold'
                            }

                    },
                    credits: {
                                        enabled: false
                                       },
                    subtitle: {
                        text: ''
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
                            text: 'Bursary amount in shillings'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: 'Bursary Amount: <b>{point.y:,.0f} </b>'
                    },
                    series: [{
                        name: 'Bursary',
                        data:json
                       
                    }]
                });  
                            });
        }); 

       
        //camps active
        $(document).ready(function() {
                $.getJSON('http://localhost/mara/welcome/get_camps', function (population) {
                  Highcharts.chart('camps', {

                title: {
                    text: 'Total camps and supporting camps ',
                    style: {
                                fontSize: '15px',
                                fontFamily: 'Verdana, sans-serif',
                                fontWeight: 'bold'
                            }
                },
                // plotOptions: {
                //                             column: {
                //                                 colorByPoint: true
                //                             }
                //                         },
                                        // colors: [
                                        //     '#C1232B','#B5C334',
                                        //     '#FCCE10','#E87C25',
                                        //     '#27727B','#FE8463',
                                        //     '#9BCA63','#FAD860',
                                        //     '#F3A43B','#60C0DD',
                                        //     '#D7504B','#C6E579',
                                        //     '#F4E001','#F0805A',
                                        //     '#26C0C0'
                                        // ],
                xAxis: {
                    categories: population[0]['data']
                },
                labels: {
                    items: [{
                        html: '',
                        style: {
                            left: '50px',
                            top: '18px',
                            color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                        }
                    }]
                },
                 yAxis: {
                       allowDecimals: false,
                        min: 0,
                        title: {
                            text: 'Total camps'
                        }
                    },
                series: [{
                    type: 'column',
                    name: 'Total Camps',
                    data:  population[3]['data']
                },  {
                    type: 'column',
                    name: 'Supporting Camps',
                    data:  population[4]['data'],
                    marker: {
                        lineWidth: 2,
                        lineColor: Highcharts.getOptions().colors[3],
                        fillColor: 'white'
                    }
                }]
                // }, 

                // {
                //     type: 'pie',
                //     name: 'Total consumption',
                //     data: [{
                //         name: 'Jane',
                //         y: 13,
                //         color: Highcharts.getOptions().colors[0] // Jane's color
                //     }, {
                //         name: 'John',
                //         y: 23,
                //         color: Highcharts.getOptions().colors[1] // John's color
                //     }, {
                //         name: 'Joe',
                //         y: 19,
                //         color: Highcharts.getOptions().colors[2] // Joe's color
                //     }],
                //     center: [100, 80],
                //     size: 100,
                //     showInLegend: false,
                //     dataLabels: {
                //         enabled: false
                //     }
                // }]

            });
                 });

         });
        //loc
        $(document).ready(function() {
                $.getJSON('http://localhost/mara/welcome/loc', function (population) {
                  Highcharts.chart('loc', {

                title: {
                    text: 'Male LOC and Female LOC compared ',
                    style: {
                                fontSize: '15px',
                                fontFamily: 'Verdana, sans-serif',
                                fontWeight: 'bold'
                            }
                },
               
                xAxis: {
                    categories: population[0]['data']
                },
                labels: {
                    items: [{
                        html: '',
                        style: {
                            left: '50px',
                            top: '18px',
                            color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                        }
                    }]
                },
                 yAxis: {
                        min: 0,
                        title: {
                            text: 'Total LOC'
                        }
                    },
                series: [{
                    type: 'column',
                    name: 'Men LOC',
                    data:  population[8]['data']
                },  {
                    type: 'column',
                    name: 'Women LOC',
                    data:  population[9]['data'],
                    marker: {
                        lineWidth: 2,
                        lineColor: Highcharts.getOptions().colors[3],
                        fillColor: 'white'
                    }
                }]
               

            });
                 });

         });
         
         //Registered Leases
        $(document).ready(function() {
               $.getJSON("<?php echo site_url('welcome/reg_leases');?>", function(json) {  

              

                Highcharts.chart('registered_leases', {

                    chart: {
                        type: 'column'
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
                    title: {
                        text: 'Registered leases',
                        style: {
                                fontSize: '15px',
                                fontFamily: 'Verdana, sans-serif',
                                fontWeight: 'bold'
                            }

                    },
                    credits: {
                                        enabled: false
                                       },
                    subtitle: {
                        text: ''
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
                            text: 'Total registered leases'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: 'Size: <b>{point.y:,.0f} acres</b>'
                    },
                    series: [{
                        name: 'Population',
                        data:json
                       
                    }]
                });  
                            });
        });  
         //Lease Hold Fees
        $(document).ready(function() {
            $.getJSON("<?php echo site_url('welcome/Leasehold_Fees');?>", function(json) {  

              

                Highcharts.chart('Leasehold_Fees', {

                    chart: {
                        type: 'column'
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
                    title: {
                        text: 'Leasehold fees',
                        style: {
                                fontSize: '15px',
                                fontFamily: 'Verdana, sans-serif',
                                fontWeight: 'bold'
                            }

                    },
                    credits: {
                                        enabled: false
                                       },
                    subtitle: {
                        text: ''
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
                            text: 'Fees in Kenya Shillings'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: 'Fees: <b>{point.y:,.0f} Shillings</b>'
                    },
                    series: [{
                        name: 'Leasehold fees',
                        data:json
                       
                    }]
                });  
                            });
        });  
         //Leased Acres
        $(document).ready(function() {
             $.getJSON("<?php echo site_url('welcome/Lease_Acre');?>", function(json) {  

              

                Highcharts.chart('Leased_acres', {

                    chart: {
                        type: 'column'
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
                    title: {
                        text: 'Leased land in acres',
                        style: {
                                fontSize: '15px',
                                fontFamily: 'Verdana, sans-serif',
                                fontWeight: 'bold'
                            }

                    },
                    credits: {
                                        enabled: false
                                       },
                    subtitle: {
                        text: ''
                    },
                    xAxis: {
                        type: 'category',
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '15px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Leased land in acres'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: '<b>{point.y:,.0f} Acres</b>'
                    },
                    series: [{
                        name: 'Leased acres',
                        data:json
                       
                    }]
                });  
                            });
        });  
         

     
</script>

          
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/variable-pie.js"></script>
        <script src="https://code.highcharts.com/modules/heatmap.js"></script>
        <script src="https://code.highcharts.com/modules/treemap.js"></script>
       <style type="text/css">
            #container {
    min-width: 300px;
   /* max-width: 800px;*/
    height: 500px;
    margin: 1em auto;
}
        </style>
   


<div class="container">	
        <ul id="conservancies_tab"  class="nav nav-tabs ">
			<!-- <li class="active">
               <a  href="#1b" data-toggle="tab">CONSERVANCIES</a>
			</li> -->
            <li class="active">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      CONSERVANCIES  <span class="fa fa-chevron-down"></span></a>
                    <ul class="dropdown-menu" id="collapsed">
                        <li><a href="#1b" data-toggle="tab">ALL CONSERVANCIES</a></li>
                        <li><a href="#2b" data-toggle="tab">CUMULATIVE GROWTH</a></li>
                       
                    </ul>
            </li>
			<li><a href="#2b" data-toggle="tab">LAND OWNERSHIP</a>
			</li>
			<li><a href="#3b" data-toggle="tab">LAND LEASES</a>
			</li>
            <li><a href="#3c" data-toggle="tab">LOC</a>
            </li>
			<li><a href="#4b" data-toggle="tab">CAMPS</a>
			</li>
  		    <li><a href="#5b" data-toggle="tab">EMPLOYMENT</a>
			</li>
			<li><a href="#6b" data-toggle="tab">BUDGET</a>
			</li>
            <li><a href="#7b" data-toggle="tab">BURSARIES</a>
            </li>
		</ul>

		<div class="tab-content clearfix">
			  <div class="tab-pane active" id="1b">
                    
			        
			        <div class="container">

			             <div class="row">
                          <div class="col-lg-12">
                                  <div id="container" name="container"></div>

                              </div>
			                  <div class="col-lg-7">
			                      <div id="conservancyf" name="conservancy"></div>

			                  </div>
                              <div class="col-lg-5">
                                  <div id="conservancy_pief" name="conservancy_pie"></div>

                              </div>

			                
			                 
			             </div>
			            
			        </div>
			  </div>

			   <div class="tab-pane " id="2b">
                    
			      
			        <div class="container">

			             <div class="row">
			                  
			                  <div class="col-lg-6">
			                      <div id="land_owner" name="container"></div>

			                  </div>
			                 <div class="col-lg-6">
                                  <div id="Women_Land_Owners" name="container"></div>

                              </div>
			                 
			             </div>
			            
			        </div>
			  </div>
			   <div class="tab-pane " id="3b">
                    
			      
			        <div class="container">

			             <div class="row">
			                  
			                  <div class="col-lg-4">
			                      <div id="registered_leases" name="container"></div>

			                  </div>
                              <div class="col-lg-4">
                                  <div id="Leased_acres" name="container"></div>

                              </div>
                              <div class="col-lg-4">
                                  <div id="Leasehold_Fees" name="container"></div>

                              </div>
			                
			                 
			             </div>
			            
			        </div>
			  </div>
              <div class="tab-pane " id="3c">
                    
                  
                    <div class="container">

                         <div class="row">
                              
                              <div class="col-lg-12">
                                  <div id="loc" name="container"></div>

                              </div>
                              
                            
                             
                         </div>
                        
                    </div>
              </div>
			  <div class="tab-pane" id="4b">
                 
			        <div class="container">

			             <div class="row">
			                  
			                  <div class="col-lg-12">
			                      <div id="camps" name="camps"></div>

			                  </div>
			                
			                 
			             </div>
			            
			        </div>     
			  </div>
			  <div class="tab-pane" id="5b">
                     
			        <div class="container">

			             <div class="row">
			                  
			                  <div class="col-lg-12">
			                      <div id="EMPLOYMENT" name="container1"></div>

			                  </div>
			                
			                 
			             </div>
			            
			        </div>     
			  </div>
			  <div class="tab-pane" id="6b">
                      
			        <div class="container">

			             <div class="row">
			                  
			                  <div class="col-lg-12">
			                      <div id="budget" name="container1"></div>

			                  </div>
			                
			                 
			             </div>
			            
			        </div>     
			  </div>
               <div class="tab-pane" id="7b">
                      
                    <div class="container">

                         <div class="row">
                              
                              <div class="col-lg-12">
                                  <div id="bursaries" name="container1"></div>

                              </div>
                            
                             
                         </div>
                        
                    </div>     
              </div>
        
        
			</div>
         </div>



