<?php
$dir = $_GET['dir'] ?? '';
// Реализация первого задания
// Для просмотра необходимо перейти по адресу http://sandbox.moskovskiy.online/lesson1.php?dir=.
if (!empty($dir)) {
    try {
        $directoryIterator = new DirectoryIterator($dir);
        // Ограничим просмотр только папкой проекта
        if (!strpos($directoryIterator->getRealPath(), 'sandbox.moskovskiy.online')) {
            echo 'Доступ запрещён';
            exit();
        }
        // Перебираем в цикле
        while ($directoryIterator->valid()) {
            if ($directoryIterator->isDir()) {
                echo '<a href="lesson1.php?dir=' . $directoryIterator->getRealPath() . '">' . $directoryIterator->getFilename() . '</a><br>';
            } else {
                echo '<a href="#">' . $directoryIterator->getFilename() . '</a><br>';
            }
            $directoryIterator->next();
        }
        exit();
    } catch (Exception $e) {
        echo "Неправильный запрос";
        exit();
    }
}
// Реализация первого задания
// Для просмотра необходимо перейти по адресу http://sandbox.moskovskiy.online/lesson1.php?task2
if (isset($_GET['task2'])) {
    for ($i = 10000; $i <= 1000000; $i *= 10) {
        echo "Заполнение стандартного массива циклом for...<br>";
        $arr=[];
        $startTime = microtime(true);
        for ($k = 0; $k < $i; $k++) {
            $arr[$k] = $k;
        }
        echo "Количество элементов ".$i.", затрачено ".(microtime(true) - $startTime)."<br>";

        echo "Заполнение массива SplFixedArray циклом for...<br>";
        $arr1=new SplFixedArray($i);
        $startTime = microtime(true);
        for ($k = 0; $k < $i; $k++) {
            $arr1[$k] = $k;
        }
        echo "Количество элементов ".$i.", затрачено ".(microtime(true) - $startTime)."<br>";

        // Перебор элементов
        $startTime = microtime(true);
        foreach ($arr as $item) {
            $item;
        }
        echo "Перебор ".$i.", элементов циклом foreach. Затрачено ".(microtime(true) - $startTime)."<br>";

        $startTime = microtime(true);
        $arrayObject = new ArrayObject($arr);
        for ($iterator = $arrayObject->getIterator(); $iterator->valid(); $iterator->next()) {
            $iterator->current();
        }
        echo "Перебор ".$i.", элементов итератором. Затрачено ".(microtime(true) - $startTime)."<br>";
        echo "<br>";
    }
}

