<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab</title>
</head>
<body>
<h2>Task1</h2>
<table>
<form action="task1.1.php" method="post">
    <tr>
        <td>
          
                <label for="text">Текст:</label>
                <input type="text" name="text" id="text" required>
          
        </td>
     
    </tr>
    <tr>
        <td>
                <label for="find">Знайти:</label>
                <input type="text" name="find" id="find" required>
        </td>
    </tr>
    <tr>
         <td>
                <label for="replace">Замінити:</label>
                <input type="text" name="replace" id="replace" required>
        </td>
    </tr>
    <tr>
        <td>  <input type="submit" value="Виконати заміну"></td>
  
    </tr>
    </form>
</table>
<h2>Task2</h2>
                <form action="task1.2.php" method="post">
                <label for="city">Міста:</label>
                <input type="text" name="city" id="city" required>
                <input type="submit" value="Виконати перестановку"></td>
</form>
<h2>Task3</h2>
<form action="task1.3.php" method="post">
                <label for="file">Шлях файлу:</label>
                <input type="text" name="file" id="file" required>
                <input type="submit" value="Виконати"></td>
</form>
<h2>Task4</h2>
<form action="task1.4.php" method="post">
        <label for="date1">Дата у форматі День-Місяць-Рік:</label>
        <input type="text" name="date1" id="date1" required>
        <br><br>
        <label for="date2">Дата у форматі День-Місяць-Рік:</label>
        <input type="text" name="date2" id="date2" required>
        <br>
        <input type="submit" value="Виконати">
    </form>    

<h2>Task5</h2>
<form action="task1.5.php" method = "post">
        <label for="number">Кількість символів</label>
        <input type="text" name="number" id="number" required>
        <br>
        <input type="submit" value="Виконати">
    </form>
    
</body>
</html>