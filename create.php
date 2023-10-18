<?php

require 'koneksi.php';

$nama = 'Erling Haland';
$username = 'erling.haland';
$password = password_hash('haland', PASSWORD_BCRYPT);

// Query SQL untuk memasukkan data ke dalam tabel user
$sql = "INSERT INTO user (nama, username, password) VALUES ('$nama', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
	// Data berhasil ditambahkan
	echo "Data berhasil ditambahkan ke tabel user.";
} else {
	// Jika terjadi kesalahan
	echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi ke database
$conn->close();
