<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Quan Ly Thu Vien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Danh Sach Doc Gia</a>
</nav>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Ma doc gia</th>
      <th scope="col">Ten doc gia</th>
      <th scope="col">Gioi Tinh</th>
      <th scope="col">Nam sinh</th>
      <th scope="col">Ngay cap the</th>
      <th scope="col">Nay het han</th>
      <th scope="col">Dia chi</th>
    </tr>
  </thead>
  <tbody>
      <?php

        foreach($readers as $reader){


      ?>
      
    <tr>
      <th scope="row"><?php  echo "<p> {$reader ['madg']}</p>"; ?></th>
      <th scope="row"><?php  echo "<p> {$reader ['hovaten']}</p>"; ?></th>
      <th scope="row"><?php  echo "<p> {$reader['gioitinh']}</p>"; ?></th>
      <th scope="row"><?php  echo "<p> {$reader ['namsinh']}</p>"; ?></th>
      <th scope="row"><?php  echo "<p> {$reader ['ngaycapthe']}</p>"; ?></th>
      <th scope="row"><?php  echo "<p> {$reader ['ngayhethan']}</p>"; ?></th>
      <th scope="row"><?php  echo "<p> {$reader['diachi']}</p>"; ?></th>
    </tr>

       <?php }?>
       <?php
                    $urladd =  "index.php?controller=reader&action=add&id=" . $reader['madg'];
                    $urledit =  "index.php?controller=reader&action=edit&id=" . $reader['madg'];
                    ?>
                    <a href="<?php echo $urladd?>">Them  doc gia</a> &nbsp
                    <a href="<?php echo $urledit?>">Sua doc gia</a> &nbsp
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>