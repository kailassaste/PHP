<?php
$h2_color ="red";
echo "<h1 style='color:green' >php with html</h1>" ;

echo "<h3 style='color:blue' >php with html</h3>" ;

?>

<?php
$name = "Guru";
echo "<h1 style='color:orange'>My Nickname is ".$name."</h1>";
?>

<h1>
    <?php echo $name; ?>
</h1>

<h2 style="color:<?php echo $h2_color?>"><?php echo "this is h2 tag"; ?></h2>

<h2 style="color:<?php echo $h2_color?>"><?php echo $name; ?></h2>
<h2><?php echo "Today is good day"; ?></h2>