<?php

require 'koneksi.php';

$id = 2;

$sql = "SELECT * FROM user WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo "Nama : " . $row["nama"] . "<br>";
		echo "Username : " . $row["username"] . "<br>";
		echo "<hr>";
	}
} else {
	echo "User tidak ditemukan";
}

$conn->close();
