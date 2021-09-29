<?php
$customers=[[
    "tên"=>"lê Quốc Hưng",
    "ngày sinh"=>"22/1/2001",
    "địa chỉ"=>"Hà nội",
    "ảnh"=>"5883.jpg_wh1200.jpg"
],[
    "tên"=>" linh ngọc đàm",
    "ngày sinh"=>"22/1/2002",
    "địa chỉ"=>"đông hà",
    "ảnh"=>"imager_1_5450_600.jpg"
]];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
                <th>tên</th>
                <th>địa chỉ</th>
                <th>ngày sinh</th>
                <th>ảnh</th>
    </tr>
    <?php  foreach($customers as $mang => $khachhang) :?>
            
    <tr>
        <td><?php echo $khachhang["tên"]?></td>
        <td><?php echo $khachhang["ngày sinh"]?></td>
        <td><?php echo $khachhang["địa chỉ"]?></td>
        <td>
            <img width="50px" src="<?php echo $khachhang["ảnh"]?>" alt="">
        </td>
        
    </tr>
    <?php endforeach; ?>
</table>
</body>

</html>