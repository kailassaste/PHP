<?php
class class1{
    private $num;
    function __construct(){
        $this->num=1;
    }

    function getData(){
        echo "hello";
    }
}

class class2 extends class1{
    // function getNum(){
    //     return $this->num;
    // }
}

$obj=new class2();
echo $obj->getData();
//echo $obj->getNum();

?>