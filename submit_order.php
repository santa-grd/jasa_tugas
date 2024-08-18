<?php
// File JSON tempat data pesanan akan disimpan
$jsonFile = 'orders.json';

// Data baru dari form
$newOrder = array(
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'category' => $_POST['category'],
    'details' => $_POST['details']
);

// Membaca file JSON yang ada
if (file_exists($jsonFile)) {
    $currentData = json_decode(file_get_contents($jsonFile), true);
} else {
    $currentData = array();
}

// Menambahkan pesanan baru ke data yang ada
$currentData[] = $newOrder;

// Menyimpan kembali data yang telah diperbarui ke dalam file JSON
file_put_contents($jsonFile, json_encode($currentData, JSON_PRETTY_PRINT));

// Mengarahkan pengguna kembali ke halaman utama atau ke halaman konfirmasi
header('Location: index.html');
exit();
?>
