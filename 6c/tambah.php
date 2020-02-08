<?php include('config.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>ARKADEMY</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Semoga Segera Bekerja</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link badge-warning" href="tambah.php">ADD</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top:20px">
        <h2>Add Data</h2>

        <hr>

        <?php
        if (isset($_POST['submit'])) {
            $nama           = $_POST['nama'];
            $work           = $_POST['work'];
            $salary         = $_POST['salary'];

            $cek = mysqli_query($koneksi, "SELECT * FROM kerja WHERE nama='$nama'") or die(mysqli_error($koneksi));

            if (mysqli_num_rows($cek) == 0) {
                $sql = mysqli_query($koneksi, "INSERT INTO kerja(nama, work, salary) VALUES($nama', '$work', '$salary')") or die(mysqli_error($koneksi));

                if ($sql) {
                    echo '<script>alert("Berhasil menambahkan data."); document.location="tambah.php";</script>';
                } else {
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                }
            } else {
                echo '<div class="alert alert-warning">Gagal, Nama sudah terdaftar.</div>';
            }
        }
        ?>

        <form action="tambah.php" method="post">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" size="4" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Work</label>
                <div class="col-sm-10">
                    <input type="text" name="work" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Salary</label>
                <div class="col-sm-10">
                    <input type="text" name="salary" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">&nbsp;</label>
                <div class="col-sm-10">
                    <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
                </div>
            </div>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>