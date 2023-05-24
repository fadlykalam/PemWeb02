<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Form Handling</title>
    <style>
        body{
            background:black;
        }
        h1, h2, h3, h4, h5, span, label {
            color: white;
        }
        .btn-kirim {
            background: green;
            color: white;
            padding: 5px;
            border: 0;
            border-radius: 10px;
        }
        .btn-reset {
            background: red;
            color: white;
            padding: 5px;
            border: 0;
            border-radius: 10px;
        }
        .form-control{
            width: 25rem;
        }
        .rounded{
            width: 150px;
            height: 150px;
        }
    </style>
</head>
<body>
    <h1 class="display-4" style="text-align: center;">Form Pendaftaran Mahasiswa</h1>
    <br>
    <div class="text-center">
        <img src="images/logo nf jpg.png" class="rounded" alt="...">
    </div>
    <form action="belajar_post.php" method="POST">
        <!-- tipe teks -->
        <label for="">Nama Mahasiswa</label>
        <br>
        <input type="text" name="nama" class="form-control">
        <br><br>
        <!-- tipe radio -->
        <label for="">Jenis Kelamin</label>
        <br>
        <input type="radio" name="jenis_kelamin" value="laki laki"><label for=""> Laki-Laki</label>
        <br>
        <input type="radio" name="jenis_kelamin" value="perempuan"><label for=""> Perempuan</label>
        <br><br>
        <!-- tipe checkbox -->
            <label for="">Mata Kuliah Pilihan</label><br>
        <input type="checkbox" name="matkul" value="matematika komputer">
            <label for="">Matematika Komputer</label><br>
        <input type="checkbox" name="matkul" value="pemrograman web 2">
            <label for="">Pemrograman Web 2</label><br>
        <input type="checkbox" name="matkul" value="jaringan komputer">
            <label for="">Jaringan Komputer</label><br><br>
        <!-- tipe number format -->
        <label for="">Nomor Telepon</label><br>
        <input type="number" name="nomor_telepon" class="form-control"><br><br>
        <!-- button -->
        <button type="submit" class="btn btn-success">Kirim !</button>
        <button type="reset" class="btn btn-danger">Reset Data</button>
    </form>
</body>
</html>