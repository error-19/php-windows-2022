<?php
include "function.php";
?>
<form action="" method="post">
    <table>
        <tr>
            <td>Enter the first Number:</td>
            <td><input type="number" name="num1"></td>
        </tr>
        <tr>
            <td>Enter the second Number:</td>
            <td><input type="number" name="num2"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="calculation" value="calculate"></td>
        </tr>
    </table>
</form>
<?php
if(isset($_POST['calculation'])){
$numone= $_POST['num1'];
$numtwo= $_POST['num2'];
$cal=new Calculation;
$cal->add($numone, $numtwo);
$cal->sub($numone, $numtwo);
$cal->mul($numone, $numtwo);
$cal->div($numone, $numtwo);
}
?>