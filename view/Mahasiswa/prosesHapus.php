<?php
include('Model/mahasiswa.php');
// ambil nim
$nim_mahasiswa = $_REQUEST['nim_mahasiswa'];

// ambil data dari dabatabase berdasarkan primary key
$mhs = new mahasiswa();
$mhs->nim_mahasiswa= $nim_mahasiswa;

// panggil method deleted
$mhs->delete();

// kembali ke halaman index
header('location: list.php');