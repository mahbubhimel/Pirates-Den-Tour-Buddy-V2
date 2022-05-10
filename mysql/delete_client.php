<?php
$c_id = $_GET['client_id'];
$g_id = $_GET['group_id'];
$conn = mysqli_connect('localhost','root','','travel');
$sql = "DELETE FROM enroll WHERE client_id = $c_id AND group_id = $g_id";
if(mysqli_query($conn,$sql))
{
  header("Location: Confirm_OR_Decline.php?group_id=" .$g_id);
}
else{
  echo "No deleted";
}
 ?>
