<?php

require 'koneksi.php';

$id = 2;

$sql = "DELETE FROM user WHERE id=$id";

if ($conn->query($sql) === TRUE) {
	echo "Data berhasil dihapus.";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
