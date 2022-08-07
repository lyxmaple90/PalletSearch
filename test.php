<?php
$username = "doadmin";
$password = "AVNS_EzPmmVy0LA0jjceHEob";
$host = "db-mysql-sgp1-64164-do-user-12125624-0.b.db.ondigitalocean.com";
$port = 25060;
$database = "Pallet";


  // mysqli 的四個參數分別為：伺服器名稱、帳號、密碼、資料庫名稱
  $conn = mysqli_connect($host, $username, $password,$database, $port);


  
  if($conn){
    mysqli_query($conn,'SET NAMES uff8');
    // echo "正確連接資料庫";
}
else {
    echo "不正確連接資料庫</br>" . mysqli_connect_error();
}
mysqli_close($conn);
  echo("OK");
?>
  
