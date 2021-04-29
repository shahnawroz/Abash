
<html>
<head>
    <title>Home</title>
      

	<link href='css/style.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/login1.js"></script>
	
	<style>
                .error {color: #FF0000;}
     </style>
</head>

<body>

<?php
$conn= mysqli_connect('localhost','root','','ab');
//connect to db here

$error = "";
$un = $pass = "";

if(isset($_POST['submit'])) {
	
	$un = $_POST['username'];
    $pass = md5($_POST['password']);
	

	
	$sql="SELECT * FROM regi WHERE un ='".$un."' AND pw ='".$pass."'";
	$result = mysqli_query($conn,$sql)
	   or die("faild to query database".mysqli_error());
	   
	 $row = mysqli_fetch_array($result);

		 
	 if ($row['tag'] == '1' && $un == $row['un'] && $pass == $row['pw'])
	 {
		
		header( "Location: admin.php");
		 
	 }
	 
	 if ($row['tag'] == '2' && $un == $row['un'] && $pass == $row['pw'])
	 {
		
		header( "Location: after_login.php");
		 
	 }

	 else
	 {
		 $error="Username or Password is incorrect";
	 }
	

	
	
	} 	
	
	
 
?>


	<!-- Menu -->
	 <div class="logo_menu">
	    <div class="neon">
		    <img src="img/logo.png">
	    </div>
	
		<ul class="main-nav">
		    <li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="#contact">Contuct us</a></li>
			<li><a href="post.php">Post ad</a></li>
			<li class="active"><a href="login.php">Login</a></li>			
		</ul>
	</div>	
	      
			<br/><br/><br/><br/><br/>
			<hr style="border:2px solid green"></hr>	

	
		<div class="login">
           
            <form method="post" name="myForm" onsubmit="return validateForm()"  action="">
              <div>
                <label style="color:blue">Username</label><br>
                <input type="text" class="input" name="username" placeholder="User Name">
              </div>
              <div>
                <label style="color:blue">Password</label><br>
                <input type="Password" class="input" name="password" placeholder="Password">
				<span class="error"> <?php echo $error;?></span>
              </div>
              <br>
              <input  type="submit" name="submit" class="btn lbtn"   value="Login" >	
              <button type="button" onclick="location.href='index.php'" class="btn cbtn">Cancel</button>
              <br>
			  <br/>
              <a href="register.php">Don't have a account?Register First</a>

          </form>
	 </div>
		
			

	
	           
</body>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
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