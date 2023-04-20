<?php



//print_r($_SERVER);

echo $_SERVER['USERNAME'];

if($_SERVER['USERNAME'] == 'Walef'){

    echo " \n O usuário é " . $_SERVER['USERNAME'];
}