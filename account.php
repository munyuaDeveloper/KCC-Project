<?php 
include("includes/header.php");
 
?>
	<!----feature image Section
		=================================================================-->
	<section class="feature-img" data-type="background" data-speed="0.5">
		<h1>Welcome: <strong style="color: yellow;" class="hidden-xs"><?php echo $_SESSION['email']; ?></strong></h1>
	</section>

<?php

if (@!$_SESSION['email']) {
	echo"<script>alert('You have to login to access this page!!!!')</script>";
	echo"<script>window.open('index.php','_self')</script>";
	die();
}

?>

		<!----main content image Section
		=================================================================-->
	<section>
		<div id="main-content" class="container">
			<div class="row">
				<div id="content" class="col-sm-8">
					<article>
						<div class="title">
							
						</div>
						<div class="personal-info table-responsive">
							<table class="table table-bordered  table-condensed table-hover">
							    <thead>
							    	<tr>
							    		<th colspan="4">Fermer's Information</th>
							    	</tr>
							      <tr>
							        <th></th>
							        <th>Details</th>
							        <th>Update</th>
							        
							      </tr>
							    </thead>
							    <tbody>
							      <tr>
							        <td>First Name</td>
							        <td id="firstname">Peter</td>
							        <td><button onclick="EditFirstname()"><i class="fa fa-edit"></i></button> <button><a href=""><i class="fa fa-save"></i></a></button>  </td>
							       
							      </tr>
							      <tr>
							        <td>Last Name</td>
							        <td id="lastname">Munyua </td>
							       <td><button onclick="EditLastname()"><i class="fa fa-edit"></i></button> <button><a href=""><i class="fa fa-save"></i></a></button>  </td>
							      </tr>
							      <tr>
							        <td>Farmer's Id</td>
							        <td id="firstname">207</td>
							        <td><button><i class="fa fa-edit"></i></button> <button> <a href=""><i class="fa fa-save"></i></a></button> </td>
							      </tr>
							      <tr>
							        <td>Email</td>
							        <td id="email">munyuapeter06@gmail.com </td>
							        <td><button onclick="EditEmail()"><i class="fa fa-edit"></i></button> <button><a href=""><i class="fa fa-save"></i></a> </button> </td>
							      </tr>
							      <tr>
							        <td>Contact</td>
							        <td id="contact">+254 705984772 </td>
							        <td><button onclick="EditContact()"><i class="fa fa-edit"></i></button> <button><a href=""><i class="fa fa-save"></i></a> </button> </td>
							      </tr>
							      <tr>
							        <td>Address</td>
							        <td>Endarasha village </td>
							        <td><button onclick="EditAddress()"><i class="fa fa-edit"></i></button> <button> <a href=""><i class="fa fa-save"></i></a> </button></td>
							      </tr>
							      <tr>
							        <td>Number of cows</td>
							        <td id="number_cow">10 </td>
							        <td><button onclick="EditNumberCow()"><i class="fa fa-edit"></i></button> <button> <a href=""><i class="fa fa-save"></i></a></button> </td>
							      </tr>
							      <tr>
							        <td>Average Milk/day</td>
							        <td id="average_milk">40 Litres </td>
							        <td><button onclick="EditAverageMilk()"><i class="fa fa-edit"></i></button> <button> <a href=""><i class="fa fa-save"></i></a> </button></td>
							      </tr>
							    </tbody>
							 </table>
						</div>
					</article>
					<article>
						<div class="title">
							
						</div>
						<div class="finance table-responsive">
							<table class="table table-bordered  table-condensed table-hover">
							    <thead>
							    	<tr>
							    		<th colspan="4">Fermer's Financial Records</th>
							    	</tr>
							      <tr>
							        <th>Date</th>
							        <th>Quantity(L)</th>
							        <th>Total Payble</th>
							        <th>Status</th>
							        
							      </tr>
							    </thead>
							    <tbody>
							      <tr>
							        <td>10/08/2018</td>
							        <td>20</td>
							        <td>600</td>
							        <td>Not paid</td>
							       
							      </tr>
							      <tr>
							        <td>10/08/2018</td>
							        <td>20</td>
							        <td>600</td>
							        <td>Not paid</td>
							       
							      </tr>
							      <tr>
							        <td>10/08/2018</td>
							        <td>20</td>
							        <td>600</td>
							        <td>Not paid</td>
							       
							      </tr>
							      <tr>
							        <td>10/08/2018</td>
							        <td>20</td>
							        <td>600</td>
							        <td>Not paid</td>
							       
							      </tr>
							      <tr>
							        <td>10/08/2018</td>
							        <td>20</td>
							        <td>600</td>
							        <td>Not paid</td>
							       
							      </tr>
							      <tr>
							        <td>Total</td>
							        <td>100</td>
							        <td>3000</td>
							        <td>Not paid</td>
							       
							      </tr>
							    </tbody>
							 </table>
						</div>
					</article>
					<article>
						<div class="title">
							
						</div>
						<div class="finance table-responsive">
							<table class="table table-bordered  table-condensed table-hover">
							    <thead>
							    	<tr>
							    		<th colspan="6">Services Booked</th>
							    	</tr>
							      <tr>
							        <th>Date</th>
							        <th>Service</th>
							        <th>Quantity</th>
							        <th>Total Cost</th>
							        <th>Status</th>
							        
							      </tr>
							    </thead>
							    <tbody>
							      <tr>
							        <td>10/08/2018</td>
							        <td>AI</td>
							        <td>1</td>
							        <td>6000</td>
							        <td>Delivered</td>
							       
							      </tr>
							      <tr>
							        <td>20/08/2018</td>
							        <td>Dairy Feeds</td>
							        <td>3 bag</td>
							        <td>4000</td>
							        <td>Delivered</td>
							       
							      </tr>
							      <tr>
							        <td>1/08/2018</td>
							        <td>Hay</td>
							        <td>10 bundles</td>
							        <td>1600</td>
							        <td>Not delivered</td>
							       
							      </tr>
							      <tr>
							        <td>10/08/2018</td>
							        <td>Others</td>
							        <td>N/A</td>
							        <td>1600</td>
							        <td>Not delivered</td>
							       
							      </tr>
							      <tr>
							        <td>10/08/2018</td>
							        <td>AI</td>
							        <td>2</td>
							        <td>600</td>
							        <td>Not delivered</td>
							       
							      </tr>
							    </tbody>
							 </table>
						</div>
					</article>
					<p class="lead text-center">Peter, do you wish to book a service? <a class="label label-sm label-info" href="#"> Book a service</a></p>
				</div><!-- col-sm-8-->
			<?php include("includes/sidebar.php");?>
			</div><!-- row-->
		</div><!-- main-content-->
		
	</section>

	
<?php

include("includes/footer.php");

?>