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
      <a class="navbar-brand" href="<?=site_url('Home/index')?>"><img id="logo" src="<?php echo base_url().'assets/images/logo.png';?>"  class="img-responsive"></a> 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
       
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li ><a href="#">HOME </a></li>
         <li ><a   href="<?=site_url('conservancies/')?>">Conservancies</a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Conservancies <span class="fa fa-chevron-down"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?=site_url('conservancies/sizes')?>">Conservancy Sizes</a></li>
            <li><a href="#">Rangers</a></li>
            <li><a href="#"></a></li>
            <li><a href="#">LAND coverage</a></li>
          </ul>
        </li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROJECTS <span class="fa fa-chevron-down"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">USAID</a></li>
            <li><a href="#">LGT</a></li>
            <li><a href="#">BAND</a></li>
            <li><a href="#">OBEL</a></li>
            <li><a href="#">TUSK</a></li>
            <li><a href="#">MMCA STRATEGY</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PERFORMANCE <span class="fa fa-chevron-down"></span></a>
          <ul class="dropdown-menu">
           <li><a href="#">USAID</a></li>
            <li><a href="#">LGT</a></li>
            <li><a href="#">BAND</a></li>
            <li><a href="#">OBEL</a></li>
            <li><a href="#">TUSK</a></li>
            <li><a href="#">MMCA STRATEGY</a></li>
          </ul>
        </li>
          <li><a  href="<?=site_url('population/index')?>">POPULATION</a></li>
        
        <li><a href="#">success stories</a></li>
        <li><a style="  background-color: #d5ca85; color:#000;" href="<?=site_url('social/index')?>">social media</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>