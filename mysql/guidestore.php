<?php
 $name = $_POST['name'];
 $mail = $_POST['email'];
 $password = $_POST['password'];
 $address = $_POST['address'];
 $phone = $_POST['phone'];
 $t_number = $_POST['t_number'];
 $district = $_POST['district'];

 $conn = mysqli_connect('localhost','root','','travel');
 $sql = "INSERT INTO guide (email,name,password,address,phone_number,transaction_id,district_name) VALUES('$mail' ,'$name' , '$password' , '$address' , $phone , '$t_number' , '$district' );";
 if(mysqli_query($conn,$sql))
 {
   header("Location: login.php");
 }
 else{

   header("Location: store.php");
 }

 ?>
