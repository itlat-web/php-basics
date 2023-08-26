<?php

// подготовка переменной для потенциальных ошибок
$errors = [];

// подготовка переменной потенциального успеха вычислений
$success = '';

// если у нас матод запроса POST ...
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // подготавливаем массив с анонимными функциями для вычислений
    $operations = [
        '+' => function (float $a, float $b): float { return $a + $b; },
        '-' => function (float $a, float $b): float { return $a - $b; },
        '*' => function (float $a, float $b): float { return $a * $b; },
        '/' => function (float $a, float $b): float { return $a / $b; },
    ];
    
    // подготавливаем переменные для пришедших чисел и операции
    $first = '';
    $second = '';
    $operation = '';
    
    // проверка первого числа
    if (isset($_POST['first']) && is_numeric($_POST['first'])) {
        $first = (float)$_POST['first'];
    } else {
        $errors[] = 'Неправильное первое число.';
    }
    
    // проверка второго числа
    if (isset($_POST['second']) && is_numeric($_POST['second'])) {
        $second = (float)$_POST['second'];
    } else {
        $errors[] = 'Неправильное второе число.';
    }
    
    // проверка операции
    if (
        isset($_POST['operation']) && 
        !is_array($_POST['operation']) && 
        isset($operations[$_POST['operation']])
    ) {
        $operation = $_POST['operation'];
    } else {
        $errors[] = 'Неправильная операция.';
    }
    
    // проверка на потенциальное деление на ноль
    if ($second === 0.0 && $operation === '/') {
        $errors[] = 'На ноль делить нельзя.';
    }
    
    // если после всех проверо ошибок нет ...
    if (count($errors) === 0) {
        // вычисляем финальное значение
        $result = $operations[$operation]($first, $second);
        
        if ($result === INF) {
            // если финальное значение равняется бесконечности - ошибка
            $errors[] = 'Переданные числа слишком большие.';
        } elseif ($result === -INF) {
            // если финальное значение равняется отрицательной бесконечности - также ошибка
            $errors[] = 'Переданные числа слишком маленькие.';
        } else {
            // все потенцальные проверки пройдены - записываем в строку успеха финальное сообщение
            $success = "$first $operation $second = $result";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Калькулятор</title>
        <style>
            body {
                text-align: center;
            }
        
            #calculator {
                text-align: center;
                display: inline-block;
                margin-top: 50px;
            }
            
            #errors {
                margin-top: 50px;
                color: red;
            }
            
            #success {
                margin-top: 50px;
                color: green;
            }
            
            .row {
                margin: 20px 0px 20px;
            }
        </style>
    </head>
    <body>
        <?php if (count($errors) > 0): ?>
            <!-- если ошибки есть - рисуем каждую из них на отдельной строке -->
            <div id="errors">
                <?php foreach ($errors as $error): ?>
                    <div><?= htmlspecialchars($error) ?></div>
                <?php endforeach; ?>
            </div>
        <?php elseif ($success !== ''): ?>
            <!-- если есть сообщение об успехе - отображаем его -->
            <div id="success"><?= htmlspecialchars($success) ?></div>
        <?php endif ?>
    
        <form id="calculator" action="/calculator.php" method="POST">
            <fieldset>
                <div>
                    Первое число: <input 
                        type="text" 
                        <?php if (isset($_POST['first']) && !is_array($_POST['first'])): ?>
                            value="<?= htmlspecialchars($_POST['first']) ?>"
                        <?php endif; ?>
                        name="first">
                </div>
                <div class="row">
                    Операция: <select name="operation">
                        <option
                            <?php if (isset($_POST['operation']) && $_POST['operation'] === '+'): ?>
                                selected
                            <?php endif; ?>
                            value="+">+</option>
                        <option 
                            <?php if (isset($_POST['operation']) && $_POST['operation'] === '-'): ?>
                                selected
                            <?php endif; ?>
                            value="-">-</option>
                        <option 
                            <?php if (isset($_POST['operation']) && $_POST['operation'] === '*'): ?>
                                selected
                            <?php endif; ?>
                            value="*">*</option>
                        <option 
                            <?php if (isset($_POST['operation']) && $_POST['operation'] === '/'): ?>
                                selected
                            <?php endif; ?>
                            value="/">/</option>
                    </select>
                </div>
                <div class="row">
                    Второе число: <input 
                        type="text" 
                        <?php if (isset($_POST['second']) && !is_array($_POST['second'])): ?>
                            value="<?= htmlspecialchars($_POST['second']) ?>"
                        <?php endif; ?>
                        name="second">
                </div>
                
                <div>
                    <button type="submit">Посчитать</button>
                </div>
            </fieldset>
        </form>
    </body>
</html>