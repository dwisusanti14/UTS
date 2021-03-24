<?php 
    if(isset($_POST['simpan'])){
        $wilayah = $_POST['wilayah'];
        $jumlahpositif = $_POST['jumlahpositif'];
        $jumlahdirawat = $_POST['jumlahdirawat'];
        $jumlahsembuh = $_POST['jumlahsembuh'];
        $jumlahmeninggal = $_POST['jumlahmeninggal'];
        $namaoperator = $_POST['namaoperator'];
        $nimmhs = $_POST['nimmhs'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <style>
        table td, table th {
        border: 1px solid black;
        padding: 8px;
        }
    </style>
</head>
<body style="background-color: black">
    <div style="width: 70%; background-color: white; margin: 10px auto; padding: 20px;">
        <h1 style="text-align: center">Data Pasien Virus Covid19 Wilayah <?= $wilayah; ?> <br>
        Per <?= date('d-m-Y H:i:s'); ?> <br>
        <?= $namaoperator; ?> - <?= $nimmhs; ?>
        </h1>
        <hr>
        <table style="width: 100%; border: 1px solid black;">
            <thead>
                <tr>
                    <th>Positif</th>
                    <th>Dirawat</th>
                    <th>Sembuh</th>
                    <th>Meninggal</th>
                </tr>
            </thead>
            <tbody style="text-align: center">
                <tr>
                    <td><?= $jumlahpositif; ?></td>
                    <td><?= $jumlahdirawat; ?></td>
                    <td><?= $jumlahsembuh; ?></td>
                    <td><?= $jumlahmeninggal; ?></td>
                </tr>
            </tbody>
        </table>
        <button onclick="window.location.href='input.php'" style="margin-top: 15px; height: 40px; background-color: green; color: white;">KEMBALI</button>
    </div>
</body>
</html>