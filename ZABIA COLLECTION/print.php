<!DOCTYPE html>
<html>
<head>
    <title>Cetak Data</title>
    <link rel="stylesheet" href="print.css">
</head>
<body>
    <center>
        <h2>Data Produk</h2>
        <h4>Zabia Collection </h4>
    </center>
    <?php
    include 'koneksi.php';
    ?>
    <table border="1" style="width: 100%" cellpadding="7" align="center">
        <tr>
            <th width="1">No</th>
            <th>Kode Produk</th>
            <th>Tanggal Transaksi</th>
            <th>Nama Produk</th>
            <th>Unit</th>
            <th>Harga</th>
        </tr>
    <?php
    $no = 1;
    $sql = mysqli_query($koneksi,"select * from data_produk");
    while($data = mysqli_fetch_array($sql)){
        ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['kode_produk']; ?></td>
            <td><?php echo $data['tanggal']; ?></td>
            <td><?php echo $data['nama_produk']; ?></td>
            <td><?php echo $data['unit']; ?></td>
            <td><?php echo $data['harga']; ?></td>
           
        </tr>     
        <?php
    }
    ?>
</table>

    <script>
     window.print();
    </script>

</body>
</html>