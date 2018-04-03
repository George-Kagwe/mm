<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
    <!-- including ECharts file -->
   <!--  <script src="<?php echo base_url("/assets/js/echarts-english.js");?>"</script> -->
     <script src="<?php echo base_url("/assets/js/echarts/echarts.min.js");?>"</script>
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

$.getJSON('http://localhost/mara/welcome/conserve', function (population) {
    chart.hideLoading();

option = {
     backgroundColor: '#F5F5F5',
    title : {
        text: 'SIZE IN ACRES OF CONSERVANCIES IN MARA',
        x:'center'
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        left: 'left',
        data: population
    },
    series : [
        {
            name: 'Population',
            type: 'pie',
            radius : '70%',
            center: ['50%', '60%'],
            data:population,
            itemStyle: {
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
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