<?php include 'koneksi.php'; 
// menyimpan data kedalam variabel 
$id            = $_POST['id']; 
$kode          = $_POST['kode_produk']; 
$nama          = $_POST['nama_produk']; 
$unit          = $_POST['unit']; 
$harga         = $_POST['harga']; 
$tanggal       = $_POST['tanggal'];  
// query SQL untuk insert data ke dalam Mysql 
$query="UPDATE data_produk SET kode_produk='$kode',nama_produk='$nama',unit='$unit',harga='$harga',tanggal='$tanggal' where id='$id'"; mysqli_query($koneksi, $query); 
// mengalihkan ke halaman index.php 
echo "<script>alert('Data yang anda Update sukses');window.location='lisproduk.php'</script>"; ?>