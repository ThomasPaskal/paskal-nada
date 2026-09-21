<?php
include "daftar_barang.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang</title>
    <style>
        table {
            border-collapse: collapse;
            width: 90%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<h2>Daftar Barang</h2>

<table>
    <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Jenis</th>
        <th>Tanggal Kadaluwarsa</th>
        <th>Harga Beli</th>
        <th>Harga Jual</th>
        <th>Satuan</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    foreach ($arrBarang as $barang) {
        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>{$barang[0]}</td>";
        echo "<td>{$barang[1]}</td>";
        echo "<td>{$barang[2]}</td>";
        echo "<td>{$barang[3]}</td>";
        echo "<td>{$barang[4]}</td>";
        echo "<td>{$barang[5]}</td>";
        echo "<td>{$barang[6]}</td>";
        echo "<td>
                <a href='viewbarang.php?kdbarang={$barang[0]}'>View</a>
              </td>";
        echo "</tr>";
        $no++;
    }
    ?>
</table>

</body>
</html>