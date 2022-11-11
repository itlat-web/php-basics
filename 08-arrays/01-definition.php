<?php

$arr = []; // объявления пустого массива, очень редко используется старый вид объявления: $arr = array();

$seasons = ['Весна', 'Лето', 'Осень', 'Зима']; // объявления массива с элементами
echo $seasons[2]; // обращение к элементу массива по числовому индексу - выведется Осень, т.к. используется числовая индексация

echo '<br>';

// индексация по умолчания (начиная с 0)
$weekdays = [];
$weekdays[] = 'Понедельник'; // вставка элемента в массив — т.к. до этого массив был пустой, элемент получит индекс 0
$weekdays[6] = 'Воскресенье'; // вставка элемента в массив с числовым индексом - этот элемент получит индекс 6
unset($weekdays[6]); // удаление элемента массива с индексом 6, останется [0 => 'Понедельник']

$user = ['name' => 'John', 'surname' => 'Smith']; // объявление массива со строковыми индексами
$user['age'] = 18; // вставка элемента в массив со строковым индексом
echo $user['name']; // обращение к элементу по строковому индексу — выведется John

unset($user['age']); // удаление элемента по строковому индексу, останется ['name' => 'John', 'surname' => 'Smith']