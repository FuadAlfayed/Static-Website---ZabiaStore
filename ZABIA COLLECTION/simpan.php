<?php
include 'koneksi.php';

// menyimpan data kedalam variabel
$kode           = $_POST['kode_produk'];
$nama           = $_POST['nama_produk'];
$unit           = $_POST['unit'];
$harga          = $_POST['harga'];
$tanggal        = $_POST['thn'].'-'.$_POST['bln'].'-'.$_POST['tanggal'];

            if($kode=="")
            {
            // echo "NIM kosong belum diisi, ";
                echo "<script>alert('kode Belum diisi');history.go(-1);</script>";
            }
            if($nama=="")
            {
                echo "<script>alert('Nama Belum diisi');history.go(-1);</script>";
            }
            if($harga=="")
            {
                echo "<script>alert('harga diisi');history.go(-1);</script>";
            }
        else
        {
        /* cek input NIM apakah sudah ada nim yang digunakan */
        $pilih="select * from data_produk where kode_produk='$kode'";
        $cek=mysqli_query($koneksi, $pilih);
        $jumlah_data = mysqli_num_rows($cek);
        if ($jumlah_data >= 1 )
        {
            echo "<script>alert('kode yang sama sudah digunakan');history.go(-1);</script>";
        }
    else
    {
    // query untuk insert data mahasiswa
    $query="INSERT INTO data_produk SET kode_produk='$kode',nama_produk='$nama',unit='$unit',harga='$harga',tanggal='$tanggal'";
    mysqli_query($koneksi, $query);
    // echo " Input Data yang anda masukkan sukses berhasil";
        echo "<script>alert('Data yang anda Input sukses');window.location='forminput.php'</script>";
    }
}
?>