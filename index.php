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
			<li>Home - Click to read a summary of my experience with RoadtoHire.</li>
    	<li>Biography - If you want to learn a few fun facts about me, venture over to my biography page.</li>
    	<li>Challenges - Go here to look at a collection of my different challenges.</li>
    	<li>Resume - Take a look at my resume or click the link to download the pdf version.</li>
    	<li>Contact - Feel free to go here to contact me and leave any comments or concerns.</li>
		</ul>	    	
	</div> 

	<!-- div Experience -->
	<div class="home">
		<h2>My Experience with RoadtoHire</h2>
  	<p>Throughout my time in the RoadtoHire program, I have gained many new skills. Some of which pertain to my coding abilities and knowledge and others that have helped improve my professional development. I am grateful for all the resources and time this program has allowed us to utilize and for all the help our advisors/mentors have given us. This experience has been tough but rewarding.</p>
	</div> 

	<div id="togglePic">
		<p id="cf_onclick">Click me to toggle</p>
	</div>

	<div id="hidePictures" class="shadow">
	  <img class="bottom" src="./lib/img/r2hClass.png" alt="road2hire class" />
	  <img class="top" src="./lib/img/r2hClass2.png" alt="road2hire class"/>
	</div>
 
</main>




 <?php include("./lib/inc/footer.php"); ?>