
        <table border="1">
            <tr>
                <td>S.N</td>
                <td>Name</td>
                <td>Email</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Sam</td>
                <td>sam77@gmail.com</td>
            </tr>

            <tr>
                <td>1</td>
                <td>Sam</td>
                <td>sam77@gmail.com</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Sam</td>
                <td>sam77@gmail.com</td>
            </tr>

        </table>

        
<?php
echo "<br>";
$users=[
    [1,"anil","anil@test.com"],
    [2,"sia","sia@test.com"],
    [3,"omakr","ommy@test.com"],
    [4,"madhu","madhu@test.com"],
];

echo "<table border=1>";
for($i=0;$i<count($users);$i++){
    echo "<tr>";
    for($j=0;$j<count($users[$i]);$j++){
        echo "<td>";
        echo $users [$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
    