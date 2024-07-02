<?php
// giving the user name and password with schemas name
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "web";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT body FROM home";
$result = $conn->query($sql);
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

    <div class="header">
        <div class="container">
            <div class="box">
                <h4 class="">Hello there !</h4>
                <h1 class="">We are Pixels Photography</h1>
                <!-- <p class="">
                    If there is one thing that Pixels Photography believes in strongly, it is the ability to immortalize time through several of its most beautiful forms.
                    our commitment to excellence. Our team is a group of young and creative professionals, and everyoneFriendly, proactive and open-minded with an innovative approach to the immediate and future challenges.
                    bring a practical creativity and a set of skills to the process.
                </p> -->
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo"<p>" . htmlspecialchars($row["body"]) . "</p>";
                    }
                } else {
                    echo "";
                }
                ?>
                <a href="#" class="btn">My works</a>
                <a href="#" class="btn">Contact me</a>
            </div>

        </div>
    </div>


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
                                info@Pixel.com
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