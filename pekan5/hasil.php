<?php
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$matkul = $_POST['matkul'];
$nilai = $_POST['nilai'];

include 'mahasiswanf.php';

$mahasiswa = new mahasiswanf($nama, $nim, $matkul, $nilai);
$grade = $mahasiswa->grade();
$hasilujian = $mahasiswa->hasilujian();

echo $nama;
echo $nim;
echo $matkul;
echo $nilai;

// Tetapkan variabel $hasil
$hasil = $hasilujian; 

echo $hasil;
echo $grade;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Matkul</th>
                <th>Nilai</th>
                <th>Hasil Ujian</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><?= $nama ?></td>
                <td><?= $nim ?></td>
                <td><?= $matkul ?></td>
                <td><?= $nilai ?></td>
                <!-- Menampilkan hasil -->
                <td><?= $hasil ?></td>
                <td><?= $grade ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
