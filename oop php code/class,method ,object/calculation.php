<?php
include "function.php";
?>
<?php
if(isset($_POST['calcula'])){
$numone= $_POST['num1'];
$numtwo= $_POST['num2'];
$cal=new Calculation;
$cal->add($numone, $numtwo);
$cal->sub($numone, $numtwo);
$cal->mul($numone, $numtwo);
$cal->div($numone, $numtwo);
}
?>