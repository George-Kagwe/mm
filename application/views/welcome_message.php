<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Highcahrts</title>
<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
	
</head>
<body>

<div id="container" style="width:100%; height:400px;"></div>

<script type="text/javascript">
// 	$(function () { 
//     var myChart = Highcharts.chart('container', {
//         chart: {
//             type: 'line'
//         },
//         title: {
//             text: 'Year and Conservarcies'
//         },
//         xAxis: {
//             categories: ['Apples', 'Bananas', 'Oranges']
//         },
//         yAxis: {
//             title: {
//                 text: 'Fruit eaten'
//             }
//         },
//         series: [{
//             name: 'Jane',
//             data: [1, 0, 4]
//         }, {
//             name: 'John',
//             data: [5, 7, 3]
//         }]
//     });
// });

// var options = {
//         chart: {
//             renderTo: 'chart',
//         },
//         credits: {
//             enabled: false
//         },
//         title: {
//             text: 'Impression/Click Overview',
//             x: -20
//         },
//         xAxis: {
//             categories: [{}]
//         },
//         tooltip: {
//             formatter: function() {
//                 var s = '<b>'+ this.x +'</b>';

//                 $.each(this.points, function(i, point) {
//                     s += '<br/>'+point.series.name+': '+point.y;
//                 });

//                 return s;
//             },
//             shared: true
//         },
//         series: [{},{}]
//     };



//     $.ajax({
//         url: "http://localhost/mara/welcome/data",
//         data: 'show=impression',
//         type:'post',
//         dataType: "json",
//         success: function(data){
//             options.xAxis.categories = data.categories;
//             options.series[1].name = 'Year';
//             options.series[1].data = data.year;
//             options.series[3].name = 'id';
//             options.series[3].data = data.id;
//             var chart = new Highcharts.Chart(options);          
//         }
//     });


$(document).ready(function() {

    var options = {
        chart: {
            renderTo: 'container',
            type: 'spline'
        },
        series: [{}]
    };

    $.getJSON('http://localhost/mara/welcome/data', function(data) {
        options.series[0].data = data;
            options.series[1].data = data.year;
          options.series[3].name = 'id';
             options.series[3].data = data.id;
        var chart = new Highcharts.Chart(options);
    });

});


</script>

</body>
</html>