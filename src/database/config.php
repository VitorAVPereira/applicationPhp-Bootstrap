<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PWD', '');
    define('DB', 'veiculos');

    $conn = new mysqli(HOST,USER,PWD,DB, 3307) or die ('não conectado')

    ?>