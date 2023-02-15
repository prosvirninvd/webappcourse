<?php
$arr = ['Петя' => 35000, 'Коля' => 38000, 'Иван' => 40000];
$sum = 0;
foreach ($arr as $key => $value) {
    $sum += $value;
}
echo "$sum &#8381;"
?>