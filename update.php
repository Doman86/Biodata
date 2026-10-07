<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE, PUT");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
include "konekdb.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$tplahir = $_POST['tplahir'];
$tglahir = $_POST['tglahir'];
$kelamin = $_POST['kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];

$stmt = $db->prepare("UPDATE siswa SET nis = ?, nama = ?, tplahir = ?, tglahir = ?, kelamin = ?, agama = ?, alamat = ? WHERE id = ?");
$result = $stmt->execute([$nis, $nama, $tplahir, $tglahir, $kelamin, $agama, $alamat, $id]);

echo json_encode([
    'success' => $result
]);
?>