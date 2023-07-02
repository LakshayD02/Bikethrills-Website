<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>HOME</title>

   <!-- SWIPER CSS LINK  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- FONT AWESOME CDN LINK  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- CUSTOM CSS FILE LINKING  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<!-- HEADER -->

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
      <a href="">HOME</a>
      <a href="about.php" target="_blank">ABOUT</a>
      <a href="package.php" target="_blank">RENT BIKES</a>
      <a href="book.php" target="_blank">BOOK NOW</a>
      <a href="index.php" target="_blank">REGISTER</a>

   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- HOME -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

      <div class="swiper-slide slide" style="background:url(https://wallpapercrafter.com/desktop/11354-motorcycle-bike-biker-night-dark-4k.jpg)" no-repeat>
            <div class="content">
               <span style="color: rgb(200, 200, 200); font-size: x-large;" ><b>Explore, Discover, Travel</b></span>
               <h3>travel around the capital</h3>
               <a href="package.php" class="btn">Discover More</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(http://cdn.shopify.com/s/files/1/0081/1222/collections/road-bike-collection-header.jpg?v=1479169188) no-repeat">
            <div class="content">
               <span style="color: rgb(200, 200, 200);font-size: x-large;"><b>Grip it tight, Rip it fast</b></span>
               <h3>discover new places</h3>
               <a href="package.php" class="btn">Discover More</a>
            </div>
         </div>

        
         <div class="swiper-slide slide" style="background:url(https://images.pexels.com/photos/604285/pexels-photo-604285.jpeg?cs=srgb&dl=pexels-daniel-frank-604285.jpg&fm=jpg)" no-repeat>
            <div class="content">
               
               <span style="font-size: x-large; color: rgb(200, 200, 200);"><b>Get out there, Get riding!</b></span>
               <h3 style="color:white">make your tour worthwhile</h3>
               <a href="package.php" class="btn">Discover More</a>
            </div>
         </div>


      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- SERVICES -->

<section class="services">

   <h1 class="heading-title"> how to use </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/bike.png" alt="Image">
         <h3>Select your Bike</h3>
      </div>

      <div class="box">
         <img src="images/cart.png" alt="Image">
         <h3>Add to Cart</h3>
      </div>

      <div class="box">
         <img src="images/pickup.png" alt="Image">
         <h3>Pick your Bike</h3>
      </div>

      <div class="box">
         <img src="images/ride.png" alt="Image">
         <h3>Ride Anywhere</h3>
      </div>   
   </div>

</section>

<!-- HOME-ABOUT  -->

<section class="home-about">

   <div class="image">
      <img src="https://4kwallpapers.com/images/wallpapers/biker-dark-motorcycle-2732x2732-1480.jpg" alt="">
   </div>

   <div class="content">
      <h3>About Us</h3>
      <p>With no burden of owning one, BikeThrills was established to introduce its consumers to the world of motorcycles. Depending on their preferences and demands, our customers can select from more than 10 different models, whether they want a sports bike or an adventure motorcycle. Our adaptable plans give consumers the option of Daily, Weekly, or Monthly plans, depending on what works best for them.
      We love what we do and our passion for motorcycles and people is what drives us to constantly better ourselves to help you. Innovation, Reliability and Client-friendliness are the key values that we hold dear.
      We believe that together we can make your experience one that you never forget. That’s why our website is your one stop shop for two wheelers.
      </p>
      <a href="about.php" class="btn">Read More</a>
   </div>

</section>

<!-- HOME-PACKAGES  -->

<section class="home-packages">

   <h1 class="heading-title"> bikes in spotlight </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="https://cdni.autocarindia.com/utils/imageresizer.ashx?n=https://cms.haymarketindia.net/model/uploads/modelimages/Bajaj-Avenger-Street-160-130120211513.png" alt="">
         </div>
         <div class="content">
            <h3>Avenger Street 160</h3>
            <p>₹899 Per Day</p>
            <a href="Avenger Street 160.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="https://www.motorbeam.com/wp-content/uploads/2021-Bajaj-Dominar-400.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dominar 400</h3>
            <p>₹1599 Per Day</p>
            <a href="Dominar 400.php" class="btn">Book Now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/1/versions/royalenfield-himalayan-standard---bs-vi-[2021]1671525507212.jpg?q=75" alt="">
         </div>
         <div class="content">
            <h3>Himalayan BS6 - Black</h3>
            <p>₹1499 Per Day</p>
            <a href="Himalayan BS6.php" class="btn">Book Now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">Load More</a> </div>

</section>

<!-- HOME-OFFER  -->

<section class="home-offer">
   <div class="content">
      <h3>Upto 50% Off</h3>
      <p>Get exciting offers on your first 5 rides!</p>
      <a href="book.php" class="btn">Book Now</a>
   </div>
</section>

<!-- FOOTER SECTION  -->

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