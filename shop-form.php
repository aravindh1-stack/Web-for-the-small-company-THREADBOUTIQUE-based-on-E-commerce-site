<?php
// Database connection settings
$servername = "sql107.infinityfree.com";
$username = "if0_37479666"; // Replace with your MySQL username
$password = "BHAVYA4778"; // Replace with your MySQL password
$dbname = "if0_37479666_cus_shopform_db"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve and sanitize form inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $product = mysqli_real_escape_string($conn, $_POST['product']);
    $quantity = (int) $_POST['quantity']; // Ensures quantity is an integer
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($product) || empty($quantity) || empty($address)) {
        echo "All fields are required.";
        exit;
    }

    // Prepare and execute the SQL query
    $sql = "INSERT INTO shop_requests (name, email, phone, product_needed, quantity, address) 
            VALUES ('$name', '$email', '$phone', '$product', $quantity, '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you! Your request has been placed. We will contact you later.";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
