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

<div class="container-fluid">
     <div class="row">
     	  <div class="col-lg-8">
     	       <div id="one" style="width: 100%;height:500px;"></div>
          </div>
	     <div class="col-lg-4">
	          <div id="two" style="width: 100%;height:500px; "></div>
	     </div>
	     <!-- <div class="col-lg-4">
	     	  <div id="three" style="width: 100%;height:500px; "></div>
	     </div>
	     <div class="col-lg-4">
	     	 <div id="four" style="width: 100%;height:500px; "></div>
	     </div> -->
	 </div>
	
</div>


    <script type="text/javascript">
$(document).ready(function() {


var chart = echarts.init(document.getElementById('one'));

chart.showLoading();

$.getJSON('http://localhost/mara/welcome/conservancies', function (population) {
    chart.hideLoading();

    option = {
         backgroundColor: '#fff',
         color: [
       '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                           '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
                           '#D7504B','#C6E579','#F4E001','#F0805A','#26C0C0'
    ],
        tooltip : {
            trigger: 'axis',
            axisPointer: {
                type: 'shadow',
                label: {
                    show: true
                }
            }
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                magicType: {show: true, type: ['line', 'bar']},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        legend: {
            data:['CONSERVANCY SIZES IN ACRES'],
            itemGap: 5
        },
        grid: {
            top: '12%',
            left: '1%',
            right: '10%',
            containLabel: true
        },
        xAxis: [
            {
                type : 'category',                
                data : population[0]['data'],
                splitLine: {
            show: false
        },
            }
        ],
        yAxis: [
            {
                type : 'value',
                name : 'size in thousands of acres',
                axisLabel: {
                    formatter: function (a) {
                        a = +a;
                        return isFinite(a)
                            ? echarts.format.addCommas(+a )
                            : '';
                    }
                }
            }
        ],
        dataZoom: [
            {
                show: true,
                start: 1,
                end: 100
            },
            {
                type: 'inside',
                start: 1,
                end: 100
            },
            {
                show: true,
                yAxisIndex: 0,
                filterMode: 'empty',
                width: 30,
                height: '80%',
                showDataShadow: true,
                left: '93%'
            }
        ],
        series : [
           
            {
                name: 'Size in Acres',
                type: 'bar',
                data: population[2]['data']
            }
            
        ]
    };

    chart.setOption(option);

});

// chart two

var charttwo = echarts.init(document.getElementById('two'));

charttwo.showLoading();

$.getJSON('http://localhost/mara/welcome/conservancies', function (population) {
    charttwo.hideLoading();

    option = {
         backgroundColor: '#fff',
        tooltip : {
            trigger: 'axis',
            axisPointer: {
                type: 'shadow',
                label: {
                    show: true
                }
            }
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                magicType: {show: true, type: ['line', 'bar']},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        legend: {
            data:['CONSERVANCY SIZES IN ACRES'],
            itemGap: 5
        },
        grid: {
            top: '12%',
            left: '1%',
            right: '10%',
            containLabel: true
        },
        xAxis: [
            {
                type : 'category',                
                data : population[0]['data'],
                splitLine: {
            show: false
        },
            }
        ],
        yAxis: [
            {
                type : 'value',
                name : 'size in thousands of acres',
                axisLabel: {
                    formatter: function (a) {
                        a = +a;
                        return isFinite(a)
                            ? echarts.format.addCommas(+a)
                            : '';
                    }
                }
            }
        ],
        dataZoom: [
            {
                show: true,
                start: 1,
                end: 100
            },
            {
                type: 'inside',
                start: 1,
                end: 100
            },
            {
                show: true,
                yAxisIndex: 0,
                filterMode: 'empty',
                width: 30,
                height: '80%',
                showDataShadow: true,
                left: '93%'
            }
        ],
        series : [
           
            {
                name: 'Size in Acres',
                type: 'bar',
                data: population[2]['data']
            }
            
        ]
    };

    charttwo.setOption(option);

});

});
    </script>


