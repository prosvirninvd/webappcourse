<?php
$min = rand(0, 59);
switch ($min) {
    case $min < 15:
        echo "$min - 1 четверть";
        break;
    case $min < 30:
        echo "$min - 2 четверть";
        break;
    case $min < 45:
        echo "$min - 3 четверть";
        break;
    default:
        echo "$min - 4 четверть";
        break;
}
?>