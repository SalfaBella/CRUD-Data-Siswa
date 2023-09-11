<html>
<head>
	<title>Aplikasi CRUD</title>
</head>
<body>
	<h1>Data Siswa</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Jurusan</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM siswa"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['nis']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['alamat']."</td>";
		echo "<td>".$data['jurusan']."</td>";
		echo "<td><a href='form_ubah.php?nis=".$data['nis']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?nis=".$data['nis']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>
