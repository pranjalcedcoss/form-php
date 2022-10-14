<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$first_num=$_POST['first_num'];
$second_num=$_POST['second_num'];
$operator=$_POST['operator'];
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "+":
           $result = $first_num + $second_num;
            break;
        case "-":
           $result = $first_num - $second_num;
            break;
        case "*":
            $result = $first_num * $second_num;
            break;
        case "/":
            $result = $first_num / $second_num;
    }
}
?>
<h1>PHP - Simple Calculator Program</h1>
	  <form action="" method="post" id="quiz-form">
            
      First Number <input type="number" name="first_num" value="<?php echo $first_num;  ?>" required="required"/><br>
            
        
      Second Number   <input type="number" name="second_num" value="<?php echo $second_num;  ?>" required="required"/> <br>
            
            
      Result <input readonly="readonly" name="result" value="<?php
      echo $result ;
      ?>" /> <br>
            
            <input type="submit" name="operator" value="+" />
            <input type="submit" name="operator" value="-" />
            <input type="submit" name="operator" value="*" />
            <input type="submit" name="operator" value="/" />
	  </form>
      
</body>
</html>