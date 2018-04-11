<nav id="myNavbar" class="navbar navbar-default navbar-fixed-top navbar-custom">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=site_url('Home/')?>"><img id="logo" src="<?php echo base_url().'assets/images/logo.png';?>"  class="img-responsive"></a> 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
       
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li ><a style="  background-color: #d5ca85; color:#000;" href="<?=site_url('home/home')?>">HOME </a></li>
         <li ><a   href="<?=site_url('conservancies/')?>">Conservancies</a></li>
       
          <li><a  href="<?=site_url('population/')?>">POPULATION</a></li>
        
        <li><a href="<?=site_url('leases/')?>">LEASES</a></li>
        <li><a  href="<?=site_url('social/')?>">social media</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>