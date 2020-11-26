<?php

function cek($nama, $warna = 'red')
{
    $hitung = strlen($nama);
    if ($hitung <= 10 && $hitung > 0) {
        echo $warna;
        $hasil =  $hitung * 300;
        echo "<h1 style='color:" . $warna . ";'>Rp. " . $hasil . '</br>';
        echo $nama . '</br>';
    } elseif ($hitung <= 20 && $hitung > 10) {
        $hasil = $hitung * 500;
        echo "<h1 style='color:" . $warna . ";'>Rp. " . $hasil . '</br>';
    } elseif ($hitung > 20) {
        $hasil = $hitung * 700;
        echo $nama . '</br>';
    }
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $warna = $_POST['warna'];
    cek($nama, $warna);
}

?>
<form action="" method="POST">
    <input name="nama" type="text" placeholder="nama">
    <input name="warna" type="text" placeholder="warna">
    <button type="submit" name="submit">Submit</button>
</form>