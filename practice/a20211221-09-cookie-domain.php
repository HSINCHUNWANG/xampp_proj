<?php

setcookie('my', '789', 0, '/', '127.0.0.1');
// setcookie('my', '789', 0, '/');


echo $_COOKIE['my'];