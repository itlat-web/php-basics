<?php

$name = 'John'; // объявление переменной
echo $name, '<br>'; // вывод переменной на печать
echo 2 + 2, '<br>'; // выведется 4

const NUMBERS_OF_SEASONS = 4; // объявление константы
echo NUMBERS_OF_SEASONS, '<br>'; // вывод константы на печать

?>

<?php $season = 'autumn'; ?>

<div><?= $season ?></div>
<!-- нижняя запись будет идентична верхней -->
<div><?php echo $season; ?></div>