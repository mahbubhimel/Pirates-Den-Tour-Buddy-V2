<?php
$phone = $_GET['phone_number'];
$conn = mysqli_connect('localhost','root','','travel');
$sql = "DELETE FROM guide WHERE phone_number = $phone";
if(mysqli_query($conn,$sql))
{
  header("Location: guideindex.php");
}
else{
  echo "No deleted";
}
 ?>
