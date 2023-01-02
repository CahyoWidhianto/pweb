<?php
include ('../../Model/Dosen.php');

$noInduk = $_REQUEST['no_induk_dosen'];
$nama = $_REQUEST['nama_dosen'];
$tglLahir = $_REQUEST['tgl_lahir_dosen'];
$jk = $_REQUEST['jenis_kelamin_dosen'];
$gelar = $_REQUEST['gelar_dosen'];
$pendidikanTerakhir = $_REQUEST['pendidikan_terakhir_dosen'];


$dsn = new Dosen();

$dsn->no_induk_dosen = $noInduk;
$dsn->nama_dosen = $nama;
$dsn->tgl_lahir_dosen = $tglLahir;
$dsn->jenis_kelamin_dosen = $jk;
$dsn->gelar_dosen = $gelar;
$dsn->pendidikan_terakhir_dosen = $pendidikanTerakhir;

$dsn->update();

header('Location: /List.php');