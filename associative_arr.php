<?php
$userDetails =[
    "name"=>"vishal",
    "age"=>27,
    "state"=>"UP",
    "city"=>"delhi"
];

// echo $userDetails["age"];
// echo "<br>";
// echo $userDetails["city"];
// echo "<br>";
// echo $userDetails["name"];
// echo "<br>";

foreach($userDetails as $key => $data){
    echo $key ." is ".$data;
    echo "<br>";
}

?>