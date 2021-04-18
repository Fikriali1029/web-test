<?php
// File json yang akan dibaca (full path file)
$file = "data_mahasiswa.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

echo $anggota;