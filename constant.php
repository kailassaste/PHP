<?php

// in const name we have to start letters or else _ 
$data ="abc";
const data ="onkar kadam";
// const data ="onkar kadam"    -- if we try to write againg data = it give error bec in that php box

define("DATA","paresh");
//define("DATA","paresh");

echo data;    # this case is seperate
echo "<br>";
echo DATA;    # this case is seperate
?>

