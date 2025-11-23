<!-- Zodiak -->
<form action="" method="post">
    <input type="number" name="Tanggal" placeholder="Masukkan Tanggal"><br/>
    <input type="number" name="Bulan" placeholder="Masukkan Bulan"><br/>
    <input type="submit" name="Kirim" value="Zodiak anda..."><br/>
</form>

<form action="" method="post">
    a:
    <input type="number" name="a" placeholder="Masukkan Bilangan a"><br/>
    b:
    <input type="number" name="b" placeholder="Masukkan Bilangan b"><br/>

    <input type="submit" name="Jumlah" placeholder="Penjumlahan"><br/>
    <input type="submit" name="Kurang" placeholder="Pengurangan"><br/>
    <input type="submit" name="Kali" placeholder="Perkalian"><br/>
    <input type="submit" name="Bagi" placeholder="Pembagian"><br/>
</form>

<?php
    // Belajar Function
    function belajar() {
        echo "Hari ini saya belajar funtion";
    }

    belajar();
    function cekTanggal($tanggal) {
        if ($tanggal>0 && $tanggal<32) {
            // echo "Tanggal benar!";
            return true;
        }else {
            // echo "Tanggal salah!";
            return false;
        }
    }

    // cekTanggal(1);
    // cekTanggal(0);
    // cekTanggal(100);

    // $tanggal = 0;
    // $bulan = 1;

    // else {
        
    //     echo "Tanggal atau bulan salah!"
    // }

    // Menghitung luas persegi panjang
    function luasPersegiPanjang($p, $l) {
        $luas = $p*$l;
        return $luas;
    }

    $p = 55;
    $l = 33;
    $t = 155;

    echo "Volume balok dengan panjang $p, lebar $l, dan tinggi $t adalah : <br/>";
    echo luasPersegiPanjang($p,$l)*$t;

    // Zodiak
    if (isset($_POST['kirim'])) {
        $tanggal=$_POST['tanggal'];
        $bulan=$_POST['bulan'];
        zodiak($bulan, $tanggal);
    }

    function zodiak($bulan, $tanggal) {
        if ($tanggal>0 && $tanggal<32 && $bulan>0 && $bulan<13) {
            if ($bulan == 1) {
                if ($tanggal>0 && $tanggal<31) {
                    echo "Zodiak anda : Capricorn";
                }else {
                    echo "Zodiak anda : Aquarius";
                }
            }
            if ($bulan == 2) {
                if ($tanggal>0 && $tanggal<31) {
                    echo "Zodiak anda : Aquarius";
                }else {
                    echo "Zodiak anda : Pisces";
                }
            }
            if ($bulan == 3) {
                if ($tanggal>0 && $tanggal<31) {
                    echo "Zodiak anda : Pisces";
                }else {
                    echo "Zodiak anda : Aries";
                }
            }
            if ($bulan == 4) {
                if ($tanggal>0 && $tanggal<31) {
                    echo "Zodiak anda : Aries";
                }else {
                    echo "Zodiak anda : Taurus";
                }
            }
            if ($bulan == 5) {
                if ($tanggal>0 && $tanggal<31) {
                    echo "Zodiak anda : Taurus";
                }else {
                    echo "Zodiak anda : Gemini";
                }
            }
            if ($bulan == 6) {
                if ($tanggal>0 && $tanggal<31) {
                    echo "Zodiak anda : Gemini";
                }else {
                    echo "Zodiak anda : Cancer";
                }
            }
            if ($bulan == 7) {
                if ($tanggal>0 && $tanggal<31) {
                    echo "Zodiak anda : Cancer";
                }else {
                    echo "Zodiak anda : Leo";
                }
            }
            if ($bulan == 8) {
                if ($tanggal>0 && $tanggal<31) {
                    echo "Zodiak anda : Leo";
                }else {
                    echo "Zodiak anda : Virgo";
                }
            }
            if ($bulan == 9) {
                if ($tanggal>0 && $tanggal<31) {
                    echo "Zodiak anda : Virgo";
                }else {
                    echo "Zodiak anda : Libra";
                }
            }
            if ($bulan == 10) {
                if ($tanggal>0 && $tanggal<31) {
                    echo "Zodiak anda : Libra";
                }else {
                    echo "Zodiak anda : Scorpio";
                }
            }
            if ($bulan == 11) {
                if ($tanggal>0 && $tanggal<31) {
                    echo "Zodiak anda : Scorpio";
                }else {
                    echo "Zodiak anda : Sagittarius";
                }
            }
            if ($bulan == 12) {
                if ($tanggal>0 && $tanggal<31) {
                    echo "Zodiak anda : Sagittarius";
                }else {
                    echo "Zodiak anda : Capricorn";
                }
            }
        }else {
            echo "Tanggal atau bulan salah!!";
        }
    }

    // zodiak(1, 5);
    // zodiak(12, 30);
    // zodiak(5, 20);

    function cekBulan($bulan) {
        if ($bulan>0 && $bulan<12) {
            // echo "Bulan benar!";
            return true;
        }else {
            // echo "Bulan salah!";
            return false;
        }
    }

    // cekBulan(1);
    if (cekBulan(1) && cekTanggal(0)) {
        echo "Bulan atau tanggal benar!";
    }else {
        echo "Bulan atau tanggal salah!";
    }

    // Menghitung
    if (isset($_POST['hitung'])) {
        $hitung=$_POST['hitung'];
        if ($hitung == 'jumlah') {
            echo "Penjumlahan dari $a+$b adalah: <br/>";
            echo $a+$b;
        }
        if ($hitung == 'kurang') {
            echo "Pengurangan dari $a-$b adalah: <br/>";
            echo $a-$b;
        }
        if ($hitung == 'kali') {
            echo "Perkalian dari $a*$b adalah: <br/>";
        }
        if ($hitung == 'bagi') {
            echo "Pembagian dari $a/$b adalah: <br/>";
            echo $a*$b;
        }
    }

    function penjumlahan($a, $b) {
        $penjumlahan = $a + $b;
        return $penjumlahan;
    }
    function pengurangan($a, $b) {
        $pengurangan = $a - $b;
        return $pengurangan;
    }
    function perkalian($a, $b) {
        $perkalian = $a * $b;
        return $perkalian;
    }
    function pembagian($a, $b) {
        $pembagian = $a / $b;
        return $pembagian;
    }

?>