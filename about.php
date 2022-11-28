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

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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
            <img src="images\taylor-swift-midnights.webp" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>If music calls you, our store is the right destination. We handpick our newly updated vinyl record collections so you can enjoy music just like the 70s.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>Supreme Vinyl Records in every genre. (pop, Rock, Jazz, indie) </p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images\2nd.jpeg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images\3rd.jpeg" alt="">
        </div>

        <div class="content">
            <h3>who are we?</h3>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <p>Beautiful store, among the only few sites through vinyls you can explore the analog world. </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Samakshi</h3>
        </div>

        <div class="box">
            <p>Good Vibe. Affordable prices. All the categories are available.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john</h3>
        </div>

        <div class="box">
            <p>Discovered this site a month ago. Would recommend. </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>riya</h3>
        </div>

        <div class="box">
            <p>Amazing. They deliver so quickly. No complaints. They can just add more items on the list. </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>abhishek</h3>
        </div>

        <div class="box">
            <p>Bought a record as a gift and the packaging for the record was adorable.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sakshi</h3>
        </div>

        <div class="box">
            <p>They have a great collection of Jazz, Blues, Rock, Indie & quite a lot of old school Bollywood.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Rudra</h3>
        </div>

    </div>

</section>


<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>