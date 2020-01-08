<?php 
include_once "config/dao.php";
$dao = new Dao();
$data = $dao->tampilSoal();
// $jumlah = mysqli_num_rows($data);
$no = 1;

foreach ($data as $value) {
	echo $value['soal']."<br>";
}
?>