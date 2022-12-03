<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$name = $_POST ['name'];
$Username = $_POST['Username'];
$password = $_POST['password']; 
$email = $_POST['email'];
$phone = $_POST['phone'];

$query = "INSERT INTO informasi SET name ='$name', Username='$Username', password='$password', email='$email', phone='$phone'";
mysqli_query($koneksi, $query);

echo "<script>alert('Data yang anda Input sukses');window.location='Form Login.php'</script>";

?>