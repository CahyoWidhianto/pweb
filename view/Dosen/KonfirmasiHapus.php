<!doctype html>
<html>
<head>
    <title>Konfirmasi Hapus</title>
</head>

<body>
<h1>Apakah anda yakin menghapus data ini?</h1>
<?php
include_once ('Model/Dosen.php');
$noInduk = $_REQUEST['no_induk_dosen'];
$dsnList = Dosen::getByPrimaryKey($noInduk);
$dsn = [];
while($dosen = mysqli_fetch_object($dsnList))
{
    $dsn = $dosen;
}

?>

<p>
    No Induk Dosen : <?=$dsn->no_induk_dosen?>
</p>
<p>
    Nama Dosen : <?=$dsn->nama_dosen?>
</p>

<form action="prosesHapus.php">
    <input type="hidden" name="no_induk_dosen" value="<?=$dsn->no_induk_dosen?>">
    <a href="list.php"><< Kembali</a>
    <button type="submit">Hapus</button>
</form>

</body>
</html>