<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_FILES['audio'])) {
		$audioFile = $_FILES['audio'];
		$uploadDir = 'uploads/';
		$uploadFilePath = $uploadDir . basename($audioFile['name']);

		// Cek apakah direktori upload ada, jika tidak buat.
		if (!file_exists($uploadDir)) {
			mkdir($uploadDir, 0777, true);
		}

		if (move_uploaded_file($audioFile['tmp_name'], $uploadFilePath)) {
			echo "File berhasil disimpan di: " . $uploadFilePath;
		} else {
			echo "Terjadi kesalahan saat menyimpan file.";
		}
	} else {
		echo "File audio tidak ditemukan.";
	}
} else {
	echo "Metode request tidak valid.";
}
