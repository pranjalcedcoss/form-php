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
    if(isset($_POST['submit'])){
     $fun=$_POST['fun'];
     $a=$_POST['a'];
    // echo $a;
    
        
      if($a=="h_t_m"){
     
        $minutes = $fun * 60;  
        $minutes1="$fun hours = $minutes mins."; 
      }
      if($a=="h_t_s")
     {$seconds = $fun * 3600; 
        $seconds1="$fun hours = $seconds sec."; 
    }
    
    } 
  ?>
<form method="post">
    <input type="number" name="fun" value="<?php echo $fun; ?>" required ><br>
  <input type="radio"   value="h_t_m" name="a"  required > hours to min <br>
    <input type="radio"  value="h_t_s" name="a"  > hours to second <br>
    <?php echo $minutes1; ?>
    <?php echo $seconds1; ?><br><br>
<input type="submit" value="convert" name="submit"><br>
</form>
</body>
</html>