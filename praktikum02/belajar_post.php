<?php
// ctrl-d ubah bareng kebawah
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$matkul = $_POST['matkul'];
$nomor_telepon = $_POST['nomor_telepon'];

echo "Form Pendaftaran Mahasiswa <br>";
echo "Nama : " . $nama . "<br>";
echo "jenis_kelamin : " .  $jenis_kelamin . "<br>";
echo "Mata Kuliah : " . $matkul . "<br>";
echo "Nomor Telepon : " . $nomor_telepon . "<br>";