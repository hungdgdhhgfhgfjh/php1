<?php
$tong="";
$errosavingmoney="";
$errointerestrate="";
$erroyear="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $savingmoney=$_REQUEST["saving_money"];
    $interestrate=$_REQUEST["interest_rate"];
    $year=$_REQUEST["year"];
  if( $savingmoney == "" && $interestrate == "" && $year==""){
      $errosavingmoney=" vui lòng nhập saving money ";
      $errointerestrate=" vui lòng nhập saving money ";
      $erroyear=" vui lòng nhập saving money ";
  }
  if($savingmoney  && $interestrate && $year){
$tong=(int)$savingmoney+((int)$savingmoney /100 * ((float)$interestrate* (int)$year));
  }
}
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
    <form action="" method="post">
        
    saving money   <input type="text" name="saving_money">
    <p> <?php echo $errosavingmoney; ?><p>
    <br>
    interest rate   <input type="text" name="interest_rate">
    <p><?php echo $errointerestrate; ?><p>
    <br>
    year   <input type="text" name="year">
    <p> <?php echo $erroyear; ?></p>
    <br>
    <p> <?php echo $tong; ?></p>

    <button>submit</button>
    </form>
    
</body>
</html>