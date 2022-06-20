<?php

if (isset($_SERVER['PATH_INFO'])) {
     echo $_SERVER['PATH_INFO'] . "<br>";
} else {
     echo "Tidak Ada PATH_INFO <br>";
}

echo __DIR__ . "<br>";
echo $_SERVER['REQUEST_METHOD'];
