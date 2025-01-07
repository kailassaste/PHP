<?php
class Teacher{
    public $city="delhi";
    function nextExam(){
        echo "next exam is maths";
    }

    function age(){
        echo "my age is 40";
    }
}

class Teacher{
    public $city="mumbai";
    function age(){
        echo "my age is 20";
    }
}

$s1 = new Teacher();
$s1->age();

// $s1 = new Teacher();
// $s1->age();
?>