<?php

require_once('./Logic.class.php');
$logic = new Logic();

echo "asc array(10, 8, 3, 4, 6, 5, 2, 1, 9, 7)\n";
print_r($logic->asc(array(10, 8, 3, 4, 6, 5, 2, 1, 9, 7)));
echo "desc array(10, 8, 3, 4, 6, 5, 2, 1, 9, 7)\n";
print_r($logic->desc(array(10, 8, 3, 4, 6, 5, 2, 1, 9, 7)));
