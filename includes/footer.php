
<div class="container">
	  <!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header" style="padding:35px 50px;">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
	        </div>
	        <div class="modal-body" style="padding:40px 50px;">
	          <form role="form" action="" method="post">
	            <div class="form-group">
	              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
	              <input type="text" class="form-control" name="email" id="usrname" placeholder="Enter email">
	            </div>
	            <div class="form-group">
	              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
	              <input type="text" class="form-control" name="password" id="psw" placeholder="Enter password">
	            </div>
	            <div class="checkbox">
	              <label><input type="checkbox" value="" checked>Remember me</label>
	            </div>
	              <button type="submit"  name="Login" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
	          </form>
	        </div>
	        <div class="modal-footer">
	          <button type="submit"class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
	          <p>Not a member? <a href="register.php">Sign Up</a></p>
	          <p>Forgot <a href="#">Password?</a></p>
	        </div>
	      </div>
	      
	    </div>
	  </div> 
	</div>
<?php

if(isset($_POST['Login'])){
	$c_email=$_POST['email'];
	$c_pass=$_POST['password'];

	$login_query = "SELECT* from farmers where email = '$c_email' AND password ='$c_pass'";
	$run_query=mysqli_query($connect,$login_query);
	$check_details=mysqli_num_rows($run_query);
	if($check_details==0){
		echo "<script>alert('Password or email is incorrect! Please try again!')</script>";
		exit();
	}
	else{
		$_SESSION['email']=$c_email;
		
		echo"<script>window.open('account.php','_self')</script>";
	}
}

?>

	<!----Footer Section
		=================================================================-->
	<footer >
		 <a href="#myPage" title="To Top">
		    <i class="fa fa-chevron-up"></i>
		  </a>
		  <div class="container-fluid footer" style=" margin-top: 10px; padding: 15px;">
		<div class="row">
			<div class="col-sm-3">
				<img src="asset/images/cans.jpg" width="300" height="200">
			</div>
			<div class="col-sm-6" style="color: white;">

				<div id="iconsfooter">
					<h2>Get In Touch!</h2>
					<i class="fa fa-facebook"></i>
					<i class="fa fa-twitter"></i>
					<i class="fa fa-whatsapp"></i>
					<i class="fa fa-youtube"></i>
					<i class="fa fa-instagram"></i>
					<i class="fa fa-linkedin"></i>
					
				</div>
				<div style="color: white;">
					<h4 class="text-center">Call us On:</h4>
					<h4 class="text-center"><i class="fa fa-phone"></i> 0705xxxxxx</h4>
					<h4 class="text-center">Email Us On:</h4>
					<h4 class="text-center"><i class="fa fa-envelope"></i>  endarashakcc@gmail.com</h4>
				</div>
			</div>
			<div class="col-sm-3">
				<img src="asset/images/foo.jpg" width="300" height="200">
			</div>
		</div>
	</div>
	<div style="margin-bottom: 20px;">
		<p >&copy;2018 Created by Peter munyua</p>
	</div>
		
	</footer>





<!--JavaScript file placed at the bottom to make the page load faster!
	==================================================-->
<script src="asset/js/jquery2.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
	<script src="asset/js/main.js"></script>
<script src="asset/js/wow.min.js"></script>
<script >
  new WOW().init();
</body>
</html>