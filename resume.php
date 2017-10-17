<?php 
	// section variable lets us find which page is selected to show that it's selected on nav
	$section = "resume";

	include("lib/inc/header.php");
?>

<main class="resume">
	<!-- personal info -->
	<div class="personal-info">
    <h2 id="resume-name">Lesly Perez</h2>
    <p>704-957-2387</p>
    <p>prezzie24@gmail.com</p>
    <p><a href="./lib/docs/LeslyPerezResume.pdf" id="resumeLink" target="blank">Download PDF</a></p>
	</div>

	<!-- objective -->
	<div>
		<h2 class="border">Objective</h2>
  	<p>I am a young enthusiastic adult eager to obtain a position as a software engineer in the constantly growing and changing technology field.</p>
	</div>

  <!-- skills -->
  <div>
    <h2 class="border">Skills</h2>
    <ul>
      <li>Ability to work well with others</li>
      <li>Responsible</li>
      <li>Organized</li>
      <li>Fluent in both English and Spanish</li>
      <li>Able to work with multiple coding languages, like HTML, CSS, JS, and PHP</li>
    </ul>
  </div>

  <!-- experience -->
  <div>
  	<h2 class="border">Experience</h2>
  	<h3>RoadtoHire Tech Academy</h3>

  	<p>Six months</p>

  	<p>Student</p>

    <ul>
    	<li>Learn new coding languages like HTML, CSS, PHP, and Javascript</li>
    	<li>Work on my profressional development skills</li>
    	<li>Focus on building team skills</li>
    </ul>
  </div>
  
  <!-- education -->
  <div>
  	<h2 class="border">Education</h2>

  	<h3>Phillip O. Berry Academy of Technology</h3>

  	<p>Gradution Date <time datetime="2017-06-16T07:00">June 16, 2017</time></p>

  	<p>Class Rank: 7 out of 342</p>

  	<p>High School Diploma</p>

  	<p>GPA</p>
    <ul>
    	<li>3.8 unweighted</li>
    	<li>4.8 weighted</li>
    </ul>
  </div>

</main>


 <?php include("./lib/inc/footer.php"); ?>