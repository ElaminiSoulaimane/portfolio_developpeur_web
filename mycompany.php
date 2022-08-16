<?php
$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <title>My company</title>
</head>
<style>
    .Logo {
        border: .2rem solid black;
        margin-top: 5%;
        margin-bottom: 5%;
        width: 70%;
        height: 70%;
    }

    img {
        width: 60%;
    }

    p {
        margin: 15px;
        font-size: 2rem;
    }

    section .follow a {

        font-size: 3rem;
        margin: 0 1rem;
        cursor: pointer;
        transition: .6s linear !important;
    }

    section .follow a:hover {
        transform: rotate(360deg);
    }
</style>

<body>
    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="./index.php#home" class="logo">Portfolio</a>

        <nav class="navbar">
            <a href="./index.php#home" >Home</a>
            <a href="./index.php#about">About</a>
            <a href="./index.php#services">Services</a>
            <a href="./index.php#portfolio">Portfolio</a>
            <a href="./index.php#contact">Contact</a>
            <a href="./mycompany.php" class="active">My company</a>
        </nav>

        <div class="follow">
            <a href="https://www.facebook.com/soulaimane.elamini" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/Soulaimaneelam2" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/soulaimaneelamini" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/soulaimane-elamini" class="fab fa-linkedin"></a>
            <a href="https://github.com/ElaminiSoulaimane" class="fab fa-github"></a>
        </div>

    </header>
    <section class="Logo" data-aos="fade-up">
        <img data-aos="zoom-in" src="images/Logo.png" alt="">
        
        <P data-aos="fade-up">Coding Place ®, officially abbreviated as GP, is an Marocan company in Development and graphic designer which evolves over time towards Seo Marketing and Digital Marketing, servers and networks, software and multimedia.</P>
        <div data-aos="fade-up" class="follow">
            <a href="https://www.facebook.com/codingplace.ma/" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/codingplace.ma/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/company/codingplace/" class="fab fa-linkedin"></a>

        </div>
    </section>





    
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            delay: 300
        });
    </script>
</body>

</html>