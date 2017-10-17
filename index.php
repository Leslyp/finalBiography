<?php 
	// section variable lets us find which page is selected to show that it's selected on nav
	$section = "home";

	include("lib/inc/header.php");
?>

<main class="containHome">
	<!-- section Description of all pages -->
	<div class="home">
		<h1>Welcome </h1>
		<ul>
			<li>On my Home page you will find a summary of my experience with RoadtoHire.</li>
    	<li>On my Biography page you will find a few fun facts about me.</li>
    	<li>On my Challenges page you will find a collection of my different challenges.</li>
    	<li>On my Resume page you will find my resume and a link to download the pdf version.</li>
    	<li>On my Contact page you will find an area to contact me and leave any comments or concerns.</li>
		</ul>	    	
	</div> 

	<!-- div Experience -->
	<div class="home">
		<h2>My Experience with RoadtoHire</h2>
  	<p>Throughout my time in the RoadtoHire program, I have gained many new skills. Some of which pretain to my coding abilities and knowledge and others that have helped improve my professional development. I am grateful for all the resources and time this program has allowed us to utilize and for all the help our advisors/mentors have given us. This expeirence has been tough but rewarding.</p>
	</div> 

	<!-- <div id="r2hClass">
		<img src="./lib/img/r2hClass.png" alt="RoadtoHire class">
	</div> -->

	<div id="homePictures">
	  <img class="bottom" src="./lib/img/r2hClass.png" />
	  <img class="top" src="./lib/img/r2hClass2.png" />
	</div>	   
</main>




 <?php include("./lib/inc/footer.php"); ?>