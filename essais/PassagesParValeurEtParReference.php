<?php

/*
 * PassagesParValeurEtParReference.php
 */

/**
 * 
 * @param type $a
 * @param type $b
 * @return type
 */
function addByValue($a, $b) {
    $r = $a + $b;
    echo "<hr>A : $a<hr>";
    $a++;
    echo "<hr>A : $a<hr>";
    return $r;
}

/**
 * 
 * @param type $a
 * @param type $b
 * @return type
 */
function addByReference(&$a, &$b) {
    $r = $a + $b;
    echo "<hr>A : $a<hr>";
    $a++;
    echo "<hr>A : $a<hr>";
    return $r;
}

/*
 * MAIN
 */
$x = 3;
$y = 5;

echo "PASSAGE PAR VALEUR";
echo "<hr>X : $x<hr>";
$r = addByValue($x, $y);
echo "<hr>X : $x<hr>";
echo "<hr>R : $r<hr>";

echo "PASSAGE PAR REFERENCE";
echo "<hr>X : $x<hr>";
$r = addByReference($x, $y);
echo "<hr>X : $x<hr>";
echo "<hr>R : $r<hr>";
?>


