<?php
include 'db.php'; // DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service = trim($_POST['service']);
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $date = $_POST['date'];
    $time = $_POST['time'];
    $notes = trim($_POST['notes']);

    // Basic validation
    if (empty($service) || empty($name) || empty($phone) || empty($date) || empty($time)) {
        header("Location: booking.php?service=$service&error=Please fill all required fields.");
        exit();
    }

    // Prepare and insert into database
    $stmt = $conn->prepare("INSERT INTO bookings (service, name, phone, date, time, notes) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $service, $name, $phone, $date, $time, $notes);

    if ($stmt->execute()) {
        // Success message
        echo "<script>alert('Your booking has been submitted successfully!'); window.location.href = 'services.php';</script>";
    } else {
        echo "<script>alert('Error submitting booking. Please try again later.'); window.location.href = 'booking.php?service=$service';</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: services.php");
    exit();
}
?>
