<?php

session_start();
include "header.php";

?>

<body>
<section id="cart_items">
<div class="wrapper">

		<div class="container">
			
			<div class="step-one">
				<h2 class="heading">Step1</h2>
			</div>
			<!--/checkout-options-->

			<div class="register-req">
				<p>Please give proper details to easily get items at your delivered address.</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">

					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form name="form1" action="" method="post">
									<input type="text" placeholder="First Name" name="firstname" required pattern="[A-Za-z]+" title="please enter valid firstname[a-z only]" style="width:350px;
									height: 30px; background-color: #0480be">
									<input type="text" placeholder="Last Name" name="lastname" required pattern="[A-Za-z]+" title="please enter valid lastname[a-z only]" style="width:350px;
									height: 30px; background-color: #0480be">
									<input type="text" placeholder="Email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="please enter valid email address" style="width:350px; 
									height: 30px; background-color: #0480be">
									<input type="text" placeholder="Resi. Address" name="resi" required style="width:350px; height: 30px; background-color: #0480be">
									<input type="text" placeholder="City" name="city" required pattern="[A-Za-z]+" style="width:350px; height: 30px; background-color: #0480be">
									<input type="text" placeholder="Pincode" name="pincode" required pattern="[0-9]{6}" title="please enter valid pincode[0-9 and 6 digit only]" style="width:350px; height: 30px;background-color: #0480be">
									<input type="text" placeholder="Contact Number" name="cno" required pattern="[0-9]{10}" title="please enter valid contacet number[0-9 and 10 digit only]" style="width:350px; height: 30px; background-color: #0480be">
									<input type="submit" name="submit1" value="save" style="background-color:#843534; color:white; font-weight:bold">

								</form>
							</div>

						</div>
					</div>

				</div>
			</div>

			<?php

			if(isset($_POST["submit1"]))
			{
				include "dbconnect.php";
				mysqli_query($link,"insert into checkout_address values('','$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[resi]','$_POST[city]','$_POST[pincode]','$_POST[cno]')");

				$res=mysql_query($link,"select id from checkout_address order by id desc limit 1");
				while ($row=mysqli_fetch_array($res)) {
					$_SESSION["order_id"]=$row["id"];
				}
				?>
				<script type="text/javascript">
					
					alert("Click Ok to transfer you to in PayPal");
					setTimeout(function(){
						window.location="paypal.php";
					},4000);
				</script>
				<?php
			}
			?>

						
	</section> <!--/#cart_items-->




</body>

<?php
include "footer.php";
?>