<?php
$nama = $_GET['nama'];
$matkul =$_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

// buat total
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) /3;
$grade;
$predikat;
$status;

// buat perhitungan if untuk mencari status
if ($total_nilai >= 85) {
    $status = "LULUS";
}
else {
    $status = "GAGAL";
}
// buat perhitungan if untuk mencari Grade
if ($total_nilai >= 85) {
    $grade = "A";
}
if ($total_nilai >= 70) {
    $grade = "B";
}
if ($total_nilai >= 56) {
    $grade = "C";
}
if ($total_nilai >= 36) {
    $grade = "D";
}
else {
    $grade = "E";
}

// buat perhitungan switchcase untuk mencari predikat
switch ($grade) {
    case "A":
        $predikat = "Sangat Memuaskan";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    case "D":
        $predikat = "Kurang";
        break;
    default:
    $predikat = "Sangat Kurang";
    break;
}

// cetak hasil:
echo "Nama : $nama <br>";
echo 'Matkul :' .$matkul . '<br>';
echo 'Nilai UTS :' .$nilai_uts . '<br>';
echo 'Nilai UAS :'.$nilai_uas . '<br>';
echo 'Nilai Tugas : '.$nilai_tugas. '<br>';
echo 'Grade :'.$grade. '<br>';
echo 'Predikat :'.$predikat. '<br>';
echo 'Status :'.$status;


?>