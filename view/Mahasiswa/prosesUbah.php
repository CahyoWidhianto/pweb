<?php
include ('../../Model/Mahasiswa.php');

$nim = $_REQUEST['nim_mahasiswa'];
$nama = $_REQUEST['nama_mahasiswa'];
$tglLahir = $_REQUEST['tgl_lahir_mahasiswa'];
$jk = $_REQUEST['jenis_kelamin_mahasiswa'];
$noIndukDosen = $_REQUEST['no_induk_dosen'];


$mhs = new Mahasiswa();

$mhs->nim_mahasiswa = $nim;
$mhs->nama_mahasiswa = $nama;
$mhs->tgl_lahir_mahasiswa = $tglLahir;
$mhs->jenis_kelamin_mahasiswa = $jk;
$mhs->no_induk_dosen = $noIndukDosen;


$mhs->update();

header('Location: /index.php');