<?php
include 'database.php';

$name = $_POST['name'];
$number = $_POST['number'];
$address = $_POST['address'];
$payment = $_POST['payment'];
$note = $_POST['note'];
$totalPrice = $_POST['total_price'];

$sql = "INSERT INTO orders (name, number, address, payment, note, total_price) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssd", $name, $number, $address, $payment, $note, $totalPrice);
$stmt->execute();

$stmt->close();
$conn->close();
?>
