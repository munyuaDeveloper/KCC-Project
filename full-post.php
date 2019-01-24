<?php 
include("includes/header.php");
 
?>
	<!----feature image Section
		=================================================================-->
	<section class="feature-img" data-type="background" data-speed="0.5">
		<h1>Full Article</h1>
	</section>

		<!----main content image Section
		=================================================================-->
	<section>
		<div id="main-content" class="container">
			<div class="row">
				<div id="content" class="col-sm-8">
					<article>
						<div class="post-header">
							<div class="banner">
								New
							</div><!-- col-sm-2-->

							<div class="post-title" >
								<h3 class="text-center">Post Title Here</h3>
							</div><!-- post-title-->

							<div class="post-comments-badge">
								<a href=""><i class="fa fa-comment">100</i></a>
							</div>
						</div><!-- post-header -->

						<div class="details">
							<i class="fa fa-user"> </i>Munyua
							<i class="fa fa-clock-o"> </i>9:20:33
							<i class="fa fa-calendar"></i>5/09/2018
							<i class="fa fa-tag"> </i><a href=""> Products</a>,<a href="">Products</a>, <a href="">Products</a> 
						</div><!--post-details-->

						<div class="post">
							<img src="asset/images/s2.jpg" class="img-thumbnail img-responsive" align="center">
							<div class="post-excerpt">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
								<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
								<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
								<p
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
								<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>

							</div><!-- post-->
						</div><!-- post-->
						<form class="form">
							<h4 class="text-center">Leave Your Comment Here</h4>
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
						  <button type="submit" class="btn btn-success form-control">Submit Your Comment &raquo;</button>
						</form>
					</article>

				</div><!-- col-sm-8-->


<?php
include("includes/sidebar.php");
            
include("includes/footer.php");

?>