<?php
$d = 141;
$s = 8;
$f = 141;
if ($d == $s and $d == $f) {
    echo 'все переменные равны';
} elseif ($d == $s) {
    echo '$d равна $s';
} elseif ($d == $f) {
    echo '$d равна $f';
} elseif ($s == $f) {
    echo '$s равна $f';
} else {
    echo 'равных переменых нет';
}
