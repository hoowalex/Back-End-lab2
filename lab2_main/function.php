<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions Results</title>
</head>
<body>

<form method="post" action="">
    <label for="number1">Number 1:</label>
    <input type="text" name="number1" id="number1" value="<?= isset($number1) ? $number1 : '' ?>">
    <br><br>
    <label for="number2">Number 2:</label>
    <input type="text" name="number2" id="number2" value="<?= isset($number2) ? $number2 : '' ?>">
    <br><br>
    <button type="submit">Calculate</button>
</form> 
<br>
<?php
require_once 'func.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number1 = isset($_POST['number1']) ? $_POST['number1'] : 0;
    $number2 = isset($_POST['number2']) ? $_POST['number2'] : 0;

    $results = array(
        'sin' => customSin($number1),
        'cos' => customCos($number1),
        'tan' => customTan($number1),
        'tg' => customTg($number1),
        'pow' => customPow($number1, $number2),
        'factorial' => customFactorial($number1),
    );
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>Function</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $function => $result): ?>
                <tr>
                    <td><?= $function ?></td>
                    <td><?= $result ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php
}
?>
</body>
</html>