<?php
$g_id = $_GET['group_id'];
$c_id = $_GET['client_id'];
$conn = new mysqli('localhost','root','','travel');
$sql = "SELECT * FROM client WHERE client_id = $c_id";
$result = $conn->query($sql);
 $client_info = mysqli_fetch_assoc($result);
 $user_name= $client_info['client_name'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="15">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="messaging.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body {font-family: "Lato", sans-serif}
    .mySlides {display: none}
    </style>
  </head>
  <body><br><br><br>
    <div class="w3-top">
    <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="homepage.php?client_id=<?php echo $id=$_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="client_profile_show.php?client_id=<?php echo $id=$_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Profile</a>
    <a href="only_budget.php?client_id=<?php echo $id=$_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Estimated Budget Routes </a>
    <a href="budget_travel.php?client_id=<?php echo $id=$_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Budget Travel</a>
    <a href="event_index.php?client_id=<?php echo $id=$_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Events</a>
    <a href="host.php?client_id=<?php echo $id=$_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Host</a>
    <a href="food.php?client_id=<?php echo $id= $_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Foods</a>
    <a href="guideinfo.php?client_id=<?php echo $id= $_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Guide Information</a>
    <a href="clientlogout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Log out</a>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
    </div>
    </div>
    <div id="main">

      <h1 style="background-color: #6495ed;color: white;"><?php echo $client_info['client_name']; ?>-Online</h1>
      <div style="background-color: white;box-shadow: 0px 1px 1px #000;height: 350px;margin-bottom: 20px;overflow: scroll;padding: 0% 1%;}">

        <?php
        include("connection.php");
        $q1 = "SELECT * FROM message WHERE group_id = $g_id";
        $r1 = mysqli_query($conn,$q1);
        while ($row = mysqli_fetch_assoc($r1)) {
          $message = $row['msg'];
          $user_name1 = $row['user_name'] ;
          if($user_name == $user_name1)
          {

            echo '<h4 style="color:black;text-align: right;">'.$user_name1.'</h4.>';
            echo "<br>";
            echo '<p style="color:black;text-align: right;background-color:#78e08f;border-radius: 25px;position: relative;margin-top: auto;padding-right:15px;display:inline-block;vertical-align:top;width:10%;">'.$message.'</p>';
            echo '<hr>';

          }
          else{
            echo '<h4 style="color:black;text-align: left;">'.$user_name1.'</h4.>';
            echo "<br>";
            echo '<p style="color:black;text-align: left; background-color:#82ccdd;border-radius: 25px;position: relative;margin-top: auto;padding: 0 0 0 10px;display:inline-block;vertical-align:top;width:10%;">'.$message.'</p>';
            echo '<hr>';
          }
        }
         ?>

        </div>

      <form action="send.php?group_id=<?php echo $g_id = $_GET['group_id']; ?>&client_id=<?php echo $c_id = $_GET['client_id']; ?>" method="POST">
        <input type="text" name="message" style="width:370px; height:50px;" placeholder="Type your message" required/>
        <input type="submit" name="submit" value="Send">
      </form>
      <br>
      </div>

  </body>
</html>
