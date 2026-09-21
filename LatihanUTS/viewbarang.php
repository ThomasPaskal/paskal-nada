<?php
include "daftar_barang.php";

$kd = $_GET['kdbarang'];

foreach ($arrBarang as $barang) {
    if ($barang[0] == $kd) {
        $data = $barang;
        break;
    }
}

$tglExp = explode(" ", $data[3]);
$tanggal = $tglExp[0];
$bulan = $tglExp[1];
$tahun = $tglExp[2];

$jenisArr = explode(",", $data[2]);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Informasi Barang</title>
</head>
<body>

<h2>Form Informasi Barang</h2>

<form>
<table>
    <tr>
        <td>Kode Barang</td>
        <td><input type="text" value="<?= $data[0]; ?>"></td>
    </tr>
    <tr>
        <td>Nama Barang</td>
        <td><input type="text" value="<?= $data[1]; ?>"></td>
    </tr>
    <tr>
        <td>Jenis</td>
        <td>
            <input type="checkbox" <?= ($data[2]=="Makanan")?"checked":""; ?>> Makanan
            <input type="checkbox" <?= ($data[2]=="Minuman")?"checked":""; ?>> Minuman
            <input type="checkbox" <?= ($data[2]=="Bumbu")?"checked":""; ?>> Bumbu
        </td>
    </tr>
    <tr>
        <td>Tanggal Kadaluwarsa</td>
        <td>
            <select>
                <?php
                for ($i=1; $i<=31; $i++) {
                    $sel = ($i == $tanggal) ? "selected" : "";
                    echo "<option $sel>$i</option>";
                }
                ?>
            </select>

            <select>
                <?php
                $bulanArr = ["Januari","Februari","Maret","April","Mei","Juni",
                             "Juli","Agustus","September","Oktober","November","Desember"];
                foreach ($bulanArr as $b) {
                    $sel = ($b == $bulan) ? "selected" : "";
                    echo "<option $sel>$b</option>";
                }
                ?>
            </select>

            <select>
                <?php
                for ($i=2000; $i<=2050; $i++) {
                    $sel = ($i == $tahun) ? "selected" : "";
                    echo "<option $sel>$i</option>";
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Harga Beli</td>
        <td><input type="text" value="<?= $data[4]; ?>"></td>
    </tr>
    <tr>
        <td>Harga Jual</td>
        <td><input type="text" value="<?= $data[5]; ?>"></td>
    </tr>
    <tr>
        <td>Satuan</td>
        <td>
            <input type="radio" name="satuan" <?= ($data[6]=="Kg")?"checked":""; ?>> Kg
            <input type="radio" name="satuan" <?= ($data[6]=="Botol")?"checked":""; ?>> Botol
            <input type="radio" name="satuan" <?= ($data[6]=="Pcs")?"checked":""; ?>> Pcs
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <button type="button" onclick="window.location='listbarang.php'">
                Batal
            </button>
        </td>
    </tr>
</table>
</form>

</body>
</html>