<?php
    $menu = ['profil', 'kontak', 'kegiatan', 'jadwal'];
    $berita = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati modi minima quibusdam perferendis? Maxime magnam at, animi fuga error rerum? Ipsam, minus voluptatibus. Blanditiis placeat cumque omnis eius voluptatum officia architecto impedit, repellat aliquam quos eum ullam iusto vitae corporis numquam saepe. Illum cupiditate saepe quae sed corrupti quis ad?";
    $nama = "Nama : SMP PGRI 9 Sidoarjo";
    $npsn = "NPSN : 20540024";
    $status = "Status : Sekolah Swasta";
    $jenjang = "Bentuk Pendidikan : SMP";
    $alamat = "Jl. Jati Selatan. IV No.16, RT.01/RW.01";
    $kecamatan = "Kecamatan : Sidoarjo";
    $kabupaten = "Kabupaten : Sidoarjo";
    $provinsi = "Provinsi : Jawa Timur";
    $ruangan = "Total ruangan : 52";
    $guru = "Total guru : 34"
    $logo = "logo pgri9.jpg"
    $gambar = "dokumentasi.jpeg"
    $video = "Download.mp4"
    $enter = "<br/>"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web SMP PGRI 9 Sidoarjo</title>
</head>
<body>
    <div>
        <div>
            <ul>
                <li href="#"><?= $menu [0];?></li>
                <li href="#"><?= $menu [1];?></li>
                <li href="#"><?= $menu [2];?></li>
                <li href="#"><?= $menu [3];?></li>
            </ul>
        </div>
        <div>
            <h2>Profil</h2>
            <div>
                <img src="<?= $logo; ?>" alt="">
                <p><?= $nama.$enter.$npsn.$enter.$status.$enter.$jenjang; ?></p>
            </div>
        </div>
        <div>
            <h2>Kontak</h2>
            <div><p><?= $alamat.$enter.$kecamatan.$enter.$kabupaten.$enter.$provinsi; ?></p></div>
        </div>
        <div>
            <h2>Kegiatan</h2>
            <div>
                <img src="<?= $gambar; ?>" alt="">
                <p><?= $berita; ?></p>
            </div>
        </div>
        <div>
            <h2>Fasilitas</h2>
            <div>
                <video src="<?= $video; ?>"></video>
                <p><?= $ruangan.$enter.$guru; ?></p>
            </div>
        </div>
    </div>
</body>
</html>
