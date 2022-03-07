<?php
$proses = $_POST['proses'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];

if(!empty($proses)) {
echo 'Proses : '.$proses;
echo '<br> Nama : '.$nama;
echo '<br> Mata Kuliah : '.$matkul;
echo '<br> Nilai UTS : '.$uts;
echo '<br> Nilai UAS : '.$uas;
echo '<br> Tugas : '.$tugas;
echo '<br><hr>';
}

$hasil_akhir = ($uts * 30/100) + ($uas * 35/100) + ($tugas * 35/100); 

//kelulusan
if($hasil_akhir > 55) {
    echo '<br>Hasil Akhir : '.$hasil_akhir;
    echo '<br> SISWA DINYATAKAN LULUS';
}
else {
    echo 'Hasil Akhir : '.$hasil_akhir;
    echo '<br> SISWA DINYATAKAN GAGAL';
}

//Grade Nilai
if($hasil_akhir > 0 && $hasil_akhir <= 35) {
    $grade = 'E';
    echo '<br> Grade : '.$grade;
}
elseif($hasil_akhir > 35 && $hasil_akhir <= 55) {
    $grade = 'D';
    echo '<br> Grade : '.$grade;
}
elseif($hasil_akhir > 55 && $hasil_akhir <= 69) {
    $grade = 'C';
    echo '<br> Grade : '.$grade;
}
elseif($hasil_akhir > 69 && $hasil_akhir <= 84) {
    $grade = 'B';
    echo '<br> Grade : '.$grade;
}
elseif($hasil_akhir > 84 && $hasil_akhir <= 100) {
    $grade = 'A';
    echo '<br> Grade : '.$grade;
}
else{
    echo '<br> Grade : I';
}

//Predikat
$predikat = $grade;
switch ($predikat) {
    case "E": 
        echo "<br>Pedikat : Sangat Kurang";
        break;
    case "D": 
        echo "<br>Predikat : Kurang";
        break;
    case "C": 
        echo "<br>Predikat : Cukup";
        break;
    case "B": 
        echo "<br>Predikat : Memuaskan";
        break;
    case "A": 
        echo "<br>Predikat : Sangat Memuaskan";
        break;
    default: 
        echo "<br>Predikat : Tidak ada";
        break;
}
?>