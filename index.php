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
                <a class="btn btn-outline-secondary btn-lg" href="/index.php?halaman=listMahasiswa">List Mahasiswa</a><br>
                <P></P>
                <a class="btn btn-outline-secondary btn-lg" href="/index.php?halaman=tambahMahasiswa">Tambah Mahasiswa</a><br>
                <P></P>
                <a class="btn btn-outline-secondary btn-lg " href="/index.php?halaman=listDosen">List dosen</a>
                <p></p>
                <a class="btn btn-outline-secondary btn-lg " href="/index.php?halaman=tambahDosen">Tambah dosen</a>

            </div>
        </div>




        <div class="col-9">
            <?php
            $halaman = $_REQUEST['halaman'];
            if ($halaman === 'listMahasiswa'){
                include_once 'view/Mahasiswa/list.php';
            }
            elseif ($halaman === 'tambahMahasiswa'){
                include_once 'view/Mahasiswa/formTambah.php';
            }
            elseif ($halaman === 'hapusMahasiswa'){
                include_once 'view/Mahasiswa/KonfirmasiHapus.php';
            }
            elseif ($halaman === 'editMahasiswa'){
                include_once 'view/Mahasiswa/formUbah.php';
            }
            elseif ($halaman === 'listDosen'){
                include_once 'view/Dosen/list.php';
            }
            elseif ($halaman === 'tambahDosen'){
                include_once 'view/Dosen/formTambah.php';
            }
            elseif ($halaman === 'hapusDosen'){
                include_once 'view/Dosen/KonfirmasiHapus.php';
            }
            elseif ($halaman === 'editDosen'){
                include_once 'view/Dosen/formUbah.php';
            }
            elseif ($halaman === 'listMahasiswaPerwalian'){
                include_once 'view/Dosen/listMahasiswaPerwalian.php';
            }
            ?>

        </div>
    </div>

</div>
</body>
</html>
