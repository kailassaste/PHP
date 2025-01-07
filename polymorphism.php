<?php

// using abstract
// abstract class class1{
//     abstract function fun1();
// }

// class class2 extends class1{
//     function fun1(){
//         echo "Fun1";
//     }
// }

// class class3 extends class1{
//     function fun1(){
//         echo "Fun2";
//     }
// }

// $obj= new class3();
// $obj->fun1();

#using interface
interface class class1{
     function fun1();
}

class class2 implements class1{
    function fun1(){
        echo "Fun1";
    }
}

class class3 implements class1{
    function fun1(){
        echo "Fun2";
    }
}

$obj= new class3();
$obj->fun1();
?>
