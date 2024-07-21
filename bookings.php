<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $room_type = $_POST['room_type'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $requests = $_POST['requests'];
    $payment_method = $_POST['payment_method'];

    $sql = "INSERT INTO bookings (name, email, phone, room_type, checkin, checkout, adults, children, requests, payment_method) VALUES ('$name', '$email', '$phone', '$room_type', '$checkin', '$checkout', '$adults', '$children', '$requests', '$payment_method')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
