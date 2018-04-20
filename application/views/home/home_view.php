<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/maps/modules/offline-exporting.js"></script>
<script src="https://code.highcharts.com/maps/modules/data.js"></script>
<script src="https://code.highcharts.com/mapdata/custom/europe.js"></script>

<script type="text/javascript">
   
// Instantiate the map
Highcharts.mapChart('container', {
  chart: {
    map: 'custom/europe',
    spacingBottom: 20
  },

  title: {
    text: 'Europe time zones'
  },

  legend: {
    enabled: true
  },

  plotOptions: {
    map: {
      allAreas: false,
      joinBy: ['iso-a2', 'code'],
      dataLabels: {
        enabled: true,
        color: '#FFFFFF',
        style: {
          fontWeight: 'bold'
        },
        // Only show dataLabels for areas with high label rank
        format: null,
        formatter: function () {
          if (this.point.properties && this.point.properties.labelrank.toString() < 5) {
            return this.point.properties['iso-a2'];
          }
        }
      },
      tooltip: {
        headerFormat: '',
        pointFormat: '{point.name}: <b>{series.name}</b>'
      }
    }
  },

  series: [{
    name: 'UTC',
    data: ['IE', 'IS', 'GB', 'PT'].map(function (code) {
      return { code: code };
    })
  }, {
    name: 'UTC + 1',
    data: ['NO', 'SE', 'DK', 'DE', 'NL', 'BE', 'LU', 'ES', 'FR', 'PL', 'CZ', 'AT', 'CH', 'LI', 'SK', 'HU',
      'SI', 'IT', 'SM', 'HR', 'BA', 'YF', 'ME', 'AL', 'MK'].map(function (code) {
        return { code: code };
      })
  }, {
    name: 'UTC + 2',
    data: ['FI', 'EE', 'LV', 'LT', 'BY', 'UA', 'MD', 'RO', 'BG', 'GR', 'TR', 'CY'].map(function (code) {
      return { code: code };
    })
  }, {
    name: 'UTC + 3',
    data: [{
      code: 'RU'
    }]
  }]
});

    
</script>



<div class="container-fluid">
	 <div class="row">
	 	  <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
	 	  	   <div class="panel panel-default" id="first">
	 	  	   	 <div class="panel-heading">CONSERVANCIES SUMMARY</div>
			         <div class="panel-body"> 
			         	<?php foreach($summary as $all_conservancies){?>
			         	    <div class=" col-lg-12 data_item1">
					         	<h3>
					         		<?php echo number_format($all_conservancies->all_conservancies);?> 
					         	</h3>
			         	        <p>Conservancies</p>
                            
                            </div>
			         		
			         		<div class=" col-lg-12 data_item2">
					         	<h3>
					         		<?php echo number_format($all_conservancies->total_acres);?> Acres
					         	</h3>
			         	        <p>Total size af all conservacies</p>
                            
                            </div>

                            <div  class="col-lg-6 data_item3">
					         	<h3>
					         		<?php echo number_format($all_conservancies->Land_Owners);?> 
					         	</h3>
			         	        <p>Total land owners</p>
                            
                            </div>
                            <div  class="col-lg-6 data_item4">
					         	<h3>
					         		<?php echo number_format($all_conservancies->Women_Land_Owners);?> 
					         	</h3>
			         	        <p> Women land owners</p>
                            
                            </div>

                            <div  class="col-lg-6 data_item5">
					         	<h3>
					         		<?php echo number_format($all_conservancies->Reg_Leases);?> 
					         	</h3>
			         	        <p>Total Registered Leases</p>
                            
                            </div>
                            <div  class="col-lg-6 data_item6">
					         	<h3>
					         		<?php echo number_format($all_conservancies->Lease_Acre);?> Acres 
					         	</h3>
			         	        <p> Total Leased Acres</p>
                            
                            </div>
                              <div  class="col-lg-12 data_item7">
					         	<h3>
					         		<?php echo "Ksh. ". number_format($all_conservancies->Leasehold_Fees);?>  
					         	</h3>
			         	        <p> Total LeaseHold fees </p>
                            
                            </div>
                            

			         	<?php }?>
			         </div>
                 <div class="panel-footer"></div>
               </div>
	 	  </div>
	 	   <div class="col-lg-8 col-sm-8 col-md-8 col-xs-6">
	 	  	    <div id="container" style="height: 500px; min-width: 310px; max-width: 480px; margin: 0 auto"></div>
	 	  </div>
	 </div>
</div>

<style type="text/css">
		.chart {
		    min-width: 320px;
		    max-width: 800px;
		    height: 220px;
		    margin: 0 auto;
		}

    .data_item1{
        margin-top: 4%;
		background: #d5ca85;
		color: #fff
		border: 1px solid #fff;
		box-shadow: 40px;
		height: 80px;
		border-radius: .366em;
		}
	.data_item2{
        margin-top: 4%;
		background: #d5ca85;
		color: #fff
		border: 1px solid #fff;
		box-shadow: 40px;
		height: 80px;
		border-radius: .366em;
		}
		.data_item3{
         margin-top: 4%;
		background: #d5ca85;
		color: #fff
		border: 1px solid #fff;
		box-shadow: 40px;
		height: 80px;
		border-top-left-radius:.366em;
		border-bottom-left-radius:.366em;
		
		}
		.data_item4{
        margin-top: 4%;
		background: #d5ca85;
		color: #fff
		border: 1px solid #fff;
		box-shadow: 40px;
		height: 80px;
		border-top-right-radius: .366em;
		border-bottom-right-radius: .366em;
		
		}
		.data_item5{
         margin-top: 4%;
		background: #d5ca85;
		color: #fff
		border: 1px solid #fff;
		box-shadow: 40px;
		height: 80px;
		border-top-left-radius:.366em;
		border-bottom-left-radius:.366em;
		
		}
		.data_item6{
        margin-top: 4%;
		background: #d5ca85;
		color: #fff
		border: 1px solid #fff;
		box-shadow: 40px;
		height: 80px;
		border-top-right-radius: .366em;
		border-bottom-right-radius: .366em;
		
		}
			.data_item7{
        margin-top: 4%;
		background: #d5ca85;
		color: #fff
		border: 1px solid #fff;
		box-shadow: 40px;
		height: 80px;
		border-radius:.366em;
		}
    

	h3 {
		text-align: center;
		padding-top: 0%;
		color: #000;
     	}
     p{
     	text-align: center;
		color: #000;
     }

   
     p{
     	text-align: center;
		color: #000;
     }
</style>

