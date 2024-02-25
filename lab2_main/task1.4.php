<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["date1"], $_POST["date2"])) {

        $date1 = DateTime::createFromFormat('d-m-Y',  $_POST["date1"]);
        $date2 = DateTime::createFromFormat('d-m-Y',  $_POST["date2"]);

        echo "Різниця у днях : ".(($date1->diff($date2))->days);       
      
    } else {
        echo "Не коректне значення";
    }
}
