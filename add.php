<!DOCTYPE html>
<html lang="en">

<?php
    include("conn.php")
?>

<head>
    <!-- เพิ่ม bootstap -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- เเทรก font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Krub", serif;
            font-weight: 200;
            font-style: normal;
            margin-top: 250;
            margin-left: 250;
            margin-bottom: 250;
            margin-right: 250;

        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างฟอร์ม bootstrap เเละ เขียนโปรเเกรมกับเงื่อนไข</title>
</head>

<body>
    <h1>โปรเเกรมเพิ่มข้อมูล</h1>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">ชื่อ</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="inputEmail3"name="name">            
            </div>
            <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
        </div>

        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">ชื่อเล่น</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="inputPassword3"name="nickname">
        </div>
            <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
  </div>


  <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">อายุ</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="inputPassword3"name="age">
        </div>
            <label for="inputEmail3" class="col-sm-2 col-form-label">ปี</label>
  </div>

  <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
  <button type="reset" class="btn btn-danger">ยกเลิก</button>

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_POST['name'];
    $nickname=$_POST['nickname'];
    $age=$_POST['age'];

   try {
 
  $sql = "INSERT INTO student (name, nickname, age)
  VALUES ('$name', '$nickname', '$age')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo " <div class='alert alert-success'> <strong>บันทึกสำเร็จ!</strong> ยินดีด้วยนะจ๊ะ คุณได้บันทึกข้อมูลเข้าไปใหม่ </div>";
} catch(PDOException $e) {
  echo $sql . "บันทึกข้อมูลผิดพลาด <br>" . $e->getMessage();
}

$conn = null;
    
    
}
?>

</body>
    <!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</html>