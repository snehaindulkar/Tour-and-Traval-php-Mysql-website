
        <?php  
        $connection = mysqli_connect('localhost','root','','tour','3307');
if(!$connection)
{
    echo "Connected";
}

$cardholdername = $_POST['cardname'];
$card_no = $_POST['cardnumber'];
$month = $_POST['expmonth'];
$year = $_POST['expyear'];
$cvv = $_POST['cvv'];
      
$user_registration_query ="insert into payment(cardholder,card_no,exp_month,exp_year,cvv)
    values ('$cardholdername','$card_no','$month','$year','$cvv')"; 
$user_registration_submit = mysqli_query($connection, $user_registration_query) or die(mysqli_error($connection));

        ?>	

<?php

session_start();
if($_SESSION['login'])
{
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Traveller's</title>

        <!-- Bootstrap core CSS -->
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
         <link href="../Bootstrap/bootstrap.css" rel="stylesheet">
          <link href="../CSS/packagedetails.css" rel="stylesheet">
        
        
          <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
        
         
        <link href="../Bootstrap/bootstrap.min.css">
    
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        
           <style>
ul {
  list-style-type: none;
  margin-left: 0px;
    margin-bottom:-5px;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: navy    ;
}
                .session{
            font-family: serif;
           font-weight: bolder;
           font-size: 20px;
           color: aliceblue;
           float: right;
        }
</style>
    </head>


    <body>
        
        <ul>
  <li><a class="active" href="../index.php">Home</a></li>
  <li><a href="#">World</a></li>
   <li><a href="index.php">Logout</a></li>
             <li class="session">Welcome : <?php echo $_SESSION['login'];?></li>
</ul>
    </body>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="container">
	<div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:#0fad00">Success</h2>
        <img src="/IMAGES/done.jpg">
        <b> <h3>Dear <?php echo $_SESSION['login'];?></h3></b>
        <p style="font-size:20px;color:#5C5C5C;">Thank you for booking
            </p>
    <br><br>
        </div>
        
	</div>
</div>

</html>
<?php
} else{
header('location:logout.php');
}


?>