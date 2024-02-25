<?php 

if($_SERVER["REQUEST_METHOD"] =="POST"){

    if(isset($_POST["city"])){
     
        $city_text = $_POST["city"];
        
        $city_array = explode(' ',$city_text);
        sort($city_array);
        foreach ($city_array as $city) {
            echo $city . "<br>";
        }

    }else{
        echo "Не коректне значення";
    }

}
