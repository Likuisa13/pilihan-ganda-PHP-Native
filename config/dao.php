<?php

include_once 'dbconfig.php';
class Dao {  
    var $link;
    public function __construct() {
        $this->link = new Dbconfig();
    }
    //----------------- baca soal ----------------------------------
    public function tampilSoal() {
        $query = "SELECT * FROM tbl_soal WHERE aktif='Y' ORDER BY RAND()";
        return mysqli_query($this->link->conn, $query);
    }

    public function execute($query) {
        $result = mysqli_query($this->link->conn, $query);
        if ($result) {
            return $result;
        }else {
            return mysqli_error($this->link->conn);
        }
         
    }
}
