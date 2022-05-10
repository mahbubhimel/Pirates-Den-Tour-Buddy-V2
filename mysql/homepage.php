
<!DOCTYPE html>
<html lang="en">
<title>HOME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
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
    <a href="guideinfo.php?client_id=<?php echo $id= $_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Guide Information</a>
    <a href="clientlogout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Log out</a>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="spot/hill2.jpg" style="width:1400px; height:600px">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Keokaradong</h3>
      <p><b>We had the best time playing at Keokaradong!</b></p>
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="spot/hill.jpg" style="width:1400px; height:600px">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Nilachol</h3>
      <p><b>The atmosphere in Nilachol is lorem ipsum.</b></p>
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="spot/sikim.jpg" style="width:1400px; height:600px">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Panchagor</h3>
      <p><b>Awesome</b></p>
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="spot/saintmartin.jpg" style="width:1400px; height:600px">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Saint Martin</h3>
      <p><b>Thank you, Saint Martin - A night we won't forget.</b></p>
    </div>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">Top Destinations</h2>
      <p class="w3-opacity w3-center"><i>Remember to book your tickets!</i></p><br>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="spot/bandarban.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Bandarban</b></p>
            <p class="w3-opacity">2 Nights 1 Day Trip.</p>
            <p>Ever Green</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="https://en.wikipedia.org/wiki/Bandarban_District">5% Off</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="spot/saint.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Saint Martin</b></p>
            <p class="w3-opacity">3 Nights 2 Day Trip.</p>
            <p>Full of Blue Water</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">10% Off</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="spot/bandar.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Nilachol</b></p>
            <p class="w3-opacity">4 Nights 3 Day Trip.</p>
            <p>Beautiful Nilachol</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">7% Off</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32">
        <span onclick="document.getElementById('ticketModal').style.display='none'"
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> DHAKA, BANGLADESH<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
      </div>

    </div>
  </div>

<!-- End Page Content -->
</div>

<!-- Image of location/map -->
<img src="spot/2.jpg" class="w3-image w3-greyscale-min" style="width:100%">

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>

</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 4000);
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
