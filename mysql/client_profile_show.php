<?php

$id = $_GET['client_id'];
$conn = new mysqli('localhost','root','','travel');
$sql = "SELECT * FROM client WHERE client_id = $id";
$result = $conn->query($sql);

 $client_info = mysqli_fetch_assoc($result);
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

 <style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Profile</title>
    <style media="screen">
      .color{
         background-color: #4CAF50;
      }
    </style>
  </head>
  <body>
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
</div><br><br><br><br>



    <div class="container">
      <div class="row">
        <div class="col-md-2">

        </div>

        <!-- <div class="col-md-9"><br><br><br>
          <h1>Your Information</h1>
          <hr>
          <table class="table">
            <tr>
              <th width="100" class="text-right">ID:</th>
              <td><?php echo $client_info['client_id']; ?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">Name:</th>
              <td><?php echo $client_info['client_name']; ?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">Email:</th>
              <td><?php echo $client_info['client_mail']; ?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">Password:</th>
              <td><?php echo $client_info['client_password']; ?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">Address:</th>
              <td><?php echo $client_info['client_address']; ?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">Phone Number:</th>
              <td><?php echo $client_info['phone_number']; ?></td>
            </tr>

            <td>
              <a class="btn btn-warning" href="edit.php?client_id= <?php echo $id = $_GET['client_id'];?>">Edit</a>
            </td>

          </table>

        </div> -->


        <div class="container">
                <div class="jumbotron">
                  <div class="row">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                          <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                          <div class="container" style="border-bottom:1px solid black">
                            <h2><?php echo $client_info['client_name']; ?></h2>
                          </div>
                            <hr>
                          <ul class="container details">
                            <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span><?php echo "+880-"  ?><?php echo  $client_info['phone_number']; ?></p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><?php echo $client_info['client_mail']; ?></p></li>
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span><?php echo $client_info['client_address']; ?></p></li>

                          </ul>
                      </div>
                  </div>
                </div>
                <td>
                  <a class="btn btn-warning" href="edit.php?client_id= <?php echo $id = $_GET['client_id'];?>"><h1>Edit</h1></a>
                </td>

      </div>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
