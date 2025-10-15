Belajar PHP
<h1>Saya Belajar PHP</h1>
<?php
    $nama = "Shifa Aura Nuradiansyah";
    $kelas = 10;
    $umur = 16;
    $alamat = "Jl. Jati Utara 3 RT.O6/RW.02";
    $hobi = "Tidur, Menggambar, Bermain game, Makan";
    $cita_cita = "Duit unlimited";
    $enter = "<br/>";

    echo $nama;
    echo $enter;

    echo $kelas;
    echo $enter;

    echo $umur;
    echo $enter;

    echo $alamat;
    echo $enter;

    echo $hobi;
    echo $enter;

    echo $cita_cita;

/*
    echo "<h1>Saya Belajar PHP</h1>";
    echo "Nama : ";
    echo "Shifa Aura Nuradiansyah" . "<br/>";

    echo "Kelas : ";
    echo "10-erpeel" . "<br/>";

    echo "Umur : ";
    echo "Hanya ALLAH yang tau" . "<br/>";

    echo "Alamat : ";
    echo "Jl. Jati Utara 3 RT.06 RW.02" . "<br/>";

    echo "Hobi : ";
    echo "Menghitung duit" . "<br/>";

    echo "Cita-cita : ";
    echo "duit unlimited" . "<br/>";
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Cypa</title>
</head>
<body>
    <div>
        <h1>Identitas</h1>
        <table>
            <tbody>
                <tr>
                    <td>Nama  :</td>
                    <td><?=$nama;?></td>
                </tr>
                <tr>
                    <td>Kelas :</td>
                    <td><?=$kelas;?></td>
                </tr>
                <tr>
                    <td>Umur :</td>
                    <td><?=$umur;?></td>
                </tr>
                <tr>
                    <td>Alamat :</td>
                    <td<?=$alamat;?>></td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td><?=$hobi;?></td>
                </tr>
                <tr>
                    <td>Cita-cita</td>
                    <td><?=$cita_cita;?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>