<?php
// Koneksi ke database Tarhilala
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "tarhilala";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data amount dari tabel data_sampah per bulan untuk tahun 2023
$sql = "SELECT MONTHNAME(created_at) AS month, SUM(amount) AS total_amount FROM data_sampah WHERE YEAR(created_at) = 2023 GROUP BY MONTH(created_at)";
$result = $conn->query($sql);

$dataAmount = array();
$dataCategories = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dataAmount[] = $row['total_amount'];
        $dataCategories[] = $row['month'];
    }
}

$conn->close();

// Mengirimkan data ke dalam kode JavaScript
echo '<script>';
echo 'const dataAmount = ' . json_encode($dataAmount) . ';';
echo 'const dataCategories = ' . json_encode($dataCategories) . ';';
echo '</script>';
?>
