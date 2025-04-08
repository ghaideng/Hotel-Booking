<?php
// Database credentials
$host = "localhost";
$user = "root";          // Default for XAMPP
$password = "";          // Empty by default in XAMPP
$dbname = "hotel_db";

// Create DB connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roomType = $_POST['room_type'];
    $numRooms = $_POST['num_rooms'];

    // Prepare statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO bookings (room_type, num_rooms) VALUES (?, ?)");
    $stmt->bind_param("si", $roomType, $numRooms);

    if ($stmt->execute()) {
        echo "<h2>Booking Confirmed </h2>";
        echo "<p>Room Type: <strong>$roomType</strong></p>";
        echo "<p>Number of Rooms: <strong>$numRooms</strong></p>";
        echo "<a href='index.php'>← Back to Home</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    header("Location: index.php");
    exit();
}

$conn->close();
?>
