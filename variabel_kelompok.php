<?php
$nama = "aji saputra";
$nim = 2018804503;
$kelas = "sistem Informasi malam";
function identitas()
{
    global $nama, $nim, $kelas;
    echo "Nama Mahasiswa : $nama";
    echo "<br>";
    echo "Nim Mahasiswa : $nim";
    echo "<br>";
    echo "Kelas : $kelas"; 
}
echo " identitas ";
echo "<br>";
identitas();
?>
