<?php 
$connection = mysqli_connect("localhost", "root", "","ab");
$sql = "SELECT * FROM post WHERE type='Family' ";
$result = mysqli_query($connection,$sql);
?>
<html>
<head>
    <title>Family | Abash</title>
    <link rel="icon"  href="img/logo.png">
	<link href='css/style.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<!-- Menu -->
	 <div class="logo_menu">
	    <div class="neon">
		    <img src="img/logo.png">
	    </div>
	
		<ul class="main-nav">
		    <li class="active"><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="#contact">Contact us</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="register.php">Register</a></li>
			
		</ul>
	</div>
	
	<!-- image slider -->	
	       <div class="slider">
              
                  <img class="mySlides" src="img/1.jpg">
				  <img class="mySlides" src="img/2.jpg">
				  <img class="mySlides" src="img/3.jpg" >
				  <img class="mySlides" src="img/4.jpg" >
				  <img class="mySlides" src="img/5.jpg">
			
            </div>
			
		<!-- ads -->		

	  <div class="search">
	         <h2 style="color:darkcyan">Search in abash</h2></br>
	       
	        <ul>
	           <li>
			   <font face="serif" size="4" color="dark skyblue">Select Type:</font>  
			   <a href="bechalor.php" style="text-decoration: none;color: black"><label  name="type1" value="bachelor" title="click here">Bachelor ||</label></a>
			   <a href="family.php" style="text-decoration: none;color: black"><label  name="type" value="family" title="click here">Family ||</label></a>
			  <a href="office.php" style="text-decoration: none;color: black"><label  name="type" value="office" title="click here">office ||</label></a>
			   <a href="apart.php" style="text-decoration: none;color: black"><label name="type" value="Apartment_For_Sell" title="click here">Apartment For Sell ||</label></a>
			   <a href="index.php" style="text-decoration: none;color: black"><label name="type"  title="click here">All</label></a>
			   
                 
			   </li>
			</ul>
		    
		    
			
	     
	  </div>		
			
		<div class="product_area">
		  <ul>
              <?php
              if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){ ?>
                        <li>
                            <a href="#">
                                <div class="single_product">
                                    <img src=<?= $row['image']; ?>>
                                    <div class="single_product_text">
                                        <h2><?= $row['address']; ?></h2>
                                        <p>Phone No:<?= $row['phone_no']; ?></p>
                                        <p>House Type:<?= $row['type']; ?></p>
                                        <p>Rent Amount:<?= $row['rent_price']; ?> taka</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php }
                }
              ?>
			  
		  </ul>
		</div>	
			
		

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
	           
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