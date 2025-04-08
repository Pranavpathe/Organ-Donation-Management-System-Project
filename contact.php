<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Organ Donation System</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>

    <header class="sticky-top">
        <a href="#" class="brand">Organ Donation</a>
        <div class="navigation">
            <div class="navigation-items">
                <a href="index.php">Home</a>
                <a href="our_vision.php">Our Vision</a>
                <a href="login.php">Donate Organ</a>
                <a href="FAQ.php">FAQ's</a>
                <a href="contact.php">Contact</a>
            </div>
        </div>
    </header>

    <section class="contact">
        <h1 class="section-title">Contact Us</h1>

        <div class="contact-container">
            <div class="contact-info">
                <h2>Get in Touch</h2>
                <p><i class="fas fa-map-marker-alt"></i> Pune, Maharashtra, India</p>
                <p><i class="fas fa-phone-alt"></i> +91 98765 43210</p>
                <p><i class="fas fa-envelope"></i> support@organdonation.com</p>
            </div>

            <div class="social-media">
                <h2>Follow Us</h2>
                <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
            </div>
        </div>
    </section>

    <footer>
        <p>© 2025 Organ Donation System. All Rights Reserved.</p>
    </footer>

    <style>
        body {
            background: #FFF5EE;
            font-family: Arial, sans-serif;
        }

        .contact {
            padding: 50px;
            text-align: center;
            background: white;
        }

        .section-title {
            font-size: 36px;
            color: #333;
            margin-bottom: 30px;
        }

        .contact-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-info,
        .social-media {
            flex: 1;
            min-width: 300px;
            text-align: left;
            padding: 20px;
        }

        .contact-info h2,
        .social-media h2 {
            font-size: 24px;
            margin-bottom: 15px;
            color: red;
        }

        .contact-info p {
            font-size: 18px;
            margin: 10px 0;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #333;
        }

        .contact-info i {
            color: red;
            font-size: 20px;
        }

        .social-media a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #333;
            font-size: 18px;
            margin: 10px 0;
            transition: 0.3s ease;
            gap: 10px;
        }

        .social-media a i {
            font-size: 24px;
            color: #007bff;
        }

        .social-media a:hover {
            color: red;
            transform: translateX(5px);
        }

        footer {
            text-align: center;
            padding: 20px;
            background: black;
            color: white;
            margin-top: 30px;
        }
    </style>

</body>

</html>
