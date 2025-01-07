<?php

class UserAuth{
    function login($userType){
        echo "$userType logged in";
    }
}

class Students extends UserAuth{
    function getName(){
        echo "sia";
    }

}

class Teacher extends UserAuth{
    function getSkill(){
        echo "JAVA";
    }
    
}

$s1 = new Students();
$s1->login("student");
echo "<br>";
$s1->getName();

echo "<br>";
$s1 = new Teacher();
$s1->login("teacher");

?>