<?php

include 'Circle.php';
include 'Comparator.php';

class ComparableCircle extends Circle implements Comparator
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function comapareTo($circleOther)
    {
        $circleOtherRadius=$circleOther->getRadius();

        if ($this->getRadius()>$circleOtherRadius){
            return 1;
        }elseif ($this->getRadius()<$circleOtherRadius){
            return -1;
        }else{
            return 0;
        }
    }
}