<?php
session_start();
include("function/con.php");

$User_ID = isset($_SESSION['customers_id']) ? $_SESSION['customers_id'] : null;
$User_Name = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/Icon/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/phones.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/fa4/css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
    body {
        font-family: 'Rubik', sans-serif;
    }

    .hero-section {
        background: url('img/hero-bgs.jpg') no-repeat center center;
        background-size: cover;
        color: white;
        padding: 100px 0;
        text-align: center;
    }

    .hero-section h1 {
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .hero-section p {
        font-size: 1.5rem;
        margin-bottom: 40px;
    }

    .hero-section .btn {
        font-size: 1.2rem;
        padding: 10px 20px;
    }

    .content-section {
        padding: 50px 0;
    }

    .content-section h2 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .content-section p {
        font-size: 1.2rem;
        line-height: 1.6;
    }

    .team-section {
        background-color: #f9f9f9;
        padding: 50px 0;
    }

    .team-member {
        text-align: center;
        margin-bottom: 30px;
    }

    .team-member img {
        border-radius: 50%;
        max-width: 150px;
        margin-bottom: 20px;
    }

    .team-member h4 {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .team-member p {
        font-size: 1rem;
        color: #777;
    }
    </style>
    <title>About Us - TWO56TH NOTES</title>
</head>

<body>
    <?php require 'navbar.php'; ?>

    <div class="hero-section">
        <h1>About Us</h1>
        <p>Discover the story behind TWO56TH NOTES and our commitment to music lovers.</p>
    </div>

    <div class="container content-section">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2>Our Company</h2>
                <p class="lead">Welcome to TWO56TH NOTES! We are dedicated to providing top-notch musical instruments and
                    accessories, including guitars, drums, and more. Our mission is to inspire and support musicians of
                    all levels by offering quality products and exceptional customer service.</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <img src="img/our-missions.png" alt="Our Mission" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h2>Our Mission</h2>
                    <p class="lead">Our mission is to foster a love for music and make high-quality musical instruments
                        accessible to everyone. Whether you are a seasoned musician or just starting your musical
                        journey, TWO56TH NOTES is here to support and inspire you.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Our Values</h2>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <i class="fa fa-music fa-3x mb-3" aria-hidden="true"></i>
                        <h5 class="card-title">Passion</h5>
                        <p class="card-text">We live and breathe music, and we're here to share that passion with you.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <i class="fa fa-star fa-3x mb-3" aria-hidden="true"></i>
                        <h5 class="card-title">Quality</h5>
                        <p class="card-text">Providing only the best instruments and accessories for musicians.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <i class="fa fa-heart fa-3x mb-3" aria-hidden="true"></i>
                        <h5 class="card-title">Customer Focus</h5>
                        <p class="card-text">Your satisfaction is our top priority. We are here to serve you.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <i class="fa fa-shield fa-3x mb-3" aria-hidden="true"></i>
                        <h5 class="card-title">Integrity</h5>
                        <p class="card-text">We conduct our business with honesty and transparency.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <i class="fa fa-users fa-3x mb-3" aria-hidden="true"></i>
                        <h5 class="card-title">Community</h5>
                        <p class="card-text">We are building a vibrant community of music enthusiasts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="team-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Meet Our Team</h2>
                    <p>We are a team of passionate professionals dedicated to making music accessible to everyone.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 team-member">
                    <img src="img/rosh.jpg" alt="Team Member">
                    <h4>ROSH ANDRIELE SKIBIDI</h4>
                    <p>Chief Executive Officer</p>
                </div>
                <div class="col-md-4 team-member">
                    <img src="img/wendy.jpg" alt="Team Member">
                    <h4>WENDY FRANCISCO</h4>
                    <p>Vice President</p>
                </div>
                <div class="col-md-4 team-member">
                    <img src="img/rhea.jpg" alt="Team Member">
                    <h4>RHEA MAE PACIFICADOR</h4>
                    <p>Corporate Secretary</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 team-member">
                    <img src="img/leonard.jpg" alt="Team Member">
                    <h4>LEONARD AGUSTIN</h4>
                    <p>Chief Operation Officer</p>
                </div>
                <div class="col-md-4 team-member">
                    <img src="img/darryl.jpg" alt="Team Member">
                    <h4>MARK DARRYL ESPERIDA</h4>
                    <p>Chief Financial Officer</p>
                </div>
            </div>
        </div>
    </div>

    <?php require 'footer.php'; ?>
</body>

</html>