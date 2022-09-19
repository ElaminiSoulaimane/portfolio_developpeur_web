<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if (isset($_POST['send'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if (mysqli_num_rows($select_message) > 0) {
      $message[] = 'message sent already!';
   } else {
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>EL</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body >

   <?php

   if (isset($message)) {
      foreach ($message as $message) {
         echo '
      <div class="message" data-aos="zoom-out">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
      }
   }

   ?>

   <!-- header section starts  -->

   <header class="header">

      <div id="menu-btn" class="fas fa-bars"></div>

      <a href="#home" class="logo">Portfolio</a>

      <nav class="navbar">
         <a href="#home" class="active">Home</a>
         <a href="#about">About</a>
         <a href="#services">Services</a>
         <a href="#portfolio">Portfolio</a>
         <a href="#contact">Contact</a>
         <a href="./mycompany.php">My company</a>
      </nav>

      <div class="follow">
         <a href="https://www.facebook.com/soulaimane.elamini" class="fab fa-facebook-f"></a>
         <a href="https://twitter.com/Soulaimaneelam2" class="fab fa-twitter"></a>
         <a href="https://www.instagram.com/soulaimaneelamini" class="fab fa-instagram"></a>
         <a href="https://www.linkedin.com/in/soulaimane-elamini" class="fab fa-linkedin"></a>
         <a href="https://github.com/ElaminiSoulaimane" class="fab fa-github"></a>
      </div>

   </header>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home" id="home">

      <div class="image" data-aos="fade-right">
         <img src="images/user-img.png" alt="">
      </div>

      <div class="content">
         <h3 data-aos="fade-up">hi, i am Soulaimane Elamini</h3>
         <span data-aos="fade-up">web developer & designer</span>
         <p data-aos="fade-up">I am a digital development technologist and I have great skills. I have developed many apps and websites and worked with many companies. You can try it I decide</p>
         <div data-aos="fade-up" style="font-size: 3rem;margin: 0 1rem;cursor: pointer;">
            <a href="https://www.facebook.com/soulaimane.elamini" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/Soulaimaneelam2" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/soulaimaneelamini" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/soulaimane-elamini" class="fab fa-linkedin"></a>
            <a href="https://github.com/ElaminiSoulaimane" class="fab fa-github"></a>
         </div><br>
         <a data-aos="fade-up" href="#about" class="btn">about me</a>
      </div>

   </section>

   <!-- home section ends -->

   <!-- about section starts  -->

   <section class="about" id="about">

      <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

      <div class="biography">

         <p data-aos="fade-up">Developer web React js (Functional component & Functional Class), MERN Stack (Mango db, Express Js, React, Node js).</p>

         <div class="bio">
            <h3 data-aos="zoom-in"> <span>name : </span> Soulaimane Elamini </h3>
            <h3 data-aos="zoom-in"> <span>email : </span> Soulaimane.elamini1@gmail.com </h3>
            <h3 data-aos="zoom-in"> <span>address : </span> Safi - Maroc </h3>
            <h3 data-aos="zoom-in"> <span>phone : </span> +212619154079 </h3>
            <h3 data-aos="zoom-in"> <span>age : </span> 21 years </h3>
            <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3>
         </div>


         <a href="fichier.pdf" class="btn" data-aos="fade-up" download>download CV</a>

      </div>

      <div class="skills" data-aos="fade-up">

         <h1 class="heading"> <span>skills</span> </h1>

         <div class="progress">
            <div class="bar" data-aos="fade-left">
               <h3><span>HTML</span> <span>95%</span></h3>
            </div>
            <div class="bar" data-aos="fade-right">
               <h3><span>CSS</span> <span>85%</span></h3>
            </div>
            <div class="bar" data-aos="fade-left">
               <h3><span>JavaScript</span> <span>65%</span></h3>
            </div>
            <div class="bar" data-aos="fade-right">
               <h3><span>PHP</span> <span>80%</span></h3>
            </div>
         </div>

      </div>

      <div class="edu-exp">

         <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

         <div class="row">

            <div class="box-container">

               <h3 class="title" data-aos="fade-right">education</h3>

               <div class="box" data-aos="fade-right">
                  <span>( 2021 - 2023 )</span>
                  <h3>Developement Digital</h3>
                  <p>Technician specializing in Development Digital Studied at OFPPT.</p>
               </div>

               <div class="box" data-aos="fade-right">
                  <span>( 2022 )</span>
                  <h3>HTML5 and CSS3</h3>
                  <p>Certificate HTML5 & CSS3, Studied at OpenClassrooms.</p>
               </div>

               <div class="box" data-aos="fade-right">
                  <span>( 2021 )</span>
                  <h3>Digital Marketing</h3>
                  <p>Certificate Digital Marketing, Studied at Grow With Google .</p>
                  <p> => Certification ID: NYJ WCB DCY</p>
                  <a style="font-size:20px;color:#68abf9;" href="https://learndigital.withgoogle.com/maharatgoogle/validate-certificate-code">Check here</a>
               </div>
               <div class="box" data-aos="fade-right">
                  <span>( 2021 )</span>
                  <h3>digital content industry</h3>
                  <p>Certificate Digital Content Industry, Studied at FOR9A .</p>
                 
                  <a style="font-size:20px;color:#68abf9;" href="https://for9a-media.s3.amazonaws.com/courses/certificate/forsa-certificate-226827938913652013891.pdf">Check here</a>
               </div>

               <div class="box" data-aos="fade-right">
                  <span>( 2018 )</span>
                  <h3>Designer Graphique</h3>
                  <p>Graphic Design Specialist, Studied at GRAFPUB.</p>
               </div>

               

            </div>

            <div class="box-container">

               <h3 class="title" data-aos="fade-left">experience</h3>

               <div class="box" data-aos="fade-left">
                  <span>( 2021 - 2022 )</span>
                  <h3>front-end developer CSS3 & HTML5 & JS</h3>
                  <p><a style="color:#d90c0c" href="./mycompany.php">Codingplace</a> project front-end .</p>
               </div>

               <div class="box" data-aos="fade-left">
                  <span>( 2020 - 2021 )</span>
                  <h3>back-end developer PHP & JS </h3>
                  <p><a style="color:#d90c0c" href="./mycompany.php">Codingplace</a> project back-end .</p>
               </div>

               <div class="box" data-aos="fade-left">
                  <span>( 2021 - 2022 )</span>
                  <h3>full-stack developer</h3>
                  <p>Project Site E-COMMERCE en PHP Ordishop.</p>
                  <a style="font-size:20px;color:#68abf9;" href="https://github.com/ElaminiSoulaimane/Ordishop_Ecommerce_Site.git">See en Github </a>

               </div>

               <div class="box" data-aos="fade-left">
                  <span>( 2019 )</span>
                  <h3>INFOGRAPHISTE</h3>
                  <p>Centr informatique ville nouvelle.</p>
               </div>

            </div>

         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- services section starts  -->

   <section class="services" id="services">

      <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

      <div class="box-container">

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-code"></i>
            <h3>web development</h3>
            <p>ReactJS & PHP & JS & Node.js & Magento & Laravel & MySQL & NoSql</p>
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-paint-brush"></i>
            <h3>graphic design</h3>
            <p>Adobe Photoshop & InkScape</p>
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fab fa-bootstrap"></i>
            <h3>bootstrap</h3>
            <p>Bootstrap : V3.4.1-V4.6.X-V5.2.X</p>
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-chart-line"></i>
            <h3>seo marketing</h3>
            <p>Customize your blog with a unique domain and email address. Learn More! Top Features Included. Powers +2MM Websites. See What We Recommend. Free SSL. Easy To Use Tools. Variety Of Top Options. All-In-One Platform. Tailored To Your Needs.</p>
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-bullhorn"></i>
            <h3>digital marketing</h3>
            <p>Grow Your Business With Our Unified Platform. Start 14 Day Free Trial Now. Fraud Prevention. 100+ Professional Themes. Mobile Commerce Ready. Social Media Integration. SEO Optimized. 99.99% Average Uptime.</p>
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fab fa-wordpress"></i>
            <h3>wordpress</h3>
            <p>The best thing about WordPress is that it is easy to use and flexible enough to create different types of websites. This is the main reason why WordPress is so popular. In fact, according to a recent survey, 43% of the websites on the internet are powered by WordPress, and I am your Creators the best website..</p>
         </div>

      </div>

   </section>

   <!-- services section ends -->

   <!-- portfolio section starts  -->

   <section class="portfolio" id="portfolio">

      <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

      <div class="box-container">

         <div class="box" data-aos="zoom-in">
            <img src="images/img-1.jpg" alt="">
            <h3>BRANDING CREATOR</h3>
            <span>( 2022 )</span>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/img-2.jpg" alt="">
            <h3>PUBLICATION CREATOR</h3>
            <span>( 2022 )</span>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/img-3.jpg" alt="">
            <h3>web development</h3>
            <span>( 2020 - 2022 )</span>
         </div>

         

         

      </div>

   </section>

   <!-- portfolio section ends -->

   <!-- contact section starts  -->

   <section class="contact" id="contact">

      <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

      <form action="" method="post">
         <div class="flex">
            <input data-aos="fade-right" type="text" name="name" placeholder="Enter your name" class="box" required>
            <input data-aos="fade-left" type="email" name="email" placeholder="Enter your email" class="box" required>
         </div>
         <input data-aos="fade-up" type="number" min="0" name="number" placeholder="Enter your number" class="box" required>
         <textarea data-aos="fade-up" name="message" class="box" required placeholder="Enter your message" cols="30" rows="10"></textarea>
         <input type="submit" data-aos="zoom-in" value="Send message" name="send" class="btn">
      </form>

      <h1 class="heading" data-aos="fade-up"> <span>Send Msg WhatsApp</span> </h1>
       <section  action="" method="post">
         <button type="button" onclick="window.location.href='./msg.html'" class="btn">SEND WHATSAPP</button>
       
      </section>
<!-- ================================== -->
      <div class="box-container">

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <p>+212619154079</p>
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>Soulaimane.elamini1@gmail.com</p>
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-map-marker-alt"></i>
            <h3>address</h3>
            <p>Safi - Maroc</p>
         </div>

      </div>

   </section>

   <!-- contact section ends -->

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span><a href="./mycompany.php" style="color:#d90c0c">CodingPlace®</a></span> </div>












   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <!-- aos js link  -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

   <script>
      AOS.init({
         duration: 800,
         delay: 300
      });
   </script>

</body>

</html>