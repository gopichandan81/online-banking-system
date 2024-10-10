<?php ob_start() ?>

<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="css/customer_reg_form.css"/>
    
	<?php include'header.php';  ?>
    </head>
    <body>
    <div class="container_regfrm_container_parent">
	<h3>Online Account Opening Form</h3>
	<div class="container_regfrm_container_parent_child">
		<form method="post">
				 <input type="text" name="name" placeholder="Name" required="" pattern="[a-z,A-Z]*"/>
				 <select name ="gender" required >
					  <option class="default" value="" disabled selected>Gender</option>
					  <option value="Male" required >Male</option>
					  <option value="Female">Female</option>
					  <option value="Others">Others</option>
				</select>
				 <input type="text" name="mobile" placeholder="Mobile no (10 digits)" pattern="\d{10}" maxlength=10  required=""/>
				 <input type="Email" name="email" placeholder="Email (gopi@gmail.com)" required="" />
				 <input type="text" name="landline" placeholder="Landline no 080-xxxx-xxxx" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" maxlength=11 required=""  />
				 <input type="text" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')" required="" />
				 <input type="text" name="pan_no" placeholder="PAN No (ABCDE1234F)" required="" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}"/>
				 <input type="text" name="aadhaar" placeholder="aadhaar No(xxxx-xxxx-xxxx)" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" maxlength=12  required=""  />
				 <input class="address" type="text" name="homeaddrs" placeholder="Home Address" required=""  />
				 <input class="address" type="text" name="officeaddrs" placeholder="Office Address" />
				 <input type="text" name="country" placeholder="INDIA" value="INDIA" readonly="readonly" />



				 <select name ="state" required >
					  <option class="default" value="" disabled selected>State</option>
					  
					  <option value="Karnataka">Karnataka</option>
					  <option value="Andhra pradesh">Andhra pradesh</option>
					  <option value="Telangana">telangana</option>
					  <option value="Tamil nadu">Tamil nadu</option>
					  <option value="kerala">kerala</option>
					  <option value="Maharashtra">Maharashtra</option>
					  <option value="Chhattisgarh">Chhattisgarh</option>
					  <option value="Gujarat">Gujarat</option>
				</select>



				 <select name ="city" required >
					  <option class="default" value="" disabled selected>City</option>
					  <option value="Bangalore">Bangalore</option>
					  <option value="Mysuru">Mysuru</option>
					  <option value="Mangalore">Mangalore</option>
					  <option value="Hyderabad">Hyderabad</option>
					  <option value="Visakhapatnam">Visakhapatnam</option>
					  <option value="Tirupati">Tirupati</option>
					  <option value="Warangal">Warangal</option>
					  <option value="Karimnagar">Karimnagar</option>
					  <option value="Chennai">Chennai</option>
					  <option value="Madurai">Madurai</option>
					  <option value="Coimbatore">Coimbatore</option>
					  <option value="Thiruvananthapuram">Thiruvananthapuram</option>
					  <option value="Kochi">Kochi</option>
					  <option value="Tirur">Tirur</option>
					  <option value="Mumbai">Mumbai</option>
					  <option value="Pune">Pune</option>
					  <option value="Nagpur">Nagpur</option>
					  <option value="">Nashik">Nashik</option>
					  <option value="Raipur">Raipur</option>
					  <option value="Bijapur">Bijapur</option>
					  <option value="Bastar">Bastar</option>
					  <option value="Ahmedabad">Ahmedabad</option>
					  <option value="Surat">Surat</option>
					  <option value="Jamnagar">Jamnagar</option>
					  <option value="Vadodara">Vadodara</option>
					  
				</select>



				 
				 <input type="text" name="pin" placeholder="Pin Code" required />
				 <input type="text" name="arealoc" placeholder="Area/Locality" required />
				 <input type="text" name="nominee_name" placeholder="Nominee Name (If any)" />
				 <input type="text" name="nominee_ac_no" placeholder="Nominee Account no"  />
				 
				 <select name ="acctype" required >
					  <option class="default" value="" disabled selected>Account Type</option>
					  <option value="Saving">Saving</option>
					  <option value="Current">Current</option>
				</select>
				<input type="submit" name="submit" value="Submit">
				</form>
         </div>
		 </div>
		 
<?php include'footer.php';?>
    
</body>
</html>


<?php 

if(isset($_POST['submit'])){

	session_start();
	$_SESSION['$cust_acopening'] = TRUE;
	$_SESSION['cust_name']=$_POST['name'];
	$_SESSION['cust_gender']=$_POST['gender'];
	$_SESSION['cust_mobile']=$_POST['mobile'];
	$_SESSION['cust_email']=$_POST['email'];
	$_SESSION['cust_landline']=$_POST['landline'];
	$_SESSION['cust_dob']=$_POST['dob'];
	$_SESSION['cust_pan=']=$_POST['pan_no'];
	$_SESSION['cust_aadhaar']=$_POST['aadhaar'];
	$_SESSION['cust_homeaddrs']=$_POST['homeaddrs'];
	$_SESSION['cust_officeaddrs']=$_POST['officeaddrs'];
	$_SESSION['cust_country']=$_POST['country'];
	$_SESSION['cust_state']=$_POST['state'];
	$_SESSION['cust_city']=$_POST['city'];
	$_SESSION['cust_pin']=$_POST['pin'];
	$_SESSION['arealoc']=$_POST['arealoc'];
	$_SESSION['nominee_name']=$_POST['nominee_name'];
	$_SESSION['nominee_ac_no']=$_POST['nominee_ac_no'];
	$_SESSION['cust_acctype']=$_POST['acctype'];
	
	header('location:cust_regfrm_confirm.php');
	
	
}

?>