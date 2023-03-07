<?php 

$nasabah = "kelas 2";

if ( $nasabah == "kelas vip"){
    echo "Mendapatkan kartu atm, buku tabungan, akses M-Banking, dan menjadi prioritas";
} else if ( $nasabah == "kelas 1") {
    echo "Mendapatkan kartu atm, akses M-Banking, dan buku tabungan";
} else if( $nasabah == "kelas 2") {
    echo "Mendapatkan kartu atm dan buku tabungan";
}

?>