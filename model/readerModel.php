<?php
  require_once 'config/database.php';
  class readerModel{
    private $madg;
    private $hovaten;
    private $gioitinh;
    private $namsinh;
    private $nghenghiep;
    private $naycapthe;
    private $nayhethan;
    private $diachi;
    public function getAllreaders(){
        $conn = $this->connectDb();
  
        $sql = "SELECT * FROM docgia";
        $result = mysqli_query($conn,$sql);
         if(mysqli_num_rows($result) > 0){

             $arr_readers = mysqli_fetch_all($result, MYSQLI_ASSOC); 

         }
         return $arr_readers;
     }
     public function update($readerModel= []) {
        $connection = $this->connectDb();
        $queryUpdate = "UPDATE docgia
        SET `hovaten` = '{$readerModel['hovaten']}' WHERE `madg` = {$readerModel['madg']}";
        $isUpdate = mysqli_query($connection, $queryUpdate);
        $this->closeDb($connection);
  
        return $isUpdate;
        }
     public function connectDb() {
        $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (!$connection) {
            die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
          }

        return $connection;
           }
     public function closeDb($connection = null) {
        mysqli_close($connection);
      }

    }



?>