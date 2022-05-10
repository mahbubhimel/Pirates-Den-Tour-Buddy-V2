<?php
$g_id = $_GET['group_id'];
$c_id = $_GET['client_id'];

 $conn = mysqli_connect('localhost','root','','travel');
 $sql = "UPDATE enroll SET status = 'Confirm'  WHERE group_id = $g_id AND client_id = $c_id ";
 if(mysqli_query($conn,$sql))
 {
   header("Location: Confirm_OR_Decline.php?group_id=" .$g_id);
 }
 else{
  echo $g_id = $_GET['group_id'];
  echo $c_id = $_GET['client_id'];
   echo 'Not inserted';
 }

 ?>
