<!DOCTYPE html>
<html>
<head>
 <title>Admin Panel</title>
<link rel="icon"  href="img/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <link href='css/style.css' rel='stylesheet'>
  <script src="js/adreg.js"></script>
    
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
  
 

</head>
<body>
<!-- Menu -->


     <div class="logo_menu">
	    <div class="neon">
		    <img src="img/logo.png">
	    </div>
	
		<ul class="main-nav">
		    <li class="active"><a href="adreg.php">Create Admin</a></li>	
         <li class="active"><a href="login.php">Logout</a></li> 
		</ul>
	 </div>
	 
		<div align="center">
		</br>
		<h1 style="color:green">Admin Panel</h1>
	    </div>
	<hr style="border:1px solid green"></hr>
   
  <div class="container">
 <div class="col-lg-12">
  <br><br>
  <h1 class="text-warning text-center" > All Users Info. </h1>
  <br>
  <table  id="tabledata" class=" table table-striped table-hover table-bordered">
   
   <tr class="bg-dark text-white text-center">
    

    <th style="text-align:center"> Username </th>
    <th style="text-align:center"> Name </th>
    <th style="text-align:center"> Address </th>
    <th style="text-align:center"> Phone No. </th>


    </tr >

  <?php

    $connection = mysqli_connect("localhost", "root", "","ab");
   $q = "select * from regi where tag='2'";

    $query = mysqli_query($connection,$q);

    while($res = mysqli_fetch_array($query)){
 ?>
   <tr class="text-center">
    <td> <?php echo $res['un'];  ?> </td>
    <td> <?php echo $res['name'];  ?> </td>
    <td> <?php echo $res['address'];  ?> </td>
    <td> <?php echo $res['phone_no'];  ?> </td>
  


	
	

    </tr>

   <?php 
   }
   ?>
   
  </table>  

  </div>
 </div>

  <div class="container">
 <div class="col-lg-12">
  <br><br>
  <h1 class="text-warning text-center" > All Post Details </h1>
  <br>
  <table  id="tabledata" class=" table table-striped table-hover table-bordered">
   
   <tr class="bg-dark text-white text-center">
    
    
       <th style="text-align:center">Username</th>
       <th style="text-align:center">Email </th>
       <th style="text-align:center">Contact No </th>
       <th style="text-align:center">Address </th>
       <th style="text-align:center">Rent Amount</th>
       <th style="text-align:center">Available from-</th>
       <th style="text-align:center">House Type</th>



    </tr >

  <?php

    $connection = mysqli_connect("localhost", "root", "","ab");
   $q = "select * from post ";

    $query = mysqli_query($connection,$q);

    while($res = mysqli_fetch_array($query)){
 ?>
   <tr class="text-center">
    <td> <?php echo $res['un'];  ?> </td>
    <td> <?php echo $res['email'];  ?> </td>
    <td> <?php echo $res['phone_no'];  ?> </td>
    <td> <?php echo $res['address'];  ?> </td>
    <td> <?php echo $res['rent_price'];  ?> </td>
    <td> <?php echo $res['date_a'];  ?> </td>
    <td> <?php echo $res['type'];  ?> </td>



    </tr>

   <?php 
   }
   ?>
   
  </table>  

  </div>
 </div>



  <script type="text/javascript">
  
  $(document).ready(function(){
   $('#tabledata').DataTable();
  }) 
  
 </script>

</body>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<!-- Bottom -->
	<footer class="footer">
		
		<div>
			<img src="img/logo.png">	
		</div>
	
		
	</footer>

</html>
