<?php
// Membuat array dengan index "nama" dan "umur"
$data = array(
    array("nama" => "Fakhriza", "umur" => 20),
    array("nama" => "Edo", "umur" => 20),
    array("nama" => "Fajar", "umur" => 20),
    array("nama" => "Rizal", "umur" => 18),
    array("nama" => "Fikri", "umur" => 18),
    array("nama" => "Daffa", "umur" => 18),
    array("nama" => "Billal", "umur" => 18),
    array("nama" => "Khoirul", "umur" => 19),
    array("nama" => "Abid", "umur" => 19),
    array("nama" => "Raka", "umur" => 19),
    array("nama" => "Ghalib", "umur" => 22),
    array("nama" => "Ginting", "umur" => 22),
    array("nama" => "Jonathan", "umur" => 22),
    array("nama" => "Aldi", "umur" => 23),
    array("nama" => "Ari", "umur" => 24)
);

// Konversi array menjadi JSON
$json_data = json_encode($data);

// Tampilkan JSON
echo $json_data;
?>