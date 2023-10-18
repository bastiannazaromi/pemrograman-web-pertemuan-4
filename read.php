<?php

require 'koneksi.php';

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo "Nama : " . $row["nama"] . "<br>";
		echo "Username : " . $row["username"] . "<br>";
		echo "<hr>";
	}
} else {
	echo "Tabel user kosong.";
}

$conn->close();
