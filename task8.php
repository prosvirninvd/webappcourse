<?php
$arr = [
    1 => ['ru' => 'Понедельник', 'en' => 'Monday'],
    2 => ['ru' => 'Вторник', 'en' => 'Tuesday'],
    3 => ['ru' => 'Среда', 'en' => 'Wednesday'],
    4 => ['ru' => 'Четверг', 'en' => 'Thursday'],
    5 => ['ru' => 'Пятница', 'en' => 'Friday'],
    6 => ['ru' => 'Суббота', 'en' => 'Saturday'],
    7 => ['ru' => 'Воскресенье', 'en' => 'Sunday']
];
echo $arr[3]['ru'] . " - " . $arr[3]['en'];
?>