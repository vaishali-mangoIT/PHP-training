<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    use Area\Calculate as AC;
    use Tax\Calculate as TC;

    require 'first.php';
    require 'second.php';

    $obj2 = new TC(); 
    $obj1 = new AC();
?>