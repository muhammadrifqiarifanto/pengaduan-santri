<?php
include "koneksi.php";

$tanggal = $_POST['tanggal'];
$name = $_POST['name'];
$kelas = $_POST['kelas'];
$judul_laporan = $_POST['judul_laporan'];
$isi_laporan = $_POST['isi_laporan'];
$foto = $_POST['foto'];

$input = mysqli_query ($mysqli, "insert into pengaduan set tanggal='$tanggal', name='$name', kelas='$kelas', judul_laporan='$judul_laporan', isi_laporan='$isi_laporan', foto='$foto'");

if($input) {
    header('location:index.html');
}else{
    header('location:input_pengaduan.php');
}
?>