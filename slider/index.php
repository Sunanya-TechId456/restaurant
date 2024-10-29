<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Image Slider</title>

    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

  <?php
require('../fixed_navber/index1.php');


 ?>

    <section class="main swiper mySwiper">
      <div class="wrapper swiper-wrapper">
        <div class="slide swiper-slide">
          <img src="images/image1.jpeg" alt="" class="image" />
          <div class="image-data">
            <span class="text">Enjoy the finest bengali food.</span>
            <h2>
              Enjoy Our Exclusive <br />
              Authentic Bengali Food
            </h2>
            <!-- <a href="#" class="button">About Us</a> -->
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="images/image2.jpeg" alt="" class="image" />
          <div class="image-data">
            <span class="text">We really like what we do.</span>
            <h2>
            Experience Bengal With <br />
            Our Delicious Food
            </h2>
            <!-- <a href="../about us/index.php" class="button">About Us</a> -->
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="images/image3.png" alt="" class="image" />
          <div class="image-data">
            <span class="text">Making Our food with lover.</span>
            <h2>
              Please enjoy our <br />
              Bengsali Thali
            </h2>
            <!-- <a href="#" class="button">About Us</a> -->
          </div>
        </div>
      </div>

      <div class="swiper-button-next nav-btn"></div>
      <div class="swiper-button-prev nav-btn"></div>
      <div class="swiper-pagination"></div>
    </section>

    <!-- aboutus -->

    <div class="about-us" >
        <div class="content-about">
            <div class="title">
                <h2>About Us</h2>
            </div>
            <div class="about">
                <p>Welcome to [Restaurant Name], your destination for authentic Bengali cuisine in [City]. 
                    We celebrate Bengal's rich culinary heritage with a diverse menu, featuring classics like Shorshe Ilish,
                    Kosha Mangsho, and delicious vegetarian options. Our chefs use the freshest ingredients and traditional
                    spices to craft each dish with care. Enjoy a warm, inviting atmosphere with tasteful decor and attentive
                    service. Experience the flavors of Bengal with us, whether for a family dinner, a special occasion,
                    or a casual meal.
                 </p>
             </div>
             <div class="button">
                <a href="../about us/index.php">Read More</a>
             </div>
        </div>
    </div>

    <!-- testimonial -->
    <section class="container2">
        <div class="testimonial mySwiper">
          <div class="testi-content swiper-wrapper">
            <div class="slide swiper-slide">
              <img src="images/image123.png" alt="" class="image" />
              <p>
              "Tasty food, great service!"
              The Mutton Rezala was  amazing—full of flavor and perfectly cooked. The delivery was quick, and the site made ordering a breeze. Will be back for more! ⭐⭐⭐⭐⭐
              </p>
  
              <!-- <i class="bx bxs-quote-alt-left quote-icon"></i> -->
  
              <div class="details">
                <span class="name"></span>
                <span class="job"></span>
              </div>
            </div>
            <div class="slide swiper-slide">
              <img src="images/image123.png" alt="" class="image" />
              <p>
              "Fantastic food and quick delivery!"
I ordered from Soner Hashel and the food was fresh, hot, and flavorful. The delivery was on time, and the portions were generous. Highly recommend! ⭐⭐⭐⭐⭐

"User-friendly and delicious!"
The website was easy to use, and my order arrived promptly. The Ampora Sharbat was perfectly seasoned and satisfying. Definitely ordering again! ⭐⭐⭐⭐⭐

              </p>
  
              <!-- <i class="bx bxs-quote-alt-left quote-icon"></i>
   -->
              <div class="details">
                <span class="name"></span>
                <span class="job"></span>
              </div>
            </div>
            <div class="slide swiper-slide">
              <img src="images/image123.png" alt="" class="image" />
              <p>
              "Highly recommend!"
              Loved my experience with Soner Hashel. Easy ordering process, fast delivery, and delicious food. A must-try for anyone craving quality meals! ⭐⭐⭐⭐⭐
              </p>
  
              <!-- <i class="bx bxs-quote-alt-left quote-icon"></i>
   -->
              <div class="details">
                <span class="name"></span>
                <span class="job"></span>
              </div>
            </div>
          </div>
          <div class="swiper-button-next nav-btn"></div>
          <div class="swiper-button-prev nav-btn"></div>
          <div class="swiper-pagination"></div>
        </div>
      </section>

      <!-- footer -->

    <footer class="footer-distributed">
        <div class="footer-left">
            <h2>Soner <span>Hasel</span></h2>
       
        <p class="footer-links">
            <a href="../slider/index.php">Home</a>
            |
            <a href="../about us/index.php">About</a>
            |
            <a href="../contact us/index.php">Contact</a>
            
        </p>
        <p class="footer-company-name">Copyright © 2021 <strong>Soner Hasel</strong> All rights reserved </p>
    </div>
    <div class="footer-center">
        <div>
            <i class="fa fa-phone"></i>
            <p>+91 7501179463</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="#">sonerhasel78@gmail.com</a></p>
        </div>
    </div>
        <div class="footer-right">
            <p class="footer-company-about">
               <span>About the company</span>
               <strong>Soner Hasel</strong> is authentic Bengali Restaurant where you can find authentic Bengali food item.</p>
            <div class="footer-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            

           

        </div>

        
    </div>
        
    </footer>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
  </body>
</html>