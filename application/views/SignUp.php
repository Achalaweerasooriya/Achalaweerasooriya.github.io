<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title></title>   

<meta name="description" content="Insert Your Site Description" /> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="<?php echo base_url(); ?>_include/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="<?php echo base_url(); ?>_include/css/supersized.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>_include/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="<?php echo base_url(); ?>_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="<?php echo base_url(); ?>_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="<?php echo base_url(); ?>_include/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="<?php echo base_url(); ?>_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>_include/css/responsive.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="<?php echo base_url(); ?>_include/js/modernizr.js"></script>

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End Analytics -->

</head>


<body>



<!-- Header -->
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <div id="logo">
        	<a id="goUp" href="#home-slider" title="Brushed | Responsive One Page Template">Brushed Template</a>
        </div>
        
        <nav id="menu">
        	<ul id="menu-nav">
            	<li><a href="index.html#home-slider" class="external">Home</a></li>
                <li><a href="index.html#work" class="external">Our Work</a></li>
                <li><a href="index.html#about" class="external">About Us</a></li>
                <li><a href="index.html#contact" class="external">Contact</a></li>
                <li class="current"><a href="shortcodes.html">Login</a></li>
            </ul>
        </nav>
        
    </div>
</header>
<!-- End Header -->

<!-- Our Shortcodes Section -->
<div id="shortcodes" class="page">
	<div class="container">
    
    	<!-- Title Page --><!-- End Title Page -->
        
        <!-- Start Accordion/Toggle Section --><!-- End Accordion/Toggle Section -->
        
        <div class="row">
        	<div class="span12">
        	  <div class="col-lg-12">
        	    <h1 class="page-header">Sign Up <small> Create your free Supreme account</small> </h1>
        	    <!--<form action="<?php echo base_url();?>LoginController/Register" method="get">-->
				<?php echo form_open(base_url('LoginController/Register'),['method'=>'post'])?>
        	      <p><span id="sprytextfield1">
        	        <label for="tn">Full Name</label>
        	        <input class="form-control" input type="text" name="full_name" placeholder="Please Enter Your Full Name" style="width:50%" ><?php echo form_error('full_name'); ?>
        	        <span class="textfieldRequiredMsg"> </span></span> <span id="sprytextfield2">
       	            <label for="tjt">Designation  <?php echo form_error('des'); ?><br>
       	              <br>
       	              <input type="radio" name="des" value="pm">
   	                Project Manager       	            
   	                <input type="radio" name="des" value="ceo">
   	                CEO<br>
   	                <input type="radio" name="des" value="dev">
   	                Devoloper       	            </label>
        	        </span></p>
        	      <p><span>        	        <span class="textfieldRequiredMsg"></span></span> <span id="sprytextfield3">
   	              <label for="te">Email</label>
       	            <input class="form-control" input type="text" name="email" placeholder="Please Enter Your Email" style="width:50%" ><?php echo form_error('email'); ?>
       	            <span class="textfieldRequiredMsg"></span></span> <span id="sprytextfield4">
       	              <label for="tc">Company</label>
       	              <input class="form-control" input type="text" name="company" placeholder="Please Enter Your Company Name" style="width:50%" ><?php echo form_error('company'); ?>
       	              <span class="textfieldRequiredMsg"></span></span> <span id="sprytextfield5">
       	            <label for="tun">User Name</label>
        	        <input class="form-control" input type="text" name="user_name" placeholder="Please Enter Your User Name" style="width:50%" ><?php echo form_error('user_name'); ?>
        	        <span id="sprytextfield6">
        	          <label for="tpw">Password</label>
        	          <input class="form-control" input type="password" name="password" placeholder="Please Enter Your Password" style="width:50%" ><?php echo form_error('password'); ?>
        	          <span class="textfieldRequiredMsg"></span></span> <span id="sprytextfield7">
        	            <label for="tpw2"> Confirm Password</label>
        	            <input class="form-control" input type="password" name="cpassword" placeholder="Please Re Enter Your Password" style="width:50%" ><?php echo form_error('cpassword'); ?>
        	            <span class="textfieldRequiredMsg"></span></span>      	          </p>
        	      <table width="385"  cellspacing="50px">
        	        <tr>
        	          <th width="75"> <button type="submit" class="btn btn-lg btn-primary"method="post">Create Account</button>
      	            </th>
        	          <th width="154"> <input name="Reset" type="reset" class="btn btn-lg btn-primary" >
      	            </th>
      	          </tr>
      	        </table>
        	      <p>&nbsp;</p>
        	    </form>
			
        	  </div>
        	</div>
        </div>
        <div class="row">
          <div class="span6">
          </div>
            <div class="span6">
              <div class="tabbable"></div>
          </div>
            <!-- End Tabs -->
      </div>
        <!-- End Alerts/Tabs Section -->
        
        <div class="row">
        	<div class="span12"></div>
        </div>
        <div class="row">
          <div class="span6">
          </div>
      </div>
        <div class="row">
          <div class="span12">
            <nav class="icons-example"> </nav>
                
            </div>	
        </div>
        <!-- End Social Icons -->
        
    </div>
</div>
<!-- End Shortcodes Section -->
<!-- Footer -->
<footer>
	<p class="credits">&copy;2013 Brushed. <a href="http://themes.alessioatzeni.com/html/brushed/" title="Brushed | Responsive One Page Template">Brushed Template</a> by <a href="http://www.alessioatzeni.com/" title="Alessio Atzeni | Web Designer &amp; Front-end Developer">Alessio Atzeni</a></p>
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->

<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="<?php echo base_url();?>_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="<?php echo base_url();?>_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="<?php echo base_url();?>_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="<?php echo base_url();?>_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="<?php echo base_url();?>_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="<?php echo base_url();?>_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="<?php echo base_url();?>_include/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="<?php echo base_url();?>_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="<?php echo base_url();?>_include/js/main.js"></script> <!-- Default JS -->
<!-- End Js -->

</body>
</html>