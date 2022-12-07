<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus CRUD</title>
</head>

<?php
    if(isset($_GET['nim'])){
        include('koneksi.php');
        $nim = $_GET['nim'];
        $cek = mysqli_query($connection, "SELECT nim from mahasiswa
        where nim = '$nim'") or die(mysqli_error($connection));

        if(mysqli_num_rows($cek)==0){
            echo "<script>window.history.back()</script>";
        }
        else{
            $del = mysqli_query($connection, "DELETE FROM mahasiswa WHERE nim = '$nim'");
            if ($del){
                echo "<h3>Data mahasiswa berhasil dihapus</h3>";
                echo "<script>window.location = 'index.php'</script>";
            }
            else{
                echo "<h2>gagal menghapus data</h2>";
                echo "<a href = 'index.php'>Kembali</a>";
            }
        }
    }
    else{
        echo "<script>window.history.back()</script>";
    }
?>
<body>
    
</body>
</html>