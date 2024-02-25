<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["file"])) {
        $file = $_POST["file"];
        
        $path_info = pathinfo($file);
        
        $filename = $path_info['filename'];
        
        echo "Ім'я файлу : ".$filename;       
      
    } else {
        echo "Не коректне значення";
    }
}

