<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
    <!-- including ECharts file -->
    <script src="<?php echo base_url("/assets/js/echarts-english.js");?>"</script>
    <script src="echarts.js"></script>
</head>
<body>
    <!-- prepare a DOM container with width and height -->
    <div id="main" style="width: 90%;height:500px; margin-left: 5%; margin-right: 5%;"></div>


    <script type="text/javascript">
            function init_echarts() {
        
                if( typeof (echarts) === 'undefined'){ return; }
                console.log('init_echarts');
            
        
                  var theme = {
                  color: [
                      '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
                      '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
                  ],

                  title: {
                      itemGap: 8,
                      textStyle: {
                          fontWeight: 'normal',
                          color: '#408829'
                      }
                  },

                  dataRange: {
                      color: ['#1f610a', '#97b58d']
                  },

                  toolbox: {
                      color: ['#408829', '#408829', '#408829', '#408829']
                  },

                  tooltip: {
                      backgroundColor: 'rgba(0,0,0,0.5)',
                      axisPointer: {
                          type: 'line',
                          lineStyle: {
                              color: '#408829',
                              type: 'dashed'
                          },
                          crossStyle: {
                              color: '#408829'
                          },
                          shadowStyle: {
                              color: 'rgba(200,200,200,0.3)'
                          }
                      }
                  },

                  dataZoom: {
                      dataBackgroundColor: '#eee',
                      fillerColor: 'rgba(64,136,41,0.2)',
                      handleColor: '#408829'
                  },
                  grid: {
                      borderWidth: 0
                  },

                  categoryAxis: {
                      axisLine: {
                          lineStyle: {
                              color: '#408829'
                          }
                      },
                      splitLine: {
                          lineStyle: {
                              color: ['#eee']
                          }
                      }
                  },

                  valueAxis: {
                      axisLine: {
                          lineStyle: {
                              color: '#408829'
                          }
                      },
                      splitArea: {
                          show: true,
                          areaStyle: {
                              color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
                          }
                      },
                      splitLine: {
                          lineStyle: {
                              color: ['#eee']
                          }
                      }
                  },
                  timeline: {
                      lineStyle: {
                          color: '#408829'
                      },
                      controlStyle: {
                          normal: {color: '#408829'},
                          emphasis: {color: '#408829'}
                      }
                  },

                  k: {
                      itemStyle: {
                          normal: {
                              color: '#68a54a',
                              color0: '#a9cba2',
                              lineStyle: {
                                  width: 1,
                                  color: '#408829',
                                  color0: '#86b379'
                              }
                          }
                      }
                  },
                  map: {
                      itemStyle: {
                          normal: {
                              areaStyle: {
                                  color: '#ddd'
                              },
                              label: {
                                  textStyle: {
                                      color: '#c12e34'
                                  }
                              }
                          },
                          emphasis: {
                              areaStyle: {
                                  color: '#99d2dd'
                              },
                              label: {
                                  textStyle: {
                                      color: '#c12e34'
                                  }
                              }
                          }
                      }
                  },
                  force: {
                      itemStyle: {
                          normal: {
                              linkStyle: {
                                  strokeColor: '#408829'
                              }
                          }
                      }
                  },
                  chord: {
                      padding: 4,
                      itemStyle: {
                          normal: {
                              lineStyle: {
                                  width: 1,
                                  color: 'rgba(128, 128, 128, 0.5)'
                              },
                              chordStyle: {
                                  lineStyle: {
                                      width: 1,
                                      color: 'rgba(128, 128, 128, 0.5)'
                                  }
                              }
                          },
                          emphasis: {
                              lineStyle: {
                                  width: 1,
                                  color: 'rgba(128, 128, 128, 0.5)'
                              },
                              chordStyle: {
                                  lineStyle: {
                                      width: 1,
                                      color: 'rgba(128, 128, 128, 0.5)'
                                  }
                              }
                          }
                      }
                  },
                  gauge: {
                      startAngle: 225,
                      endAngle: -45,
                      axisLine: {
                          show: true,
                          lineStyle: {
                              color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
                              width: 8
                          }
                      },
                      axisTick: {
                          splitNumber: 10,
                          length: 12,
                          lineStyle: {
                              color: 'auto'
                          }
                      },
                      axisLabel: {
                          textStyle: {
                              color: 'auto'
                          }
                      },
                      splitLine: {
                          length: 18,
                          lineStyle: {
                              color: 'auto'
                          }
                      },
                      pointer: {
                          length: '90%',
                          color: 'auto'
                      },
                      title: {
                          textStyle: {
                              color: '#333'
                          }
                      },
                      detail: {
                          textStyle: {
                              color: 'auto'
                          }
                      }
                  },
                  textStyle: {
                      fontFamily: 'Arial, Verdana, sans-serif'
                  }
              };

         var echartScatter = echarts.init(document.getElementById('main'), theme);
$.getJSON('http://localhost/mara/welcome/conserve', function (population) {
         
         console.log(population[0].name);
           alert(population.value);

              echartScatter.setOption({
                title: {
                  text: 'Scatter Graph',
                  subtext: 'Heinz  2003'
                },
                tooltip: {
                  trigger: 'axis',
                  showDelay: 0,
                  axisPointer: {
                    type: 'cross',
                    lineStyle: {
                      type: 'dashed',
                      width: 1
                    }
                  }
                },
                legend: {
                  data: population.name
                },
                toolbox: {
                  show: true,
                  feature: {
                    saveAsImage: {
                      show: true,
                      title: "Save Image"
                    }
                  }
                },
                xAxis: [{
                  type: 'value',
                  scale: true
                  // axisLabel: {
                  //   formatter: '{value} cm'
                  // }
                }],
                yAxis: [{
                  type: 'value',
                  scale: true,
                  axisLabel: {
                    formatter: '{value} km'
                  }
                }],
                series: [{
                  name: 'Data1',
                  type: 'scatter',
                  tooltip: {
                    trigger: 'item',
                    formatter: function(params) {
                      if (params.value.length > 1) {
                        return params.seriesName + ' :<br/>' + params.value[0] + ' ' + params.value[1] + ' km';
                      } else {
                        return params.seriesName + ' :<br/>' + params.name + ' : ' + params.value + 'km ';
                      }
                    }
                  },
                  data:population,
                  markPoint: {
                    data: [{
                      type: 'max',
                      name: 'Max'
                    }, {
                      type: 'min',
                      name: 'Min'
                    }]
                  },
                  markLine: {
                    data: [{
                      type: 'average',
                      name: 'Mean'
                    }]
                  }
                }]

                // , {
                //   name: 'Data2',
                //   type: 'scatter',
                //   tooltip: {
                //     trigger: 'item',
                //     formatter: function(params) {
                //       if (params.value.length > 1) {
                //         return params.seriesName + ' :<br/>' + params.value[0] + 'cm ' + params.value[1] + 'kg ';
                //       } else {
                //         return params.seriesName + ' :<br/>' + params.name + ' : ' + params.value + 'kg ';
                //       }
                //     }
                //   },
                //   data:population ,
                //   markPoint: {
                //     data: [{
                //       type: 'max',
                //       name: 'Max'
                //     }, {
                //       type: 'min',
                //       name: 'Min'
                //     }]
                //   },
                //   markLine: {
                //     data: [{
                //       type: 'average',
                //       name: 'Mean'
                //     }]
                //   }
                // }]
              });
});
        }  
          $(document).ready(function() {
                
       
        init_echarts();
      
                
    }); 
    
  
    </script>

    <style type="text/css">
        body {
    background-color: #fff;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px; 
    color: #000;
}

a:link, a:visited {
    color: #4682b4;
}

a:hover {
    color: #4169e1;
}

#main   {
    width: 1000px;
    height: 700px;
}
    </style>
</body>
</html>