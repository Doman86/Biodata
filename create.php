<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE, PUT");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
include "konekdb.php";
include "konekdb.php";

$nama = $_POST['nama'];
$nis = $_POST['nis'];
$tplahir = $_POST['tplahir'];
$tglahir = $_POST['tglahir'];
$kelamin = $_POST['kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];

$stmt = $db->prepare("INSERT INTO siswa (nis, nama, tplahir, tglahir, kelamin, agama, alamat) 
                      VALUES (?, ?, ?, ?, ?, ?, ?)");
$result = $stmt->execute([$nis, $nama, $tplahir, $tglahir, $kelamin, $agama, $alamat]);

echo json_encode([
    'success' => $result
]);
?>