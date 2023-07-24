<?php

@include 'config.php';

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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>We make sure all events posted on this platform are beneficial for our users.</p>
        
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what do we provide?</h3>
            <p>We provide a platform for users to meet new people, learn new things and get out of their comfort zones. <br> If you wish to host an event, don't hesitate to contact us!</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img2.png" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img3.png" alt="">
        </div>

        <div class="content">
            <h3>Who Are We?</h3>
            <p>We are a Fit4U! What are you waiting for? Register for an event now!</p>
            <a href="shop.php" class="btn">Browse</a>
        </div>

    </div>

</section>

<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>