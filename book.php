<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>BOOK</title>

   <!-- SWIPER CSS LINK  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- FONT AWESOME CDN LINK  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- CUSTOM CSS FILE LINK  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<!-- HEADER  -->

<section class="header">

<div class="dark-theme"><img src="images/logo.png" alt="Bike Thrills Logo" id="icon">

   <script>
   var icon = document.getElementById("icon");

   icon.onclick = function(){
      document.body.classList.toggle("dark-theme");
}
  
 </script>
 </div>

<nav class="navbar">
      <a href="home.php">HOME</a>
      <a href="about.php" target="_blank">ABOUT</a>
      <a href="package.php" target="_blank">RENT BIKES</a>
      <a href="book.php" target="_blank">BOOK NOW</a>
      <a href="index.php" target="_blank">REGISTER</a>

   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<div class="heading" style="background:url(https://images.hdqwalls.com/wallpapers/fz1-speedometer-image.jpg)" no-repeat>
   <h1>Book now</h1>
</div>

<!-- BOOKING  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php" method="post" class="book-form">

     <div class="flex">

            <div class="inputBox">
               <span>NAME</span>
               <input type="text" required placeholder="Enter your name" name="name">
            </div>
            <div class="inputBox">
               <span>EMAIL</span>
               <input type="email" required placeholder="Enter your email" name="email">
            </div>
            <div class="inputBox">
               <span>PHONE</span>
               <input type="number" required placeholder="Enter your number" name="phone">
            </div>
            <div class="inputBox">
               <span>ADDRESS</span>
               <input type="text" required placeholder="Enter your address" name="address">
            </div>
            <div class="inputBox">
               <span>PICKUP VENUE</span>
               <input type="text" required placeholder="Enter pickup venue" name="pickup_venue">
            </div>
            <div class="inputBox">
               <span>DROPOFF VENUE</span>
               <input type="text" required placeholder="Enter dropoff venue" name="dropoff_venue">
            </div>
            <div class="inputBox">
               <span>TRIP START DATE</span>
               <input type="date" required name="start_date">
            </div>
            <div class="inputBox">
               <span>TRIP START TIME</span>
               <input type="time" required name="start_time">
            </div>
            <div class="inputBox">
               <span>TRIP END DATE</span>
               <input type="date" required name="end_date">
            </div>
            <div class="inputBox">
               <span>TRIP END TIME</span>
               <input type="time" required name="end_time">
            </div>
            <div class="inputBox">
               <span>UPLOAD DRIVER'S LICENSE<span>
               <input class="file-upload-input" name="license" type="file" onchange="raedURL(this)" accept="Image/*">
            </div>
            <div class="inputBox">
      <span>CHOOSE YOUR BIKE</span>
      <br>
      <br>
      <select name="bikes" id="lang" style="width: 500px; padding-bottom: 30px;">
        <option value="Bike">Select Here</option>
        <option value="Avenger Street 160">Avenger Street 160</option>
        <option value="Dominar 400">Dominar 400</option>
        <option value="Himalayan BS6 - Black">Himalayan BS6 - Black</option>
        <option value="Continental GT 650">Continental GT 650</option>
        <option value="Hayabusa Gen-2">Hayabusa Gen-2</option>
        <option value="Dayatona R">Dayatona R</option>
        <option value="Classic 350 Rebor">Classic 350 Reborn</option>
        <option value="Harley Davidson Iron 883">Harley Davidson Iron 883</option>
        <option value="Meteor Supernova Blue">Meteor Supernova Blue</option>
        <option value="Hunter Metro">Hunter Metro</option>
        <option value="SR150">SR150</option>
        <option value="Ntorq 125">Ntorq 125</option>
      </select>
</div>

      <input type="submit" value="Proceed To Payment" class="btn" name="send">

   </form>

</section>

<!-- FOOTER  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Quick Links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i>Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i>About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i>Bikes</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i>Book Now</a>
      </div>


      <div class="box">
         <h3>Contact Info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +91-7704881550 </a>
         <a href="#"> <i class="fas fa-phone"></i> +91-9560547779 </a>
         <a href="#"> <i class="fas fa-envelope"></i> bikethrills@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Delhi, India - 110022 </a>
      </div>

      <div class="box">
         <h3>Follow Us</h3>
         <a href="https://www.facebook.com/profile.php?id=100090210905640&mibextid=ZbWKwL" target="_blank"> <i class="fab fa-facebook-f"></i> Facebook </a>
         <a href="https://instagram.com/bike.thrills?igshid=YmMyMTA2M2Y=" target="_blank"> <i class="fab fa-instagram"></i> Instagram </a>

      </div>

      <div class="box">
         <h3>Extra Links</h3>
         <a href="TERMS AND CONDITIONS.pdf" target="_blank"> <i class="fas fa-angle-right"></i>Terms and Conditions</a>
         <a href="PRIVACY POLICY.pdf" target="_blank"> <i class="fas fa-angle-right"></i>Privacy Policy</a>
      </div>
   </div>

   <div class="credit"> <span>Copyright © 2023 Bike Thrills. All Rights Reserved.</span> </div>

</section>

<!-- SWIPER JS LINK  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- CUSTOM JS FILE LINKING  -->
<script src="script.js"></script>

</body>
</html>