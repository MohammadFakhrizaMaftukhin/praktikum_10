<?php
$data_identitas = array(
    'nim' => '234311018', 
    'nama' => 'Mohammad Fakhriza Maftukhin', 
    'ttl' => 'Magetan, 15 Februari 2005', 
    'alamat' => 'Dsn. Timang Desa Waduk RT.04/RW.1 Kec. Takeran Kab. Magetan', 
    'jenis_kelamin' => 'Laki-laki' 
);

foreach ($data_identitas as $key => $value) {
    setcookie($key, $value, time() + (86400 * 30), "/");
}

echo "Data identitas diri telah disimpan dalam cookies.";

echo "<br><br>Data identitas diri yang disimpan:<br>";
foreach ($_COOKIE as $key => $value) {
    echo "$key: $value<br>";
}
?>