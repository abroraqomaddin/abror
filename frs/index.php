<!DOCTYPE html>

<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <title>FRS Online</title>
  </head>
  <body>
  	<div class="container">
  		<br>
  		<h2 style="text-align: center;">Daftar Mata Kuliah</h2>
  		<br>

	<table class="table" border="1">
		<thead class="thead-dark">
			<tr style="text-align: center;">
				<th>NO</th>
				<th>Kode</th>
				<th>Mata Kuliah</th>
				<th>Semester</th>
				<th>SKS</th>
				<th>Dosen</th>
				<th>Kelas</th>
				<th>Ambil</th>
			</tr>
		</thead>
		<tbody>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($connect,"select * from matakuliah");
		while($d = mysqli_fetch_array($data)){
			?>
			<form method="post" action="insert.php">
			<tr>
				<td style="text-align: center;"><?php echo $no++; ?></td>
				<td style="text-align: center;"><?php echo $d['kode_mk']; ?></td>
				<td><?php echo $d['nama_mk']; ?></td>
				<td style="text-align: center;"><?php echo $d['semester']; ?></td>
				<td style="text-align: center;"><?php echo $d['sks']; ?></td>
				<td><?php echo $d['dosen']; ?></td>
				<td style="text-align: center;"><?php echo $d['kelas']; ?></td>
				<td style="text-align: center;"><input type="checkbox" name="namamatakuliah"
					value="<?php echo $d['nama_mk']; ?>"></td>
			</tr>
			<?php 
		}
		?>
		</tbody>
	</table>
	
	<center><input class="btn btn-primary" type="submit" value="Simpan"></center>
	</form>

	<br>

	<!-- Menampilkan daftar mata kuliah yang telah di ambil -->
	<br>
  		<h2 style="text-align: center;">Mata Kuliah yang di ambil</h2>
  	<br>

  	<center>
	<table class="table" border="1" style="width: 500px">
		<thead class="thead-dark">
			<tr style="text-align: center;">
				<th>NO</th>
				<th>Mata Kuliah</th>
			</tr>
		</thead>
		<tbody>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($connect,"select * from frs");
		while($d = mysqli_fetch_array($data)){
			?>
			<form method="post" action="insert.php">
			<tr>
				<td style="text-align: center;"><?php echo $no++; ?></td>
				<td><?php echo $d['nama_mk']; ?></td>
			</tr>
			<?php 
		}
		?>
		</tbody>
	</table>
	</center>
	<br>
	<div style="background-color:#c70a0a; bottom:0; width:100%; height:65px;">
		<footer>
			<br>
			<p style="color:#fff; font: 16px segoe ui; text-align:center;">Sistem FRS</br></p>
		</footer>
	</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>