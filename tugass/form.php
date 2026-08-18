<?php require 'navbar.php' ?>

<!-- awal container -->
<div class="container">

    <!-- awal column -->
    <div class="container text-left">
        <h1 class="fw-normal display-4">Form Tambah Siswa</h1>
        <hr class="border border-dark border-2 opacity-100">
        <div class="row align-items-center">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <!-- awal card-->
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                        <!-- awal form -->
                        <div>
                            <h3>Data Profil Siswa</h3>
                            <input type="text" name="nisn" class="form-control"
                                placeholder="NISN | Contoh: 1234567890"><br>

                            <input type="text" name="nama" class="form-control"
                                placeholder="Nama Lengkap | Contoh: Matthias Von Herdhart"><br>

                            <input type="text" name="kelas" class="form-control"
                                placeholder="Kelas | Contoh: XI RPL 1"><br>
                            
                            <label for="jk" class="form-label">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="Laki-laki" value="L">
                                <label class="form-check-label" for="Laki-laki">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="Perempuan" value="P">
                                <label class="form-check-label" for="Perempuan">
                                    Perempuan
                                </label>
                            </div>

                            <h3>Akun Kredensial Siswa</h3>
                            <input type="email" name="email" class="form-control"
                                placeholder="Email | Contoh: matthiasvonherdhart@gmail.com"><br>
                            <input type="password" name="password" class="form-control"
                                placeholder="Password | Contoh: 123456"><br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="index.php" class="btn btn-secondary">Kembali</a>
                        </div>

                        <!-- akhir form -->
                    </div>
                </div>
                <!-- akhir card -->
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
    <!-- akhir column-->

</div>
<!-- akhir container -->

<?php if(isset($_POST['kirim'])): ?>
<h1><center>Output dari FORM</center></h1>
<?php

$nisn       =   $_POST['nisn'];
$nama       =   $_POST['nama'];
$kelas      =   $_POST['kelas'];
$jk         =   $_POST['jk'];
$email      =   $_POST['email'];
$password   =   $_POST['password'];

echo "NISN : " . $nisn . "<br>";
echo "Nama : " . $nama . "<br>";
echo "Kelas : " . $kelas . "<br>";
echo "Jenis Kelamin : " . $jk . "<br><br><br>";

?>

<?php endif; ?>
<?php require 'footer.php' ?>