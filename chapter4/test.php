<?php
require_once 'Test1.php';
require_once 'MyException.php';


try {
    throw new MyException('foo');
} catch (\MyException $e) {
    echo '1. catch' . PHP_EOL;

    var_dump($e);

    try {
        throw new Exception(123);
    } catch (Exception $e) {
        echo '3. catch' . PHP_EOL;
    }

} catch (\Exception $e) {
    echo '2. catch' . PHP_EOL;
} finally {
    echo 'end!' . PHP_EOL;
}

