<?php
$username = "doadmin";
$password = "AVNS_EzPmmVy0LA0jjceHEob";
$host = "db-mysql-sgp1-64164-do-user-12125624-0.b.db.ondigitalocean.com";
$port = 25060;
$database = "Pallet";



  $conn = mysqli_connect($host, $username, $password,$database, $port);


  

mysqli_close($conn);
  echo("OK");
?>
  
