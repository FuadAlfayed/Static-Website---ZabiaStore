<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
    <link href = "lisproduk.css" rel = "stylesheet" type = "text/css">
</head>
<body>
<img src = "image/lingkaran.png">
<a id ="back" href = "Dashboard .php">Back</a>
    <div class="background">
    <header>
        <h2>Data Produk</h2>
    </header>
    <nav>
        <a href="Dashboard .php">[+] Home</a>
        <a href="forminput.php">[+] Tambah Baru</a>
    </nav>
    <br>
    <table border="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Produk</th>
            <th>Tanggal Transaksi</th>
            <th>Nama Produk</th>
            <th>Unit</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM data_produk";
        $query = mysqli_query($koneksi, $sql);
        while($produk = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$produk['id']."</td>";
            echo "<td>".$produk['kode_produk']."</td>";
            echo "<td>".$produk['tanggal']."</td>";
            echo "<td>".$produk['nama_produk']."</td>";
            echo "<td>".$produk['unit']."</td>";
            echo "<td>".$produk['harga']."</td>";

            echo "<td>";
            echo "<a href='formedit.php?id=".$produk['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$produk['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
    </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    <button style="margin-left:5%" onClick="print_d()">Print Document</button>
    <script>
        function print_d(){
            window.open("print.php","_blank");
        }
    </script>
    </body>
    </div>
</html>