<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="" width="180" loading="lazy">
            </a>

            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link active" href="?menu=profil">Profil</a></li>
                            <li class="nav-item"><a class="nav-link" href="?menu=sejarah">Sejarah</a></li>
                            <li class="nav-item"><a class="nav-link" href="?menu=jurusan">Jurusan</a></li>
                            <li class="nav-item"><a class="nav-link" href="?menu=prestasi">Prestasi</a></li>
                            <li class="nav-item"><a class="nav-link" href="?menu=kegiatan">Kegiatan</a></li>
                            <li class="nav-item"><a class="nav-link" href="?menu=kontak">Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </nav>

    <div class="container mt-4">
        <section>
            <?php
                if (isset($_GET['menu'])) {
                    $isi = $_GET['menu'];

                    if ($isi == "profil") {
                        require_once "pages/profil.php";
                    }
                    if ($isi == "sejarah") {
                        require_once "pages/sejarah.php";
                    }
                    if ($isi == "jurusan") {
                        require_once "pages/jurusan.php";
                    }
                    if ($isi == "prestasi") {
                        require_once "pages/prestasi.php";
                    }
                    if ($isi == "kegiatan") {
                        require_once "pages/kegiatan.php";
                    }
                    if ($isi == "kontak") {
                        require_once "pages/kontak.php";
                    }
                } else {
                    require_once "pages/profil.php";
                }

                if (isset($_POST['tombol'])) {
                    $nama = $_POST['nama'];
                    $pesan = $_POST['pesan'];
                    $email = $_POST['email'];

                    echo "$nama <br> $pesan <br> $email";
                }
            ?>
        </section>

        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Web ini dibuat oleh : Shifa</li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
