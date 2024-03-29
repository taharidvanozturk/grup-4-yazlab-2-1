<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "fd49db33b2";
$dbname = "otobusbiletuygulama";

// Form verilerini al
$seatNumber = $_POST['seatNumber'];
$seferId = $_POST['seferId'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$tc = $_POST['tc'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];

// Veritabanını güncelle
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}

// Durum tablosunu güncelle
$sql = "UPDATE durum SET durum='DOLU', cinsiyet='$gender' WHERE sefer_id=$seferId AND koltuk_no=$seatNumber";
if ($conn->query($sql) === TRUE) {
	$response['success'] = true;
} else {
	$response['success'] = false;
	$response['message'] = "Hata: " . $conn->error;
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($response);
?>
