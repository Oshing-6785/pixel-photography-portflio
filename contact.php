<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "web";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debugging: Print POST data
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $fullName = isset($_POST['fullName']) ? $conn->real_escape_string($_POST['fullName']) : '';
    $phone = isset($_POST['phone']) ? $conn->real_escape_string($_POST['phone']) : '';
    $email = isset($_POST['email']) ? $conn->real_escape_string($_POST['email']) : '';
    $address = isset($_POST['address']) ? $conn->real_escape_string($_POST['address']) : '';

    // Debugging: Print sanitized data
    echo "Full Name: $fullName<br>";
    echo "Phone: $phone<br>";
    echo "Email: $email<br>";
    echo "Address: $address<br>";

    if (!empty($fullName) && !empty($phone) && !empty($email) && !empty($address)) {
        $sql = "INSERT INTO contact (name, phone, email, address) VALUES ('$fullName', '$phone', '$email', '$address')";

        // Debugging: Print SQL query
        echo "SQL Query: $sql<br>";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "All fields are required.";
    }

    $conn->close();
}
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
                <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="experience.php">Experience</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
            </ul>
        </div>
    </nav>

    <div class="header">
        <div class="container">
            <div class="box">
                <h4 class="">Hello there !</h4>
                <h1 class="">We are Pixels Photography</h1>
                <p class="">
                    If there is one thing that Pixels Photography believes in strongly, it is the ability to immortalize time through several of its most beautiful forms.
                    our commitment to excellence. Our team is a group of young and creative professionals, and everyoneFriendly, proactive and open-minded with an innovative approach to the immediate and future challenges.
                    bring a practical creativity and a set of skills to the process.
                </p>
                <a href="#" class="btn">My works</a>
                <a href="#" class="btn">Contact me</a>
            </div>

        </div>
    </div>
    <!-- Contact section -->
    <section class="contact bg-light" id="contact">
        <div class="container">
            <div class="box">
                <h2 class="title">
                    Need help with professional photography? Let's work together!
                </h2>
                <ul>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>+977 9825495703</span>
                    </li>
                    <li>
                        <i class="fa fa-at" aria-hidden="true"></i>
                        <span>info@Pixels.com</span>
                    </li>
                    <li>
                        <i class="fa fa-location-pin" aria-hidden="true"></i>
                        <span>XX xxxx St, Butwal, 33700, NEPAL</span>
                    </li>
                </ul>
            </div>

            <div class="box">
                <div class="box-r">
                    <div class="form-box">
                        <div class="form-title">
                            <h2>Get in touch</h2>
                        </div>
                        <form id="contactForm" method="post" action="">
                            <div class="one-line">
                                <div class="box-input">
                                    <i class="far fa-user"></i>
                                    <input type="text" id="fullName" name="fullName" class="text" placeholder="Full Name..">
                                    <div class="error" id="nameError"></div>
                                </div>
                                <div class="box-input">
                                    <i class="fa fa-phone"></i>
                                    <input type="text" id="phone" name="phone" class="text" placeholder="Your Phone">
                                    <div class="error" id="phoneError"></div>
                                </div>
                            </div>

                            <div class="box-input">
                                <i class="fa fa-at"></i>
                                <input type="email" id="email" name="email" class="text" placeholder="Email..">
                                <div class="error" id="emailError"></div>
                            </div>
                            <div class="box-input">
                                <label class="address"><i class="fa fa-location-pin"></i></label>
                                <textarea id="address" name="address" cols="30" rows="5" placeholder="Your Address.."></textarea>
                                <div class="error" id="addressError"></div>
                            </div>
                            <button type="submit" class="btn-send">Contact us</button>
                            <div class="success" id="successMessage"></div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section -->

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Clear previous errors and success messages
            document.getElementById('nameError').innerText = '';
            document.getElementById('phoneError').innerText = '';
            document.getElementById('emailError').innerText = '';
            document.getElementById('addressError').innerText = '';
            document.getElementById('successMessage').innerText = '';

            // Get form values
            var fullName = document.getElementById('fullName').value;
            var phone = document.getElementById('phone').value;
            var email = document.getElementById('email').value;
            var address = document.getElementById('address').value;

            // Simple validation
            var isValid = true;

            if (fullName.trim() === '') {
                document.getElementById('nameError').innerText = 'Full Name is required';
                isValid = false;
            }

            if (phone.trim() === '') {
                document.getElementById('phoneError').innerText = 'Phone number is required';
                isValid = false;
            } else if (!validatePhone(phone)) {
                document.getElementById('phoneError').innerText = 'Phone number must be numeric';
                isValid = false;
            }

            if (email.trim() === '') {
                document.getElementById('emailError').innerText = 'Email is required';
                isValid = false;
            } else if (!validateEmail(email)) {
                document.getElementById('emailError').innerText = 'Invalid email format';
                isValid = false;
            }

            if (address.trim() === '') {
                document.getElementById('addressError').innerText = 'Address is required';
                isValid = false;
            }

            if (isValid) {
                document.getElementById('successMessage').innerText = 'Form submitted successfully!';

            }
        });

        function validateEmail(email) {
            var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        function validatePhone(phone) {
            var re = /^[0-9]+$/;
            return re.test(phone);
        }
    </script>

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
                                +977 9816447968
                            </span>
                        </li>
                        <li>
                            <i class="fa fa-at"></i>
                            <span>
                                info@pixelsphotography.com
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