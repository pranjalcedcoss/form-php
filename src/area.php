<html>  
<body>  
<?php   
if(isset($_POST['submit']))  
    {   
$width = $_POST['width'];   
$length = $_POST['length'];   
$area = $width*$length; 
$perimeter=2*($length+$width) ; 
  
}   
?> 
<form method = "post">   
Width: <input type="number" name="width">   
<br><br>   
Length: <input type="number" name="length"> <br>   
<input type = "submit" name = "submit" value="area and perimeter">   
</form>  
<div> area= <?php echo $area;  ?></div> 
<div> perimeter= <?php echo $perimeter;  ?></div>

</body>   
</html>  
 