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
</body>
<?php
$mang=["book"=>"quyển sach",
        "hưng"=>"yêu anh nhiều",
        "handsome"=>"anh hưng là đẹp trai nhất",
        "good love"=>"You are saying about we me too ",
        "look like"=>"nhìn anh em muốn nhìn mãi",
];
//mảng
if ($_SERVER["REQUEST_METHOD"] == "POST") {// cái ni hưng cũng ko hiểu lắm
    $searchword=$_POST["search"];
    $flag=0;
    foreach($mang as $en => $vn){//cái này mình diễn tả lại cái mảng trên nớ
        if($en == $searchword){
            echo "từ". "  " . $en ."<br>"."nghĩa của từ này là". "  " . $vn;
            $flag=1;
        }
       
    }
    if($flag == 0){
        echo "lỗi";
    }
}


?>
</html>