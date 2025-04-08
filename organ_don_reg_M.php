<?php
// Include database connection
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $age = $_POST["age"];
    $blood_group = $_POST["blood_group"];
    $organ = $_POST["organ"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];

    // Validate required fields
    if (!empty($name) && !empty($age) && !empty($blood_group) && !empty($organ) && !empty($contact) && !empty($email)) {
        // Insert into database
        $sql = "INSERT INTO donors (name, age, blood_group, organ, contact, email) 
                VALUES ('$name', '$age', '$blood_group', '$organ', '$contact', '$email')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Registration Successful!'); window.location.href='index.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('All fields are required!'); window.history.back();</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Organ Donation Registration</title>
</head>
<body>
    <h2>Register as an Organ Donor</h2>
    <form method="post">
        <label>Name:</label> <input type="text" name="name" required><br>
        <label>Age:</label> <input type="number" name="age" required><br>
        <label>Blood Group:</label> <input type="text" name="blood_group" required><br>
        <label>Organ to Donate:</label> <input type="text" name="organ" required><br>
        <label>Contact:</label> <input type="text" name="contact" required><br>
        <label>Email:</label> <input type="email" name="email" required><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
