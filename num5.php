<!-- Write a PHP program to print 5 to 10 using For and ForEach. -->
<?php
// Using For loop
echo "Using For loop:<br>";
for ($i = 5; $i <= 10; $i++) {
    echo $i . "<br>";
}

// Using ForEach loop
echo "<br>Using ForEach loop:<br>";
$numbers = array(5, 6, 7, 8, 9, 10);
foreach ($numbers as $number) {
    echo $number . "<br>";
}
?>