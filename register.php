<?php

include("includes/header.php");

if (@$_SESSION['email']) {
	echo"<script>alert('You already have an account. Please logout and try again')</script>";
	echo"<script>window.open('index.php','_self')</script>";
	die();
}
?>
<!----feature image Section
    =================================================================-->
<section class="feature-img" data-type="background" data-speed="0.5">
  <h1 style="color: yellow;">Welcome To Endarasha Co-Operative Society!</h1>
</section>

<section id="register">
    <div id="main-content" class="container">
        <div class="row">
            <div id="content" class="col-sm-8">
                <span class="alert alert-info">Welcome To Our Co-Operative. We Are Glad You Have Decided To Join Us</span>
                <form class="form" action="" method="post">
					<div class="form-group">
						<label for="name">First Name:</label>
					    <input type="name" class="form-control" name="firstname" required>
					</div>
                    <div class="form-group">
						<label for="name">Last Name:</label>
					    <input type="name" class="form-control" name="lastname" required>
					</div>
					<div class="form-group">
						<label for="email">Email address:</label>
					    <input type="email" class="form-control" name="email" required>
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
					    <input type="pwd" class="form-control" name="pass" required>
					</div>
					<div class="form-group">
						<label for="pwd">Confirm Password:</label>
					    <input type="pwd" class="form-control" name="pwd" required>
					</div>
                    <div class="form-group">
						<label for="address">Address:</label>
					    <input type="address" class="form-control" name="address" required>
					</div>
                    <div class="form-group">
						<label for="contact">Contact:</label>
					    <input type="contact" class="form-control" name="contact" required>
					</div>
                    
					<div class="form-group">
						<label for="number_cows">Number of Cows:</label>
					    <input type="number_cows" class="form-control" name="number_cows" required>
					</div>
                    <div class="form-group">
						<label for="Number_litres">Litres Per Day:</label>
					    <input type="Number_litres" class="form-control" name="Number_litres" required>
					</div>
					
				  <button type="submit" name="register" class="btn btn-success form-control">Register Now &raquo;</button>
				</form>
            </div><!-- col-sm-8-->

	            <?php
	            if (isset($_POST['register'])) {

	            	$firstname 		= $_POST['firstname'];
	            	$lastname	    = $_POST['lastname'];
	            	$email 			= $_POST['email'];
	            	$pass 			= $_POST['pass'];
	            	$pwd			= $_POST['pwd'];
	            	$address 		= $_POST['address'];
	            	$contact 		= $_POST['contact'];
	            	$number_cows	= $_POST['number_cows'];
	            	$Number_litres  = $_POST['Number_litres'];
	            	$farmer_id = rand(1000, 100000);
	            	if($pass==$pwd){
	            		$password = $pass; 
	            	}else{
	            		echo " <script>alert('The password entered does not match!')</script>";
	            		die();
	            	}

	            	$checkDetails   = "SELECT * from farmers where email = '$email' ";
	            	$check = mysqli_query($connect, $checkDetails);
	            	$num = mysqli_num_rows($check);
	            	if($num ==0){
	            		$insert_data = "INSERT into farmers (farmer_id,firstname, lastname, email, password, address, contact, number_cows, litre_day) values('$farmer_id', '$firstname', '$lastname', '$email', '$password', '$address', '$contact', '$number_cows', '$Number_litres' )";
	            		$run_query = mysqli_query($connect,$insert_data );
	            		if($run_query){
	            			$_SESSION['email'] =$email;
	            			
	            			echo "<script>window.open('account.php', '_self')</script>";
	            		}else{
	            			echo " <script>alert('There was a problem creating your account!')</script>";
	            		}

	            	}else{
	            		echo " <script>alert('The email entered is already taken!')</script>";
	            		die();
	            	}

	            }



	            ?>
            	<?php include("includes/sidebar.php");?>
			</div><!-- row-->
		</div><!-- main-content-->
		
	</section>

<?php

include("includes/footer.php");

?>