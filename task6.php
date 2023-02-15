<?php
$arr = ['Петя' => 35000, 'Коля' => 38000, 'Иван' => 40000];
foreach ($arr as $key => $value) {
    if ($key == 'Петя' || $key == 'Коля') {
        echo "$key: $value &#8381;<br>";
    }
}
?>