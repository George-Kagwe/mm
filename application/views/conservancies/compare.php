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
    <div class="container">
         <div class="row">
              <div class="col-lg-10">
                   <div id="main" style="width: 100%;height:500px; "></div>
              </div>
             
         </div>
    </div>
   


    <script type="text/javascript">

var chart = echarts.init(document.getElementById('main'));

chart.showLoading();

$.getJSON('http://localhost/mara/welcome/conservancies', function (population) {
    chart.hideLoading();

 

                option = {
                    title : {
                        text: 'sizes',
                        
                    },
                    tooltip : {
                        trigger: 'axis'
                    },
                    legend: {
                        data:population[2]['data']
                    },
                    toolbox: {
                        show : true,
                        feature : {
                            dataView : {show: true, readOnly: false},
                            magicType : {show: true, type: ['line', 'bar']},
                            restore : {show: true},
                            saveAsImage : {show: true}
                        }
                    },
                    calculable : true,
                    xAxis : [
                        {
                            type : 'category',
                            data : population[0]['data']
                        }
                    ],
                    yAxis : [
                        {
                            type : 'value'
                        }
                    ],
                    series : [
                        {
                            name:'size',
                            type:'bar',
                            data:population[2]['data'],
                            markLine : {
                                data : [
                                    {type : 'average', name: 'size'}
                                ]
                            }
                        }
                        
                    ]
                };

    chart.setOption(option);

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