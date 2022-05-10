<?php
 $c_id = $_GET['client_id'];
 $g_id = $_GET['group_id'];
 $message = $_POST['message'];

 $conn = mysqli_connect('localhost','root','','travel');
 $sql1 = "SELECT * FROM client WHERE client_id = $c_id";
 $result = $conn->query($sql1);
 $client_info = mysqli_fetch_assoc($result);
 $user_name= $client_info['client_name'];
 $q = "INSERT INTO message VALUES(null,'$message','$user_name','$g_id');";
 if(mysqli_query($conn,$q))
 {

   header("Location: messaging3.php?client_id=$c_id&group_id=$g_id");

 }
 else{
   //header("Location: store.php");
   echo  $c_id;
   echo  $g_id;
   echo $message;
 }

 ?>
