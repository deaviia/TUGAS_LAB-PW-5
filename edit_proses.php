<?php
    if(isset($_POST['simpan'])){
        include('koneksi.php');
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $gender = $_POST['gender'];
        $alamat = $_POST['alamat'];
        $update = mysqli_query($connection, "UPDATE mahasiswa set
        
        nama = '$nama',
        gender = '$gender',
        alamat = '$alamat'
        
        WHERE nim = '$nim'")

        or die(mysqli_error($connection));

        if ($update){
            echo "<h2>data berhasil diupdate</h2>";
            echo "<script>window.location = 'index.php'</script>";
        }

        else{
            echo "<h2>gagal menyimpan data</h2>";
            echo "<a href = 'edit.php ?nim = ".$nim."'>Kembali</a>";
        }

    }

    else{
        echo "<script>window.history.back()</script>";
    }


?>