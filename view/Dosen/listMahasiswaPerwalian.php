<!doctype html>
<html>
<head>
    <title>List Perwalian Dosen</title>
</head>

<body>
<?php


include_once ('Model/Mahasiswa.php');
include_once ('Model/Dosen.php');


?>
<h1>List Mahasiswa Perwalian</h1>
<p>
    <?php

    $noIndukDosen = $_REQUEST['no_induk_dosen'];
    $mhsList= Mahasiswa::getByNoIndukDosen($noIndukDosen);
    $dsnList = Dosen::getByPrimaryKey($noIndukDosen);
    $dsn = [];
    while($data = mysqli_fetch_object($dsnList))
    {
        $dsn = $data;
    }

    ?>

</p>
<p>

    No Induk Dosen : <?=$dsn->no_induk_dosen?>
    Nama Dosen : <?=$dsn->nama_dosen?>

</p>
<table border="1">

    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>


    </tr>

    <?php

    $no = 1;
    while($mahasiswa = mysqli_fetch_object($mhsList)){
        ?>

        <tr>
            <td><?=$no++?></td>
            <td><?= $mahasiswa->nim_mahasiswa?></td>
            <td><?= $mahasiswa->nama_mahasiswa?></td>
            <td><?= $mahasiswa->tgl_lahir_mahasiswa?></td>
            <td><?= $mahasiswa->jenis_kelamin_mahasiswa?></td>

        </tr>

        <?php

    }
    ?>
</table>
</body>
</html>
