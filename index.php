<?php
$file = 'server.log';
if (count(file($file)) > 5)
{
    $data = file_get_contents($file);
    $lines = explode(PHP_EOL, $data);
    $lastLines = array_slice($lines, -5);

    foreach ($lastLines as $line)
    {
        echo $line . "<br>";
    }
} else {
    $data = file_get_contents($file);
    $lines = explode(PHP_EOL, $data);

    foreach ($lines as $line)
    {
        echo $line . "<br>";
    }
}