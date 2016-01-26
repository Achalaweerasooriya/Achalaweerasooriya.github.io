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
<link href="<?php echo base_url(''); ?>_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="<?php echo base_url(''); ?>_include/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="<?php echo base_url(''); ?>_include/css/supersized.css" rel="stylesheet">
<link href="<?php echo base_url(''); ?>_include/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="<?php echo base_url(''); ?>_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="<?php echo base_url(''); ?>_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="<?php echo base_url(''); ?>_include/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="<?php echo base_url(''); ?>_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="<?php echo base_url(''); ?>_include/css/responsive.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="<?php echo base_url(''); ?>_include/js/modernizr.js"></script>

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
<!-- Our Shortcodes Section -->
<div id="shortcodes" class="page">
	<div class="container">
    
    	<!-- Title Page -->
        <div class="row">
            <div class="span12"></div>
        </div>
        <!-- End Title Page -->
        
        <!-- Start Accordion/Toggle Section --><!-- End Accordion/Toggle Section -->
        
        <div class="row">
        	<div class="span12">
        	  <h1 class="page-header">Login <small>Get complete control of your project</small> </h1>
              <form name="form1" method="post" action="<?php echo base_url();?>LoginController/validate">
                <p>  <?php echo $validate ?>
                    <label for="tun">User Name</label>
                    <input class="form-control"input type="text" name="user_name"  placeholder="Enter User Name" style="width:50%">
                  </p>
                <p>
                    <label for="tpw">Password </label>
                    <input class="form-control"input type="password" name="password" placeholder="Enter Password"style="width:50%" >
                </p>
                <table width="269" height="152"  cellspacing="50px">
                  <tr>
                    <th width="50" height="50"><a href="<?php echo base_url();?>LoginController/validate"> <button type="submit" class="btn btn-lg btn-primary">Login</button></a>
                    </th>
                   <th width="58">  <a href="<?php echo base_url();?>LoginController/SignUp"><button type="button" class="btn btn-lg btn-primary">Sign Up</button></a>
                    </th>
                  </tr>
                </table>
              </form>
		
        	</div>
        </div>
        
        <!-- Start Alerts/Tabs Section -->
        <div class="row">
        	<!-- Start Alerts -->
            <div class="span6">
              <h3 class="spec"><a href="fgtpwd.html">Forgot password?</a></h3>
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