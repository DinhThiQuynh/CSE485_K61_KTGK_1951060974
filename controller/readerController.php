<?php
require_once  'model/readerModel.php';
   class ReaderController{
 
      function index(){
         $readerModel = new readerModel();
         $readers = $readerModel->getAllreaders();

         require_once 'view/index.php';
    }
    function add(){
        $error = '';

        if (isset($_POST['submit'])) {
            $hovaten = $_POST['hovaten'];

            if (empty($hovaten)) {
                $error = "Name không được để trống";
            }
            else {
                $readerModel= new readerModel();

                $arr_readers = [
                    'hovaten' => $hovaten
                ];
                $isInsert = $readerModel->insert($arr_readers);
                if ($isInsert) {
                    $_SESSION['success'] = "Thêm mới thành công";
                }
                else {
                    $_SESSION['error'] = "Thêm mới thất bại";
                }
                header("Location: index.php?controller=readerController&action=index");
                exit();
            }
        }
        require_once 'view/add.php';
    }
    public function edit() {

        if (!isset($_GET['madg'])) {
            $_SESSION['error'] = "Tham số không hợp lệ";
            header("Location: index.php?controller=reader&action=index");
            return;
        }
        if (!is_numeric($_GET['madg'])) {
            $_SESSION['error'] = "Id phải là số";
            header("Location: index.php?controller=reader&action=index");
            return;
        }
        $madg= $_GET['madg'];

        $readerModel = new Reader();
        $reader = $readerModel->getBookById($madg);
        $error = '';
        if (isset($_POST['submit'])) {
            $hovaten = $_POST['hovaten'];
            if (empty($hovaten)) {
                $error = "Name không được để trống";
            }
            else {
                $readerModel = new Reader();
                $arr_readers = [
                    'madg' => $madg,
                    'hovaten' => $hovaten
                ];
                $isUpdate = $readerModel->update($arr_readers);
                if ($isUpdate) {
                    $_SESSION['success'] = "Update bản ghi #$madg thành công";
                }
                else {
                    $_SESSION['error'] = "Update bản ghi #$madg thất bại";
                }
                header("Location: index.php?controller=reader&action=index");
                exit();
            }
        }

        require_once 'views/edit.php';
    }

}





?>