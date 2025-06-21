<h1>INDEX ARRAY</h1>
<?php
$buah = ["사과", "체리", "망고"];
echo "$buah[0]<br>";
echo "$buah[2]";

echo "<h2>Associative Array</h2>";
$mahasiswa = [
    "nama" => "Nana",
    "nim" => "14523206",
    "jurusan" => "TI"
];
echo $mahasiswa['nama'];
echo "<br>";
echo $mahasiswa['jurusan'];

echo "<h2>Multi Array</h2>";
$daftarMhs = [
    ["NANA",14524762,"TI"],
    ["CIPA",14524762,"ILKOM"],
];
echo $daftarMhs[1][0];
?>