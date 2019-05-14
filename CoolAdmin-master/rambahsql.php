
<?php
include "koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database
 
if(isset($_POST['simpan'])){
$username     = $_POST['username']; // memanggil nama variabel id untuk dibuat menjadi variabel baru $id
$password    = $_POST['password'];

//menambahkan query sql tambah data untuk memasukkan data ke database
$data = mysqli_query($mysqli,"INSERT INTO jual SET id_mobil='$nama', mobil='$password'") or die ("data salah : ".mysqli_error($mysqli));
 
//  untuk mengetahui apakah data berhasil disimpan atau belum
if ($data) {
    include "berhasilsimpandata.php"; // untuk beralih ke halaman berhasilsimpandata.php
} else {
echo "Gagal Input Data!!!";
echo "<br><a href='form.php'>Kembali</a>"; // berfungsi untuk ngelink ke halaman menu.php
}
}
?>
