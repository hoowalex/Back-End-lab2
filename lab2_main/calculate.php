<?php

require_once 'func.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number1 = isset($_POST['number1']) ? $_POST['number1'] : 0;
    $number2 = isset($_POST['number2']) ? $_POST['number2'] : 0;
            $result = sin($number1);
     
            $result = cos($number1);
      
            $result = tan($number1);
        
            $result = tg($number1);
        
            $result = pow($number1, $number2);
           
            $result = factorial($number1);
       
     
    }

?>