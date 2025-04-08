<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FIRST_NAME = $_POST['FIRST_NAME'];
    $LAST_NAME = $_POST['LAST_NAME'];
    $dateofbirth = $_POST['dateofbirth'];

    $currentDate = date("Y-m-d");
    $calc = date_diff(date_create($dateofbirth), date_create($currentDate));
    $AGE = (int)$calc->format("%y");

    $BLOOD_GROUP = $_POST['BLOOD_GROUPr']; // Ensure name matches in HTML form
    $Gender = $_POST['Gender'];
    $EMAIL = $_POST['EMAIL'];

    $password = $_POST['PASS_WORD'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match!');</script>";
        exit();
    }

    // Hashing password for security
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $phoneR = $_POST['phoneR'];
    $ADDRESS = $_POST['ADD_RESSr'];
    $ZIP_CODE = $_POST['ZIP_CODE'];

    // Database connection
    $con = new mysqli('localhost', 'root', 'Vish@7130', 'organdb');

    if ($con->connect_error) {
        die("<script>alert('Connection failed: " . $con->connect_error . "');</script>");
    }

    // Check if email already exists
    $stmt = $con->prepare("SELECT * FROM registration WHERE EMAIL = ?");
    $stmt->bind_param("s", $EMAIL);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script>alert('Email already registered.');</script>";
        header("Location: login.php");
        exit();
    }
    $stmt->close();

    // Insert user data
    $stmt = $con->prepare("INSERT INTO registration (FIRST_NAME, LAST_NAME, AGE, BLOOD_GROUPr, Gender, EMAIL, PASS_WORD, phoneR, ADD_RESSr, ZIP_CODE)
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssissssiss", $FIRST_NAME, $LAST_NAME, $AGE, $BLOOD_GROUP, $Gender, $EMAIL, $hashed_password, $phoneR, $ADDRESS, $ZIP_CODE);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful!');</script>";
        header("Location: login.php");
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $con->close();
}
?>
