
<?php
$units= $_POST['units'];
// print_r ($units);
if($units <=50){
    $bill = $units*3.50;
} else if($units > 50 && $units <= 100) {
    $temp = 50 *3.50;
    $remaining_units = $units - 50;
    $bill = $temp + ($remaining_units * 4);
} else if($units > 100 && $units <= 200) {
    $temp = (50 * 3.5) + (100 * 4);
    $remaining_units = $units - 150;
    $bill = $temp + ($remaining_units * 5.20);
} else {
    $temp = (50 * 3.5) + (100 * 4) + (100 * 5.20);
    $remaining_units = $units - 250;
    $bill = $temp + ($remaining_units * 6.50);
}

echo $bill
?>