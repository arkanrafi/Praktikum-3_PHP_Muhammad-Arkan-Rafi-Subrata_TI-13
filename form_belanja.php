<?php
$proses = $_POST["proses"];
$nama_customer = $_POST["customer"];
$produk_pilihan = $_POST["produk"];
$jumlah_beli = $_POST["jumlah"];

if ($produk_pilihan == "tv") {
    $total_belanja = $jumlah_beli * 4200000;
} elseif ($produk_pilihan == "kulkas") {
    $total_belanja = $jumlah_beli * 3100000;
} elseif ($produk_pilihan == "mesin cuci") {
    $total_belanja = $jumlah_beli * 3800000;
} 
echo '<br/> Nama Customer :' . $nama_customer;
echo '<br/> Produk Pilihan :' . $produk_pilihan;
echo '<br/> Jumlah Beli :' . $jumlah_beli;
echo '<br/> Total Belanja : Rp. ' .number_format ($total_belanja,2,',','.');
?>