<?php include 'koneksi.php'; 
$id = $_GET['id'];
$produk = mysqli_query($koneksi, "select * from data_produk where id='$id'"); 
$row = mysqli_fetch_array($produk); 
     ?>
<!DOCTYPE html>
<html>

<head>
    <title> Edit Data Barang</title>
    <link href="style_edit.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="background">
        <img src="image/lingkaran.png">
        <form method="post" action="update.php">
            <input type="hidden" value="<?php echo $row['id'];?>" name="id">
            <input type="hidden" value="<?php echo $row['kode_produk'];?>" name="kode_produk">
            <table>
                <tr>
                    <td>Kode Produk</td>
                    <td>
                        <?php echo $row['kode_produk'];?>
                        <tr>
                            <td>Tanggal Transaksi</td>
                            <td><input value="<?php echo $row['tanggal'];?>" type="text" name="tanggal"></td>
                        </tr>
                    </td>
                </tr>
                <tr>
                    <td>Nama Produk</td>
                    <td><input type="text" value="<?php echo $row['nama_produk'];?>" name="nama_produk"></td>
                </tr>
                <tr>
                    <td>Unit</td>
                    <td><input value="<?php  echo $row['unit'];?>" type="text" name="unit"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input value="<?php echo $row['harga'];?>" type="text" name="harga"></td>
                </tr>

                <tr>
                    <td colspan="2"><button class = "button1" type="submit" value="simpan">Update Data</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>