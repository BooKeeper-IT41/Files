<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>ABOUT US</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>BooKeeper stands out from other bookstore websites by being tailored specifically for the market. Unlike international platforms, it offers a curated selection of books that include both international bestsellers and titles by authors, making it more relevant and accessible. With competitive pricing and support for local payment methods like GCash, and bank transfers, it ensures a convenient shopping experience for a wider range of customers. The site also features a clean, modern, and mobile-friendly interface that allows for fast browsing and a smooth checkout process.</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client's Reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>"I appreciate that BooKeeper features Filipino authors. It's refreshing to see local literature get the spotlight it deserves. Plus, their customer service was fast and helpful when I had questions about my order."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Carlos Dela Cruz</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>"BooKeeper made it so easy to find the textbooks I needed without overpaying. I loved how smooth the checkout process was—and the local payment options like Paypal are super convenient! Definitely my go-to bookstore from now on."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Maria Santos</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"As a book reviewer, I’m constantly looking for unique titles, and BookNook delivered! The site is clean and easy to navigate, and I love that they support young writers and local talent. Highly recommended!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Angela Reyes</h3>
      </div>

      

   </div>

</section>

<section class="authors">

   <h1 class="title">TEAM MEMBERS</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/sam.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Samantha Gabitano</h3>
      </div>

      <div class="box">
         <img src="images/ems.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Rainiel Jevson Bernales</h3>
      </div>

      <div class="box">
         <img src="images/oscar.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Oscar Jay Ellevera</h3>
      </div>

      

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>