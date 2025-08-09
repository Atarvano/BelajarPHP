<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=belajar_php', 'root', '');
    // Kode untuk koneksi database
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>