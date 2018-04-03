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

$.getJSON('http://localhost/mara/welcome/conserve', function (population) {
    chart.hideLoading();



option = {
    tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b}: {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        x: 'left',
        data:population
    },
    series: [
        // {
        //     name:'p',
        //     type:'pie',
        //     selectedMode: 'single',
        //     radius: [0, '30%'],

        //     label: {
        //         normal: {
        //             position: 'inner'
        //         }
        //     },
        //     labelLine: {
        //         normal: {
        //             show: false
        //         }
        //     },
        //     data:population
            
        // },
        {
            name:'p',
            type:'pie',
            radius: ['70%', '85%'],
            label: {
                normal: {
                    formatter: ' {b}  {d}%  ',
                    backgroundColor: '#000',
                    borderColor: '#aaa',
                    borderWidth: 1,
                    borderRadius: 4,
                    // shadowBlur:3,
                    // shadowOffsetX: 2,
                    // shadowOffsetY: 2,
                    // shadowColor: '#999',
                    // padding: [0, 7],
                    rich: {
                        a: {
                            color: '#999',
                            lineHeight: 22,
                            align: 'center'
                        },
                        // abg: {
                        //     backgroundColor: '#333',
                        //     width: '100%',
                        //     align: 'right',
                        //     height: 22,
                        //     borderRadius: [4, 4, 0, 0]
                        // },
                        hr: {
                            borderColor: '#aaa',
                            width: '100%',
                            borderWidth: 0.5,
                            height: 0
                        },
                        b: {
                            fontSize: 16,
                            lineHeight: 33
                        },
                        per: {
                            color: '#eee',
                            backgroundColor: '#334455',
                            padding: [2, 4],
                            borderRadius: 2
                        }
                    }
                }
            },
            data:population
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