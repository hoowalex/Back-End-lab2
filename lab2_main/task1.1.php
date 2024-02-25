<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["text"], $_POST["find"], $_POST["replace"])) {
        $text = $_POST["text"];
        $find = $_POST["find"];
        $replace = $_POST["replace"];

        echo "Оригінальний текст: $text<br>";
        echo "Результат після заміни: " . str_replace($find, $replace, $text);
    } else {
        echo "Не коректне значення";
    }
}

