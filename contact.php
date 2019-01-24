<?php 
include("includes/header.php");
 
?>


	<!----feature image Section
		=================================================================-->
	<section class="feature-img" data-type="background" data-speed="2">
		<h1>Get In Touch</h1>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-sm-4" id="social">
				<div>
					<img class="img-responsive img" src="asset/images/peter.jpg" width="100" height="100" align="center">
				<h3 class="lead text-center" >Let's Get In Touch</h3>
					<p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
				</div>
				<div id="social-icon">
					<a class="whatsapp" href="#"><i class="fa fa-whatsapp"></i></a>
					<a class="facebook" href="#"><i class="fa fa-facebook" style="padding-right: 8px;"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="link" href="#"><i class="fa fa-linkedin"></i></a>
					<a class="youtube" href="#"><i class="fa fa-youtube"></i></a>
					<a class="pin" href="#"><i class="fa fa-pinterest"></i></a>
					<a class="inst" href="#"><i class="fa fa-instagram"></i></a>
					
				</div>
			</div>
			<div class="col-sm-8">
				<form class="form">
					<div class="form-group">
						<label for="name">User name:</label>
					    <input type="name" class="form-control" id="name" required>
					</div>
					<div class="form-group">
						<label for="email">Email address:</label>
					   <i class="fa fa-email"></i><input type="email" class="form-control" id="email" required>
					</div>
					<div class="form-group">
						<label for="subject">Subject:</label>
					    <input type="email" class="form-control" id="subject" required>
					</div>
					<div class="form-group">
					   <label for="message">Message:</label><br>
					   <textarea rows="7" class="form-control">
					   	
					   </textarea>
					</div>
				  <button type="submit" class="btn btn-success form-control">Get In Touch &raquo;</button>
				</form>
			</div>
		</div>
	</div>

<?php

include("includes/footer.php");

?>