<!-- <?php
 
function displayData(){
    echo "user name= kailas";
    echo "<br/>";
    echo "user age= 24";
    echo "<br/>";
    echo "user email= saste@gmail.com";
    echo "<br/>";
    echo "<hr>";
}

displayData();

displayData();
displayData();
?> -->

<!-- 
# parameterized function
<?php

function sum($a, $b){
    echo $a+$b;
    echo "<br/>";

}
sum(20,50);
sum(40,90);
sum(60,50);
?> -->

<!-- <?php
function userName(){
    return "aniket pawar";
}

// echo userName();       # for display data
echo "<h1> hii current user is " . userName()."</h1>";  # for return data


?> -->

<!-- <?php
# default param function
function fruit($name, $color="red"){
    echo "this is $name and its color is $color";
}

fruit("apple","yellow");

?> -->

<!-- <?php
# nested function
function test(){
    echo "test function called <br/>";

    function apple(){
        echo "apple function called";
    }
}

test(); # in this function we have to called first outside function if we call inside function then we get error
apple();

?> -->

<?php

#variable function

function test2(){
    echo "test function called ";

}

$vel ="test2";
//$vel();

function main($vel){
   // echo "main function called <br/>";
   $vel();


}
main($vel);
?>
