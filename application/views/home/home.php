<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>

<div class="container-fluid" >
	<header><center>CONSERVANCIES SUMMARY</center></header>
	<br>
	 <div class="row">
	 	 <?php foreach($summary as $all_conservancies){?>
	 	  <div class="col-lg-2 col-xs-5 col-sm-4">
	 	  	   <div class="panel panel-default" id="first">
	 	  	   	 <div class="panel-heading">Total conservancies</div>
			         <div class="panel-body"> 
			         	<h3><?php echo number_format($all_conservancies->all_conservancies);?><!-- <i class="fa fa-braille fa-2x"></i> --></h3>
			         <p>  Conservancies<p>
			         </div>
                 <div class="panel-footer"></div>
               </div>
	 	  	  
	 	  </div>
	 	   <?php }?>
	 	   <?php foreach($summary as $total_acres){?>
	 	  <div class="col-lg-2 col-xs-5 col-sm-4">
	 	  	
	 	  	  <div class="panel panel-default">
	 	  	   	 <div class="panel-heading">Total land size(Acres)</div>
			         <div class="panel-body"> 
			         	<h3><?php echo number_format($total_acres->total_acres);?> acres      <!--   <i class="fa fa-th-large fa-2x"></i> --></h3>
			         	<p>Total land size of all conservancies<p>
			         </div>
                 <div class="panel-footer"></div>
               </div>
	 	  </div>
	 	   <?php }?>
	 	   <?php foreach($summary as $Land_Owners){?>
	 	  <div class="col-lg-2 col-xs-5  col-sm-4">
	 	  	   
	 	  	 
	 	  	    <div class="panel panel-default">
	 	  	   	 <div class="panel-heading">Total Land Owners</div>
			         <div class="panel-body"> 
			         	<h3><?php
			         	
			       	 echo number_format($Land_Owners->Land_Owners);?><!-- <i class="fa  fa-th  fa-2x"></i> --></h3>
			         	<p>Total land owners</p>
			         </div>
                 <div class="panel-footer"></div>
               </div>
	 	  </div>
	 	  
	 	  <div class="col-lg-2 col-xs-5 col-sm-4">
	 	  	   
	 	  	 
	 	  	    <div class="panel panel-default">
	 	  	   	 <div class="panel-heading">Women Land Owners</div>
			         <div class="panel-body"> 
			         	<h3><?php
			         	
			       	 echo number_format($Land_Owners->Women_Land_Owners) ;?><!-- <i class="fa fa-female fa-2x"></i> --> </h3>
			         	<p>Women land owners</p>
			         </div>
                 <div class="panel-footer"></div>
               </div>
	 	  </div>
	 	   <div class="col-lg-2 col-xs-5 col-sm-4">
	 	  	   
	 	  	 
	 	  	    <div class="panel panel-default">
	 	  	   	 <div class="panel-heading">Women Land Owners</div>
			         <div class="panel-body"> 
			         	<h3><?php
			         	
			       	 echo number_format($Land_Owners->Male_Loc) ;?><!-- <i class="fa fa-female fa-2x"></i> --> </h3>
			         	<p>Male Loc</p>
			         </div>
                 <div class="panel-footer"></div>
               </div>
	 	  </div>
	 	   <div class="col-lg-2 col-xs-5 col-sm-4">
	 	  	   
	 	  	 
	 	  	    <div class="panel panel-default">
	 	  	   	 <div class="panel-heading">Women Land Owners</div>
			         <div class="panel-body"> 
			         	<h3><?php
			         	
			       	 echo number_format($Land_Owners->Female_Loc) ;?><!-- <i class="fa fa-female fa-2x"></i> --> </h3>
			         	<p>Female Loc</p>
			         </div>
                 <div class="panel-footer"></div>
               </div>
	 	  </div>
	 	   <?php }?>
	 	

	 </div>
	
</div>

<style type="text/css">
    p{
    	text-align: center;
    }
  h3{
  	margin-top: 30%;
  	font-weight:bold;
  	font-size: 27px;
  	line-height: 1em;
  	text-align: center;
  }
	#first{
		
	}
	.panel-default{
		width:170px;
		height: 170px;
		/*border-radius: 50%;*/
		background:#d5ca85;
		border: none;

	}
	.panel-heading, .panel-footer{
		display: none;
	}
</style>