<!DOCTYPE html>
<html>
<head>
	<title>Soal Pilihan Ganda | YELLOWWEB.ID</title>
</head>
<body>
	<h3>ASSESSMENT TEST</h3>

	<table>
		<tbody>
			<form action="kunci.php" method="post">
				<?php
				include_once "config/dao.php";
				$dao = new Dao();

				$data = $dao->tampilSoal();
				$jumlah = $data->num_rows;
				$no = 1;
				foreach ($data as $value) {
					?>
					<input type="hidden" name="id[]" value="<?php echo $value['id_soal']; ?>">
					<input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
					<tr>
						<td>
							
							<?php echo $no; $no++; ?>
						</td>
						<td><?php echo $value['soal'];?></td>
					</tr>

					<?php
					if(!empty($value['gambar'])){
						?>
						<tr><td></td><td><img src="<?php echo $value['gambar'] ?>" width="200" height="200"></td></tr>
						<?php
					}
					?>

					<tr>
						<td></td>
						<td>A. <input name="pilihan[<?php echo $value['id_soal']?>]" type="radio" value="A"><?php echo $value['a'];?></td>
					</tr>
					<tr>
						<td></td>
						<td>B. <input name="pilihan[<?php echo $value['id_soal']?>]" type="radio" value="B"><?php echo $value['b'];?></td>
					</tr>
					<tr>
						<td></td>
						<td>C. <input name="pilihan[<?php echo $value['id_soal']?>]" type="radio" value="C"><?php echo $value['c'];?></td>
					</tr>
					<tr>
						<td></td>
						<td>D. <input name="pilihan[<?php echo $value['id_soal']?>]" type="radio" value="D"><?php echo $value['d'];?></td>
					</tr>



					<?php 
				}
				?>

				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">
					</td>
				</tr>

			</form>


		</tbody>
	</table>

</body>
</html>