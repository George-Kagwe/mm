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
        var chart = echarts.init(document.getElementById('main'));

chart.showLoading();

$.getJSON('http://localhost/mara/welcome/conservancies', function (population) {
    chart.hideLoading();
       function random(){
    var r = Math.round(Math.random() * 100);
    return (r * (r % 2 == 0 ? 1 : -1));
}

function randomDataArray() {
    var d = [];
    var len = 100;
    while (len--) {
        d.push([
            random(),
            random(),
            Math.abs(random()),
        ]);
    }
    return d;
}

option = {
    tooltip : {
        trigger: 'axis',
        showDelay : 0,
        axisPointer:{
            show: true,
            type : 'cross',
            lineStyle: {
                type : 'dashed',
                width : 1
            }
        }
    },
    legend: {
        data:population[0]['data']
    },
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataZoom : {show: true},
            dataView : {show: true, readOnly: false},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    xAxis : [
        {
            type : 'value',
            splitNumber: 4,
            scale: true
        }
    ],
    yAxis : [
        {
            type : 'value',
            splitNumber: 4,
            scale: true
        }
    ],
    series : [
        {
            name:'scatter1',
            type:'scatter',
            symbolSize: function (value){
                return Math.round(value[2] / 5);
            },
            data:population[1]['data']
        },
        {
            name:'scatter2',
            type:'scatter',
            symbolSize: function (value){
                return Math.round(value[2] / 5);
            },
            data: population[2]['data']
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