<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
include("connect.php");

$id = isset($_GET['id']) ? mysqli_real_escape_string($conn, $_GET['id']) : '';

if (
    isset($_POST['nama_mobil']) && !empty($_POST['nama_mobil']) &&
    isset($_POST['brand_mobil']) && !empty($_POST['brand_mobil']) &&
    isset($_POST['warna_mobil']) && !empty($_POST['warna_mobil']) &&
    isset($_POST['tipe_mobil']) && !empty($_POST['tipe_mobil']) &&
    isset($_POST['harga_mobil']) && !empty($_POST['harga_mobil'])
) {
    $nama_mobil = $_POST['nama_mobil'];
    $brand_mobil = $_POST['brand_mobil'];
    $warna_mobil = $_POST['warna_mobil'];
    $tipe_mobil = $_POST['tipe_mobil'];
    $harga_mobil = $_POST['harga_mobil'];

    $id = mysqli_real_escape_string($conn, $id);

    $sql = "UPDATE showroom_mobil SET 
            nama_mobil='$nama_mobil', brand_mobil='$brand_mobil', 
            warna_mobil='$warna_mobil', tipe_mobil='$tipe_mobil', 
            harga_mobil=$harga_mobil WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Data berhasil diperbarui!');
                window.location.href='list_mobil.php';
              </script>";
    }
}
?>
