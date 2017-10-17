<?php 
	// set the default timezone to use. Available since PHP 5.1
	date_default_timezone_set('UTC');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
  	<meta name="viewport" content="width=device-width">
		<title>Biography Project</title>
		<link rel="stylesheet" type="text/css" href="./lib/css/style.css?v=<?php echo time(); ?>">
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

		<!-- jquery validation plugin -->
		<script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
		<script src="lib/js/form-validation.js?v=<?php echo time(); ?>"></script>
		<script src="lib/js/functions.js?v=<?php echo time(); ?>"></script>
		<!--put fonts in head so they load before js-->
	</head>
	<body>
		<header>	
			<!-- Use CSS background images if the image is not part of the content -->
 			<div>
 				<div class="banner"></div>
 			</div> 
	  	<nav>
	     	 <!-- id is used for dropdown class in mobile -->
	     	<ul id="myNavBar" class="nav-bar">
          <li id="logo"><a href="index.php">Lesly Perez</a></li>
          <li><a class="<?php if ($section == "home") {echo "selected";} ?>" href="index.php">Home</a></li>
	        <li><a class="<?php if ($section == "biography") {echo "selected";} ?>" href="biography.php">Biography</a></li>
	        <li><a class="<?php if ($section == "resume") {echo "selected";} ?>" href="resume.php">Resume</a></li>
	        <li><a class="<?php if ($section == "codepen") {echo "selected";} ?>" href="codepen.php">Challenges</a></li>
	        <li><a class="<?php if ($section == "contact") {echo "selected";} ?>" href="contact.php">Contact</a></li> 
          <!-- unicode character set = hamburger icon -->
          <!-- onClick calls js function when clicked, shows/ hides dropdown  -->
          <li class="home-icon"><a href="#" onClick="toggleMobileDropdown()">&#9776;</a></li> 
	    	</ul>
	    </nav>
		</header>