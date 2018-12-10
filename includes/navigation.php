<!-- <div class="navbar-banner-background" id="container-bottom-border">	
	<nav class="navbar navbar-inverse navbar-fixed-top">
   		<div class="container">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
          	<span class="sr-only">Toggle navigation</span>
          	<span class="icon-bar"></span>
          	<span class="icon-bar"></span>
          	<span class="icon-bar"></span>
        	</button>
	  		<a href="#" class="navbar-brand"></a>
		</div>
	 <div class="collapse navbar-collapse" id="navbar">

		<ul class="nav navbar-nav">

		  <li class="active"><a href="index.html"><i class="fa fa-home fa-2x" aria-hidden="true"></i>
		  <li><a href="https://www.linkedin.com/in/alexa-cash/"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
		  </a></li>
	  	  <li><a href="About"><i class="fa fa-stack-overflow fa-2x" aria-hidden="true"></i>
		  </a></li>
	  	  <li><a href="https://github.com/alexacash"><i class="fa fa-github fa-2x"></i>
		  </a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
	  		<li id="contact"><a href="mailto:alexancash@gmail.com">CONTACT <i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></a></li>
	     	<li><a href="login">Login</a></li>
		</ul>
  	 </div>   
 	</div>
</nav>
-->

<nav>
 <div class="container">
	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php">Home</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "About") {?>active<?php }?>" href="about.php">About Us</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="contact.php">Contact</a>
	  </li>
	</ul>
</div>
</nav>