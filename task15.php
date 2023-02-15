<?php
$arr = [-10, -20, 15, 17, -24, 35];
foreach ($arr as $value) {
    echo "$value ";
}
$sum_positive = 0;
$sum_negative = 0;
foreach ($arr as $value) {
    if ($value > 0) {
        $sum_positive += $value;
    } else {
        $sum_negative += $value;
    }
}
echo "<br>$sum_positive $sum_negative";
?>