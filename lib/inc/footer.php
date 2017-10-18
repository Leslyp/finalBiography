		<!-- create footer with social media links -->
	  <footer>
	  	<div class="containFooter">
	  		<div class="icons">
		  		<a href="https://www.linkedin.com/in/lesly-perez-922806146/" target="_blank"><img src="./lib/img/linkedinIcon.png" alt="linkedin logo"></a>
			  	<a href="http://www.roadtohire.org/" target="_blank"><img src="./lib/img/r2h.jpg" alt="RoadtoHire link"></a>
		  	</div>
		  	<div class="footerText">
		  		<!-- Disclaimer for photos -->
			    <p class="disclaimer">Disclaimer: All graphics are used for educational purposes only, and not for profit, in accordance with the Fair Use Act. All trademarks, trade names, or logos mentioned or used are the property of their respective owners.</p>
			  	<p class="disclaimer">&copy; <?= date('Y') ?> Lesly Perez</p>
		  	</div>
	  	</div>	  	
	  </footer>
	 <!-- call jquery validation plugin -->
		<script 
			src='./lib/js/jqueryValidate.js'>
		</script>	
		<script type="text/javascript">
			$(document).ready(function() {
			  $("#cf_onclick").click(function() {
			  // this triggers the class transparent to style the id
			  $("#hidePictures img.top").toggleClass("transparent");
			});
		});
		</script>
		
  </body>
</html>