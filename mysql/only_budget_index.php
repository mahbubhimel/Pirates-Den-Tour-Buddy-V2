<?php

 $id = $_GET['client_id'];
 $district_name = $_POST['district_name'];
 $pickup_name = $_POST['pickup_point_name'];
 $budget = $_POST['budget'];
 $days = $_POST['days'];


$conn = mysqli_connect('localhost','root','','travel');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql = "SELECT DISTINCT T.pickup_point_name, T.district_name,T.place_name,T.tr_name, T.hotel_name,T.Total_Costing as Costing
FROM(SELECT p1.pickup_point_name, d.district_name,p.place_name,t.tr_name,h.hotel_name,(p.place_fair+(h.hotel_fair*$days) + t.tr_fair) as Total_Costing
FROM district as d
JOIN place as p ON d.district_id = p.district_id
JOIN hotel as h ON d.district_id = h.district_id
JOIN pickup_point as p1 on d.district_id = p1.district_id
JOIN transport as t on p1.pickup_id = t.pickup_id
WHERE d.district_name = '$district_name' AND p1.pickup_point_name='$pickup_name' AND (p.place_fair+(h.hotel_fair*$days) + t.tr_fair)<=$budget)as T
ORDER BY T.Total_Costing DESC
LIMIT 5";

$result = $conn->query($sql);

$rowcount = mysqli_num_rows($result);
if($rowcount == 0){
  echo "sorry";
}


 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Routes!</title>
    <style media="screen">
      .color{
         background-color: #4CAF50;
      }
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
<a href="event_index.php?client_id= <?php echo $id=$_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Events</a>
<a href="host.php?client_id=<?php echo $id=$_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Host</a>
<a href="food.php?client_id=<?php echo $id= $_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Foods</a>
<div class="w3-dropdown-hover w3-hide-small">
</div>
<a href="guideinfo.php?client_id=<?php echo $id= $_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Guide Information</a>
<a href="clientlogout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Log out</a>
<a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
</div>
</div>
    <div class="container">
      <div class="row">
        <div class="col-md-1">
        </div>

        <div class="col-md-10">

          <h1>Recommended Routes</h1>
          <hr>
          <table class="table">
            <thead>
              <th>Pickup Point</th>
              <th>District Name</th>
              <th>Place Name</th>
              <th>Transport</th>
              <th>Hotel</th>
              <th>Total/Per Person</th>
              <th>Remaining TK</th>
            </thead>
            <tbody>
              <?php while ($row = mysqli_fetch_assoc($result)) {  ?>
              <tr>
                <td><?php echo $row['pickup_point_name'] ?></td>
                <td><?php echo $row['district_name'] ?></td>
                <td><?php echo $row['place_name'] ?></td>
                <td><?php echo $row['tr_name'] ?></td>
                <td><?php echo $row['hotel_name'] ?></td>
                <td><?php echo $row['Costing'] ?></td>
                <td><?php echo $budget-$row['Costing'] ?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>

        </div>

      </div>

    </div>
    <?php if($rowcount==0) { ?>
      <div class="alert alert-danger" role="alert">
    <h4 class="alert-danger">Sorry There has no match as your desire </h4>
  </div>
<?php } ?>
<?php if($rowcount>0) { ?>
    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Hey Buddy!</h4>
  <p>Inani: 600Tk<br>Laboni Point: 100Tk<br>Marine Drive: 900Tk<br>Ramu: 500Tk<br>Moheshkhali: 800Tk<br>Dulahazra Safari Park: 500Tk<br></p>
  <hr>
  <p class="mb-0">Now you can use your remaining money as per your priority :) </p>
</div>
<?php } ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
