<?php

$connection = mysqli_connect("localhost","root","","electricity_board");

//checking connection
if (mysqli_connect_error()){
  die("Database connection Failed".mysqli_connect_error());
}
if(isset($_POST['submit'])){
$name       = mysqli_real_escape_string($connection,$_POST["name"]);
$address    = mysqli_real_escape_string($connection,$_POST["address"]);
$nic        = mysqli_real_escape_string($connection,$_POST["nic"]);
$tp_number  = mysqli_real_escape_string($connection,$_POST["tp_number"]);
$email      = mysqli_real_escape_string($connection,$_POST["email"]);
$password   = mysqli_real_escape_string($connection,$_POST["password"]);

$hashed_password  = sha1($password);
$query  = "INSERT INTO user (name,address,nic,tp_number,email,password) VALUES('$name','$address','$nic','$tp_number','$email','$hashed_password')";
$result = mysqli_query($connection,$query);
if($result){
  echo "user added";
}else {
  echo "Error";
}

}


 ?>
<?php mysqli_close($connection); ?>
