<!doctype html>
<html>
<head>
    <title>Konfirmasi Hapus</title>
</head>

<body>
<h1>Apakah anda yakin menghapus data ini?</h1>
<?php
include ('../db/Model/mahasiswa.php');
$nim_mahasiswa=$_REQUEST['nim_mahasiswa'];
$mhsList = Mahasiswa::getByPrimaryKey($nim_mahasiswa);
$mhs = [];
while($mahasiswa = mysqli_fetch_object($mhsList))
{
    $mhs = $mahasiswa;
}

?>

<p>
    No Mahasiswa : <?=$mhs->nim_mahasiswa?>
</p>
<p>
    Nama Mahasiswa : <?=$mhs->nama_mahasiswa?>
</p>

<form action="/view/Dosen/prosesHapus.php">
    <input type="hidden" name="nim_mahasiswa" value="<?=$mhs->nim_mahasiswa?>">
    <a href="index.php?page=listMahasiswa"><< Kembali</a>
    <button type="submit">Hapus</button>
</form>

</body>
</html>