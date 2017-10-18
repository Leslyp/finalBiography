<?php 
	// section variable lets us find which page is selected to show that it's selected on nav
	$section = "contact";

	include("lib/inc/header.php");
?>
<div id="container">
	<main class="contact">
		<h1>Contact Form</h1>
		<div id="contactMessage">
			<p>Contact me with any questions or concerns</p>
		</div>
		<form id="contactForm" action="#"  method="POST">	
		  <!-- name -->
		  <div class="nameArea">
		    <label for="firstName"><span>*</span>First Name:</label>
		    <input type="text" id="firstName" name="firstName" />
		  </div>
		  <div class="nameArea">
		    <label for="lastName"><span>*</span>Last Name:</label>
		    <input type="text" id="lastName" name="lastName" />
		  </div>
		  <!-- email-->
	   	<div class="emailArea">
		    <label for="email"><span>*</span>Email:</label>
		    <input type="email" id="email" name="email" />
	   	</div>
		  <!-- phone-->
	   	<div class="phoneNum">
		    <label for="phone"><span>*</span>Phone:</label>
		    <input type="tel" id="phone" name="phone" />
	   	</div>
		  <!-- comments/questions-->
	   	<div id="textarea">
		    <label for="comments">Comments/Questions:</label>
		    <textarea rows="6" cols="10" id="comments" name="comments"></textarea>
	   	</div>
		  <!-- save button-->
	   	<div>
		  	<button id="submitBtn" type="submit" name="submit" value="submit">Submit</button>
	   	</div>	   
		</form> 
	</main>
</div>



 <?php include("./lib/inc/footer.php"); ?>