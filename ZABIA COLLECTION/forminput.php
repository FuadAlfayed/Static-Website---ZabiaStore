<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <link href="style_input.css" rel="stylesheet" type="text/css">
</head>

<body>
    <style>

    </style>
    <div class="background">
        <img src="image/lingkaran.png">
        <a href = "Dashboard .php">Back</a>
        <h2>Input Data Barang </h2>
        <form method="post" action="simpan.php">
            <input type="hidden" value="<?php echo $data['id'];?>" name="id">
            <table>
                <tr>
                    <td>Kode Produk : </td>
                    <td><input type="text" name="kode_produk"></td>
                </tr>
                <tr>
                    <td>Tanggal transaksi :</td>
                    <td><select name="tanggal" size="1" kode="tanggal">
        <?php
        for ($i=1;$i<=31;$i++)
        {
            echo "<option value=".$i.">".$i."</option>";
        }
        ?>

        </select>
                        <select name="bln" size="1" kode="bln">
        <?php
        $bulan=array("","Januari","Februari","Maret","April","Mei","Juni",
        "Juli","Agustus","September","Oktober","November","Desember");
        for ($i=1;$i<=12;$i++)
        {
            echo "<option value=".$i.">".$bulan[$i]."</option>";
        }
        ?>

        </select>
                        <select name="thn" size="1" id="thn">
        <?php
        for ($i=2020;$i<=2025;$i++)
        {
            echo "<option value=".$i.">".$i."</option>";
        }
        ?>
            <tr><td>Nama Produk  :</td><td><input type="text" name="nama_produk"></td></tr>

                </td></tr>
        <!--Tanggal Lahir -->
        <tr><td>Unit :</td><td>
    <select name="unit" size="1" id="unit">
    <?php
    for ($i=1;$i<=1000;$i++)
    {
        echo "<option value=".$i.">".$i."</option>";
    }
    ?>
    </td></tr> 
        <tr><td>Harga :</td><td><input type="text" name="harga"></td></tr>
           
        </div>
    <tr><td colspan="2"><button type="submit" value="simpan" class = "button1">Simpan Data</button></td></tr>
    <tr><td colspan="2"><button type="cancel" value="batal" class = "button2">Batal</button></td></tr>
</table>
</form>
</body>
</html>