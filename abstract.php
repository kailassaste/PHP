<?php
abstract class bank{
    abstract function id_prof();
}

class hdfc extends bank{
    function test(){
        echo "Test";
    }
}

class icic extends bank{
    function test(){
        echo "Test";
    }
}
?>