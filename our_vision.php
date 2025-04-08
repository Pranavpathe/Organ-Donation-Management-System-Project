<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Vision - Organ Donation System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>

    <header class="sticky-top">
        <a href="#" class="brand">Organ Donation</a>
        <div class="navigation">
            <div class="navigation-items">
                
            </div>
        </div>
    </header>

    <section class="home">
        <div class="content active">
            <h1 style="color: red;">Our Vision</h1>
            <p>
                Our mission is to create awareness about organ donation and save lives by connecting donors and recipients 
                through a seamless platform. We believe in a future where no life is lost due to organ shortages.
            </p>
        </div>
    </section>

    <section class="container">
        <div class="card">
            <div class="card-image card-1"></div>
            <div class="card-text">
                <h2>Why Donate?</h2>
                <p>By donating, you give someone a second chance at life.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-image card-2"></div>
            <div class="card-text">
                <h2>Who Can Donate?</h2>
                <p>Anyone can be a donor, regardless of age or medical condition.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-image card-3"></div>
            <div class="card-text">
                <h2>How It Works?</h2>
                <p>Register as a donor, and help save lives through our organized system.</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <p>© 2025 Organ Donation System. All Rights Reserved.</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </footer>

    <style>
        .home {
            text-align: center;
            padding: 60px 20px;
            background: #FFF5EE;
        }

        .home h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .home p {
            font-size: 18px;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 40px 20px;
        }

        .card {
            background: white;
            width: 300px;
            margin: 15px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .card h2 {
            margin-top: 10px;
            font-size: 22px;
        }

        .card p {
            font-size: 16px;
            color: gray;
        }

        .card-image {
            height: 150px;
            background-size: cover;
            border-radius: 10px;
        }

        .card-1 {
            background-image: url("images/request.jpg");
        }

        .card-2 {
            background-image: url("images/donation.jpg");
        }

        .card-3 {
            background-image: url("images/02.jpg");
        }

        footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 30px;
        }

        .social-links a {
            color: white;
            margin: 0 10px;
            font-size: 20px;
            text-decoration: none;
        }

        .social-links a:hover {
            color: #f39c12;
        }
    </style>

</body>

</html>
