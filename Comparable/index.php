<?php
include "ComparableCircle.php";
include 'CircleComparator.php';

$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 2);
$circleThree = new ComparableCircle('CircleThree', 4);

$test = $circleOne->compareTo($circleTwo);
echo 'Comparable: <br>';
echo $test;

$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo));