<?php
$users =["anil","sam","peter","tony"];

//print_r($users);

// array_push($users,"peter","bruce","tony");   -- for add element we used push they will add form last

// array_pop($users);      # for remove element we used pop they will remove form last
// array_pop($users); 
// array_pop($users); 

array_splice($users,-2);
print_r($users);