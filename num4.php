<!-- Write a PHP program to print current month using if..else & switch case. -->
<?php
$month = date("n");

if ($month == 1) {
    echo "Current month: January";
} elseif ($month == 2) {
    echo "Current month: February";
} elseif ($month == 3) {
    echo "Current month: March";
} elseif ($month == 4) {
    echo "Current month: April";
} elseif ($month == 5) {
    echo "Current month: May";
} elseif ($month == 6) {
    echo "Current month: June";
} elseif ($month == 7) {
    echo "Current month: July";
} elseif ($month == 8) {
    echo "Current month: August";
} elseif ($month == 9) {
    echo "Current month: September";
} elseif ($month == 10) {
    echo "Current month: October";
} elseif ($month == 11) {
    echo "Current month: November";
} else {
    echo "Current month: December";
}
?>

<!-- Using Switch Case -->
<?php
$month = date("n");
switch ($month) {
    case 1:
        echo "Current month: January";
        break;
    case 2:
        echo "Current month: February";
        break;
    case 3:
        echo "Current month: March";
        break;
    case 4:
        echo "Current month: April";
        break;
    case 5:
        echo "Current month: May";
        break;
    case 6:
        echo "Current month: June";
        break;
    case 7:
        echo "Current month: July";
        break;
    case 8:
        echo "Current month: August";
        break;
    case 9:
        echo "Current month: September";
        break;
    case 10:
        echo "Current month: October";
        break;
    case 11:
        echo "Current month: November";
        break;
    case 12:
        echo "Current month: December";
        break;
}
?>