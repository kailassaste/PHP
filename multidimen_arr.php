<?php

$users=[
    [1,"anil", "noida", "anil@gamil.com"],
    [2,"ganesh", "mumbai", "ganu@gamil.com"],
    [3,"sid", "pune", "sid7@gamil.com"]
];

// echo "<pre>";
// print_r($users);
// echo "<pre>";

for($i=0;$i<count($users);$i++){
    // print_r($users[$i]);
    for($j=0;$j<count($users[$i]);$j++){
        echo $users[$i][$j];
        echo "<br>";
    }
}
?>