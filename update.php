<?php

require 'koneksi.php';

$username = 'erling.haland';

$sql = "SELECT * FROM user WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$user = $result->fetch_assoc();
	$id = $user['id'];

	$namaBaru = 'Erling Haland Edit';

	$sql = "UPDATE user SET nama='$namaBaru', username='$username' WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
		echo "Data berhasil diupdate.";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
} else {
	echo "User tidak ditemukan";
}

$conn->close();
