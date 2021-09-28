<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        color: springgreen;
    }
    body{
        background-color: steelblue;
        font-size: 20px;
        color:red;
    }
    input{
        background-color: darkcyan;
    }
    button{
        background-color: springgreen;
    }
</style>
<body>
    <h1>từ điền</h1>
    <br>
    <form action="" method="post">
    ENGLISH <input type="text" name="search" id="">
    <br>
    <br>
  <button type="submit">submit</button>
  </form>

<?php
$dictionary = array(
    "hello"=>"xin chào", 
    "how"=>"thế nào", 
    "book"=>"quyển vở", 
    "computer"=>"máy tính",
    "hưng" =>"yêu anh nhiều bên em nhé"
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchword = $_POST["search"]; 
    $flag = 0;
    foreach($dictionary as $word => $description) {
       if($word == $searchword){
          echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
          echo "<br/>";
          $flag = 1;
       }
    } 
  
    if($flag == 0){
       echo "Không tìm thấy từ cần tra.";
    }
  }

?>
</body>
</html>