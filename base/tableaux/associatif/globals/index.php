<?php
//Variable globale à une fonction
$a=12;
$b=25;
function somme() {
    global $a, $b;
    $b = $a + $b;
}
//somme();
//echo $b;
//
function somme1() {
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}
somme1();
echo $b;