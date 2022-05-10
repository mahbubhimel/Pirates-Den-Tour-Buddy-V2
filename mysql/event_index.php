<?php
session_start();

$id = $_GET['client_id'];
$conn = new mysqli('localhost','root','','travel');
$sql2 = "SELECT * FROM enroll";
$sql = "SELECT * FROM host";
 $result = $conn->query($sql);
 $result2 = $conn->query($sql2);

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Events</title>
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
        <a href="homepage.php?client_id=<?php echo $id= $_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large">HOME</a>
        <a href="client_profile_show.php?client_id=<?php echo $id= $_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Profile</a>
        <a href="only_budget.php?client_id=<?php echo $id=$_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Estimated Budget Routes </a>
        <a href="budget_travel.php?client_id=<?php echo $id=$_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Budget Travel</a>
        <a href="event_index.php?client_id=<?php echo $id=$_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Events</a>
        <a href="host.php?client_id=<?php echo $id=$_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Host</a>
        <a href="food.php?client_id=<?php echo $id= $_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Foods</a>
        <a href="food.php?client_id=<?php echo $id= $_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Guide Information</a>
        <a href="clientlogout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Log out</a>
        <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-1">
        </div>

        <div class="col-md-10">

          <h1>Event Lists</h1>
          <td>
            <a class="btn btn-success" href="my_view_events.php?client_id=<?php echo $id ?> ">My List</a><br><br>
          </td>


          <hr>
          <table class="table">
            <thead>
              <th>Post Id</th>
              <th>Tour Title</th>

            </thead>
            <tbody>
              <div class="tab-content">
              <?php while ($row = $result->fetch_assoc()) { ?>
              <tr>
                <td><?php echo $row['group_id'] ?></td>
                <td><?php echo $row['tour_title'] ?></td>
                <div class="tab-content">

                <?php
                if($row['host_id']==$id){?>
                  <div id="menu1" class="tab-pane fade">

                  <td>
                    <a class="btn btn-warning" href="event_show_client.php?group_id=<?php echo $row['group_id'];?>&client_id=<?php echo $id ?> ">View</a>
                  </td>
                  <td>
                    <a class="btn btn-warning" href="host_edit.php?group_id=<?php echo $row['group_id'];?>&client_id=<?php echo $id ?> ">Edit</a>
                  </td>

                  </div>
                <?php }?>

                <?php
                if($row['host_id']!=$id){?>
                  <div id="menu2" class="tab-pane fade">

                  <td>
                    <a class="btn btn-success" href="event_show_clientview.php?group_id=<?php echo $row['group_id'];?>&client_id=<?php echo $id ?> ">View</a>
                  </td>
                  <td>
                    <a class="btn btn-success" href="enroll.php?group_id=<?php echo $row['group_id'];?>&client_id=<?php echo $id ?> ">Interested</a>
                  </td>

                  <td>
                  <?php
                  $gid=$row['group_id'];
                        $qu="SELECT T.going_member as GOING,IF(T.t_member=T.going_member,'Yes','No') as Message,T.post_id as POST_ID
FROM(SELECT COUNT(*) as going_member , e.group_id as post_id , h.tour_member as t_member
FROM enroll as e JOIN host as h ON e.group_id = h.group_id
WHERE (e.status = 'Going' OR e.status!='Going') AND h.tour_member>0
GROUP BY e.group_id) as T
WHERE POST_ID=$gid";

///echo $qu;


try{
$conn1=new PDO("mysql:host=localhost;dbname=travel",'root','');

$stmt=$conn1->query($qu);
$table=$stmt->fetchAll(PDO::FETCH_NUM);
if($stmt->rowCount()>0){
if($table[0][1]=='No'){
  ?>
   <a class="btn btn-success" href="enroll_transaction.php?group_id=<?php echo $row['group_id'];?>&client_id=<?php echo $id?>">Going</a>
<?php
}
else{?>

  <a class="btn btn-warning" href="#">Filled Up</a>
<?php  }
}
else{
  ?>
   <a class="btn btn-success" href="enroll_transaction.php?group_id=<?php echo $row['group_id'];?>&client_id=<?php echo $id?>">Going</a>
<?php
}?>
<?php
}catch(PDOException $ex){
  echo "<script>window.alert('error in database access')</script>";
}

?>

              </td>
            </div>
              </tr>
            <?php } } ?>
          </div>
            </tbody>
          </table>

        </div>

      </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
