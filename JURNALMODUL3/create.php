<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
include("connect.php");

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

    $query = "INSERT INTO showroom_mobil (nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil) 
              VALUES ('$nama_mobil', '$brand_mobil', '$warna_mobil', '$tipe_mobil', '$harga_mobil')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                window.location.href='home.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    } else {
    echo "<script>
            alert('Harap isi semua kolom!');
            window.location.href='form_create_mobil.php';
          </script>";
}
mysqli_close($conn);
?>