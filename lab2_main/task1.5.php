<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["number"])) {
        
        try{
            $number = (int) $_POST["number"];
            $some_characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_";

            $password = '';

            for($i = 0; $i< $number; $i++){
                    $password .=  $some_characters[rand(0,strlen($some_characters)-1)];
            }
            echo "Ваш пароль : ".$password."<br/>";

            if(isGoodPassword($password)){
                echo "Ваш пароль чудовий";
            }else{
                echo "Ваш пароль не чудовий";
            }
        }catch (Exception $e) {
            echo "Помилка конвертації числа: ".$e->getMessage();
        }
       
        
    } else {
        echo "Не коректне значення";
    }
}

    function isGoodPassword($_password){

        if (strlen($_password) < 8) return false;

        if (!preg_match('/[a-z]/', $_password)) return false;

        if (!preg_match('/[A-Z]/', $_password)) return false;

        if (!preg_match('/[0-9]/', $_password)) return false;
        
        if (!preg_match('/[^A-Za-z0-9]/', $_password)) return false;
        
        return true;

    }
    

