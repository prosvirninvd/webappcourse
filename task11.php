<?php
$lang = $_GET['lang'];
$arr = [
    1 => ['ru' => 'Понедельник', 'en' => 'Monday'],
    2 => ['ru' => 'Вторник', 'en' => 'Tuesday'],
    3 => ['ru' => 'Среда', 'en' => 'Wednesday'],
    4 => ['ru' => 'Четверг', 'en' => 'Thursday'],
    5 => ['ru' => 'Пятница', 'en' => 'Friday'],
    6 => ['ru' => 'Суббота', 'en' => 'Saturday'],
    7 => ['ru' => 'Воскресенье', 'en' => 'Sunday']
];
echo "<p>Через 2 if: </p><p>";
if ($lang == 'ru') {
    foreach ($arr as $key => $value) {
        echo "$value[ru] ";
    }
}
else if ($lang == 'en') {
    foreach ($arr as $key => $value) {
        echo "$value[en] ";
    }
}
echo "</p>";
echo "<p>Через switch: </p><p>";
switch ($lang) {
    case 'ru':
        foreach ($arr as $key => $value) {
            echo "$value[ru] ";
        }
        break;
    
    case 'en':
        foreach ($arr as $key => $value) {
            echo "$value[en] ";
        }
        break;
}
echo "</p>";
echo "<p>Без if и switch: </p><p>";
foreach ($arr as $key => $value) {
    echo "$value[$lang] ";
}
echo "</p>";
?>