<html>
<head>
    <title>Post Add</title>
    <link rel="icon"  href="img/logo.png">
	<link href='css/style.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
 	<script src="js/post1.js"></script>

</head>

<body>

<?php
             
	$connection = mysqli_connect("localhost", "root", "","ab");

	//Selecting Database from Server
	
	if(isset($_POST['submit']))
	{
	//Fetching variables of the form which travels in URL
    
    $un = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['phn'];
    $address = $_POST['address'];
    $rent_price=$_POST['rnp'];
    $date=$_POST['av'];
    $ty=$_POST['op'];
     
  
    if($_FILES['image'])
   	    {
   	    	$target_dir = "img/";
   	    	$target_file = $target_dir . basename($_FILES["image"]["name"]);
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
            {
                 $img = $target_file;
            }else{
            	 $img = "";
            }
   	    }

    $sql = "INSERT INTO `post`(`un`,`name`, `email`, `address`, `rent_price`, `date_a`, `phone_no`,`type`,`image`) VALUES ( '$un','$name','$email','$address',$rent_price,'$date','$contact', '$ty','$img')";
   
	// $sql = "INSERT INTO post(name,email,address,rent_price,date_a,phone_no,type,image) VALUES ('$name', '$email','$address',$rent_price,'$date','$contact','$type', '$img')";
    $result = mysqli_query($connection,$sql);
    
    // var_dump($result);



}
?>		



<!-- Menu -->
	 <div class="logo_menu">
	    <div class="neon">
		    <img src="img/logo.png">
	    </div>
	
		<ul class="main-nav">
		    <li><a href="after_login.php">Home</a></li>
			<li><a href="about_loggedin.php">About</a></li>
			<li><a href="#contact">Contact us</a></li>
			<li class="active"><a href="post.php">Post ad</a></li>
			<li><a href="login.php">Logout</a></li>			
		</ul>
	</div>
	<br/><br/><br/><br/><br/>
	<hr style="border:2px solid green"></hr>	
	<br/><br/>
	
		<div class="form_div">
		  
				<div class="title"><h2>Please fill up the bellow information</h2></div>
            <form class="quote" accept="post.php" method="post" name="myForm" onsubmit="return validateForm()" enctype="multipart/form-data" >
              <div>
                <label>Username</label><br>
                <input type="text" class="input"  name="username" placeholder="Username">
              </div>
			  
			  <div>
                <label>Name</label><br>
                <input type="text" class="input"  name="name" placeholder="Name">
              </div>
              <div>
                <label>Email</label><br>
                <input type="email" class="input"  name="email" placeholder="Emial Address">
              </div>
              <div>
                <label>Address</label><br>
               <textarea name="address" placeholder="Address"></textarea>
              </div>
			  <br/>
              <div>
                <label>Rent Amount</label><br>
                <input type="number" min="3000"   name="rnp" class="input"  placeholder="Amount">
              </div>
              <div>
              	
                <label>Available Date</label><br>
                <input type="Date" class="input" name="av" placeholder="Input Date">
				</div>
              <div>
                <label>Phone No.</label><br>
                <input type="number" class="input" name="phn" placeholder="Phone number">
              </div>
               <div>
               <label>TYPE:</label>  &nbsp;
                <select name="op">
                 <option selected>Select House Type</option>
 				 <option value="Bechalor">Bechalor</option>
 				 <option value="Family">Family</option>
 				 <option value="Apartment_For_Sell">Appartmet For Sell</option>
 				 <option value="Office">Office</option>
 				 
				</select>
              </div>
              <br>
              <div>
                <label>Upload a picture of your house or flat</label><br/><br/>
                <input type="file"  name="image" accept="image/jpg,image/png,image/jpeg" placeholder="Upload">
              </div>
			  <br/>
              <input class="btn sbtn" type="submit" name="submit" value="Post Ad" />
			  <button type="button" href='index.php'" class="btn c2btn">Cancel</button>
               

			
	
          </form>
          </div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/>
			
			<?php
$conn= mysqli_connect('localhost','root','','ab');
//connect to db here

$un ="";

if(isset($_POST['submit'])) {
	
  
	$un = $_POST['username'];
    
	
	$sql="SELECT * FROM regi WHERE un ='".$un."' ";
	$result = mysqli_query($conn,$sql);
	   
	 $row = mysqli_fetch_array($result);

	 
	 if ($un == $row['un'])
	 {
		
		header( "Location: index.php");
		 
	 }

	 else
	 {
		 $error="Please Check User name or Sign Up";
	 }
	

	
	
	} 	
	
	
 
?>
	

	           
</body>

<!-- Bottom -->
	<footer class="footer">
		
	<ul>
		<li>
		<div>
			<img src="img/logo.png">	
		</div>
		<div>
			<font face="serif" size="4" color="skyblue">Follow us:</font>
			<a href="#" class="call"><i class="fa fa-facebook-f" style="font-size:30px;width:23px;background-color:black;color:white;padding-right: 15px"></i></a>
			<a href="#" class="call"><i class="fa fa-google" style="font-size:30px;background-color:black;color:white;padding-right: 12px"></i></a>
			<a href="#" class="call"><i class="fa fa-twitter" style="font-size:30px;background-color:black;color:white;padding-right: 9px"></i></a>

		</div>
       </li>
	   <li>
		<div class="contact">
			<h1><a name="contact"></a>Contact With Us</h1><br>
			<p>Phone No: 0175263939</p><br>
			<p>Email: abash.bd@gmail.com</p>

		</div>
       </li>
	   
	</ul>
		
	</footer>
</html>