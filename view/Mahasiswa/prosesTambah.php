<?php
include ('../../Model/mahasiswa.php');

$nim = $_REQUEST['nim'];
$nama = $_REQUEST['nama'];
$tglLahir = $_REQUEST['tgl'];
$jk = $_REQUEST['jk'];
$noIndukDosen = $_REQUEST['no_induk_dosen'];


$mhs = new Mahasiswa();

$mhs->nim_mahasiswa = $nim;
$mhs->nama_mahasiswa = $nama;
$mhs->tgl_lahir_mahasiswa = $tglLahir;
$mhs->jenis_kelamin_mahasiswa = $jk;
$mhs->no_induk_dosen = $noIndukDosen;


$mhs->insert();

header('Location: ../../index.php?page=listMahasiswa');