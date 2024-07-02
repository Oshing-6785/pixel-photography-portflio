<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "web";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $sql = "SELECT image FROM gallery";
// $result = $conn->query($sql);

$sql = "SELECT image FROM gallery";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $image_names[] = $row['image'];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixels Photography </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo-wrapper">
                <a class="logo" href="index.html"> <strong>JV</strong> Pixels Photography</a>
            </div>
            <ul class="navbar-links">
                <li class="nav-item"><a class="nav-link active" href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                <li class="nav-item"><a class="nav-link" href="experience.html">Experience</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
            </ul>
        </div>
    </nav>

    <!-- Works Gallery -->
    <section class="gallery bg-dark" id="works">
        <div class="heading">
            <h2 class="title">User Works</h2>
        </div>
        <div class="container">
            <ul>
                <li class="active" data-filter="*">All</li>
                <li data-filter=".wedding"><a class="nav-link" href="wedding.html">Wedding</a></li>
                <li data-filter=".event"><a class="nav-link" href="event.html">Event</a></li>
                <li data-filter=".fashion"><a class="nav-link" href="fashion.html">Fashion</a></li>
                <li data-filter=".product"><a class="nav-link" href="product.html">Product</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="grid-wrapper">

                <div class="gallery-list">
                    <!-- Dynamically list gallery images here -->
                    <?php foreach ($image_names as $image_name) : ?>
                        <div class="gallery-item">
                            <img src="images/<?php echo $image_name; ?>" alt="<?php echo $image_name; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="image tall">
                    <img src="./images/album/pexels-photo-1055613.jpg" alt="" />
                </div>
                <div class="image wide">
                    <img src="./images/album/pexels-photo-1738986.jpg" alt="" />
                </div>
                <div class="image tall">
                    <img src="./images/album/pexels-photo-2970287.jpg" alt="" />

                </div>
                <div class="image">
                    <img src="./images/album/pexels-photo-1722206.jpg" alt="" />

                </div>
                <div class="image ">
                    <img src="./images/album/pexels-photo-3494648.jpg" alt="" />
                </div>
                <div class="image tall">
                    <img src="./weeding/7.png" alt="">
                </div>
                <div class="image wide">
                    <img src="./weeding/8.png" alt="">
                </div>
                <div class="image tall">
                    <img src="./weeding/9.png" alt="">
                </div>
                <div class="image">
                    <img src="./weeding/10.png" alt="">
                </div>
                <div class="image">
                    <img src="./weeding/11.png" alt="">
                </div>

                <div class="image">
                    <img src="./fashion/10.png" alt="">
                </div>
                <div class="image tall">
                    <img src="./fashion/11.png" alt="">
                </div>
                <div class="image wide">
                    <img src="./fashion/12.png" alt="">
                </div>
                <div class="image">
                    <img src="./fashion/13.png" alt="">
                </div>
                <div class="image tall">
                    <img src="./fashion/14.png" alt="">
                </div>
                <div class="image wide">
                    <img src="./fashion/15.png" alt="">
                </div>

                <div class="image wide">
                    <img src="./product/11.png" alt="">
                </div>
                <div class="image">
                    <img src="./product/12.png" alt="">
                </div>
                <div class="image">
                    <img src="./product/13.png" alt="">
                </div>
                <div class="image tall">
                    <img src="./product/14.png" alt="">
                </div>
                <div class="image wide">
                    <img src="./product/15.png" alt="">
                </div>

                <div class="image wide">
                    <img src="./event/11.png" alt="">
                </div>
                <div class="image">
                    <img src="./event/12.png" alt="">
                </div>
                <div class="image tall">
                    <img src="./event/13.png" alt="">
                </div>
                <div class="image wide">
                    <img src="./event/14.png" alt="">
                </div>
                <div class="image">
                    <img src="./event/15.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--  Works Gallery -->

    <!-- Footer -->
    <footer class="footer">
        <div class="newsletter">
            <div class="container">
                <div class="box">
                    <h2>Sign up to get latest update</h2>
                    <p>Sign up for our monthly newsletter for the latest news &amp; articles</p>
                </div>
                <div class="form">
                    <form>
                        <input type="email" name="email" placeholder="Enter Email Address" required="">
                        <button>Subscribe Now</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="second-footer">
            <div class="container">
                <div class="box">
                    <div class="logo-wrapper">
                        <a class="logo" href="index.html"> <strong>JV</strong> Pixels Photography </a>
                    </div>
                    <div class="text">
                        <p>Together, we strive to turn your moments into timeless memories. Trust Pixels Photography to
                            bring your vision to life.</p>

                    </div>
                </div>
                <div class="box">
                    <h3 class="title">Quick Links</h3>
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="works.html">Works</a></li>
                        <li><a href="blog.html">Blog</a></li>
                    </ul>
                </div>

                <div class="box">
                    <h3 class="title">Contact</h3>
                    <ul>
                        <li>
                            <i class="fa fa-phone"></i>
                            <span>
                                +977 9825495703
                            </span>
                        </li>
                        <li>
                            <i class="fa fa-at"></i>
                            <span>
                                info@Pixels.com
                            </span>
                        </li>
                        <li>
                            <span>
                                XX xxxx St, Butwal, 33700, NEPAL
                            </span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class=" copyright">
            <div class="box">
                <p class="">Copyright © 2023 by <a href="#">pixelsphotography</a>. All rights reserved.</p>
            </div>
            <div class="box">
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
            </div>
        </div>
        </div>
    </footer>

</body>

</html>