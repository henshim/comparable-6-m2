<?php
include 'ComparableCircle.php';
$c1=new ComparableCircle('circle1',8);
$c2=new ComparableCircle('circle2',2);

var_dump($c1->comapareTo($c2));