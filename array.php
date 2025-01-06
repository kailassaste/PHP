<?php
#indexed array
$users=["anil","sam","peter",11];
//echo $users[3];

for($user=0;$user<count($users);$user++){
    echo "<h2 style='color:blue'>".$users[$user]."</h2>";
}

?>