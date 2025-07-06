<?php
// Associative array untuk data dosen
$data_dosen = [
    "nama" => "Ir. ABADI NUGROHO, S.Kom., M.Kom.",
    "nidn" => "1104129002",
    "matkul" => "Pemrograman Web"
];

// Menampilkan nama dosen
echo "Dosen Pengampu: " . $data_dosen["nama"] . "<br><br>";

// Indexed array berisi daftar nama teman sekelas
$teman_kelas = ["Ayu", "Rian", "Nina", "Bayu", "Sinta",];

// Menampilkan daftar nama teman menggunakan foreach
echo "Daftar Teman Sekelas:<br>";
foreach ($teman_kelas as $nama) {
    echo "- $nama<br>";
}
?>
