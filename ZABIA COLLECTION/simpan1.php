<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$Username = $_POST['Username'];
$password = $_POST['password']; 

$query = "SELECT * FROM informasi WHERE Username='$Username',password='$password'";
mysqli_query($koneksi, $query);

echo "<script>alert('Data yang anda Input sukses');window.location='Dashboard .php'</script>";

?>