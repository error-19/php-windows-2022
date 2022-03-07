
<?php

$x=20;
$y=30;
/*
function test(){
    global $x,$y;
    $sum=$x+$y;
    return $sum;
}
echo test();

function test(){
    global $x;
    $x=20;
    return $x;
}
echo test();
*/
function test(){

    $GLOBALS['sum']=$GLOBALS['x']+$GLOBALS['y'];
    return $GLOBALS['sum'];
}
echo test();
?>
