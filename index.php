<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PWEB CRUD</title>
    <link rel="stylesheet" href="/aset/css/bootstrap.min.css">
    <script src="/aset/js/bootstrap.min.js "></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="container-fluid p-4">
    <h1>Aplikasi Pemrogaman Web</h1>

    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                </div>
                <a class="btn btn-outline-secondary btn-lg" href="index.php?page=listMahasiswa">List Mahasiswa</a><br>
                <P></P>
                <a class="btn btn-outline-secondary btn-lg" href="index.php?page=tambahMahasiswa">Tambah Mahasiswa</a><br>
                <P></P>
                <a class="btn btn-outline-secondary btn-lg " href="index.php?page=listDosen">List dosen</a>
                <p></p>
                <a class="btn btn-outline-secondary btn-lg " href="index.php?page=tambahDosen">Tambah dosen</a>

            </div>
        </div>




        <div class="col-9">
            <?php
            $halaman = "view/home.php";
            if(isset($_REQUEST['page'])) {
                $page = $_REQUEST['page'];
                switch($page){
                    case 'listMahasiswa';
                    $halaman = 'view/Mahasiswa/list.php';
                    break;
                    case 'tambahMahasiswa';
                    $halaman = 'view/Mahasiswa/formTambah.php';
                    break;
                    case 'hapusMahasiswa';
                    $halaman = 'view/Mahasiswa/KonfirmasiHapus.php';
                    break;
                    case 'editMahasiswa';
                    $halaman = 'view/Mahasiswa/formUbah.php';
                    break;
                    case 'listDosen';
                    $halaman = 'view/Dosen/list.php';
                    break;
                    case 'tambahDosen';
                    $halaman = 'view/Dosen/formTambah.php';
                    break;
                    case 'hapusDosen';
                    $halaman = 'view/Dosen/KonfirmasiHapus.php';
                    break;
                    case 'editDosen';
                    $halaman = 'view/Dosen/formUbah.php';
                    break;
                    case 'listMahasiswaPerwalian';
                    $halaman = 'view/Dosen/listMahasiswaPerwalian.php';
                    break;
                }
            }
            include $halaman;

            ?>

        </div>
    </div>

</div>
</body>
</html>
