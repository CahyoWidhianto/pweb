<?php
include ('../../Model/Dosen.php');
$noInduk = $_REQUEST['no_induk_dosen'];
$dsn = new Dosen();
$dsn->no_induk_dosen  = $noInduk;
$dsn->delete();

header('Location: List.php');