<?php
include_once "config/dao.php";
$dao = new Dao();

if(isset($_POST['submit'])){
	$pilihan = $_POST["pilihan"];
	$id_soal = $_POST["id"];
	$jumlah = $_POST["jumlah"];

	$score = 0;
	$benar = 0;
	$salah = 0;
	$kosong = 0;

	for($i=0;$i<$jumlah;$i++){
			$nomor = $id_soal[$i]; // id nomor soal

			// jika user tidak memilih jawaban
			if(empty($pilihan[$nomor])){
				$kosong++;
			} else {
				// jika memilih
				$jawaban = $pilihan[$nomor];

				// cocokan jawaban dengan yang ada didatabase
				$sql = "SELECT * FROM tbl_soal WHERE id_soal='$nomor' AND kunci='$jawaban'";
				$hasil = $dao->execute($sql);

				$cek = mysqli_num_rows($hasil);

				if($cek){
					// jika jawaban cocok (benar)
					$benar++;
				} else {
					// jika salah
					$salah++;
				}

			}
			/*
				----------
				Nilai 100
				----------
				Hasil = 100 / jumlah soal * Jawaban Benar
			*/

				$sql = "SELECT * FROM tbl_soal WHERE aktif='Y'";
				$query = $dao->execute($sql);
				$jumlah_soal = mysqli_num_rows($query);
				$score = 100 / $jumlah_soal * $benar;
				$hasil = number_format($score,1);
			}
		}

	// Simpan kedalam database
		echo "Jumlah Jawaban Benar: ".$benar."<br>";
		echo "Jumlah Jawaban Salah: ".$salah."<br>";
		echo "Jumlah Jawaban Kosong: ".$kosong."<br>";
		?>