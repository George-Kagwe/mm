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
    alert(population[name]);
    option = {
    backgroundColor: '#2c343c',
color: [
        '#dd4444', '#fec42c', '#80F1BE'
    ],
    title: {
        text: 'Customized Pie',
        left: 'center',
        top: 20,
        textStyle: {
            color: '#ccc'
        }
    },

    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },

    visualMap: {
        show: false,
        min: 80,
        max: 600,
        inRange: {
            colorLightness: [0, 1]
        }
    },
    series : [
        {
            name:'访问来源',
            type:'pie',
            radius : '55%',
            center: ['50%', '50%'],
            data:population.sort(function (a, b) { return a.value - b.value; }),
            roseType: 'radius',
            label: {
                normal: {
                    textStyle: {
                        color: 'rgba(255, 255, 255, 0.3)'
                    }
                }
            },
            labelLine: {
                normal: {
                    lineStyle: {
                        color: 'rgba(255, 255, 255, 0.3)'
                    },
                    smooth: 0.2,
                    length: 10,
                    length2: 20
                }
            },
            itemStyle: {
                normal: {
                    color: '#c23531',
                    shadowBlur: 200,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            },

            animationType: 'scale',
            animationEasing: 'elasticOut',
            animationDelay: function (idx) {
                return Math.random() * 200;
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