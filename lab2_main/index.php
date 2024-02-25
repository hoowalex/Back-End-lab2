<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
</head>
<body>

<?php
session_start();

$firstNameValue = isset($_SESSION['formData']['first_name']) ? $_SESSION['formData']['first_name'] : 'oleksii';
$lastNameValue = isset($_SESSION['formData']['last_name']) ? $_SESSION['formData']['last_name'] : 'rud';
$passwordValue = isset($_SESSION['formData']['password']) ? $_SESSION['formData']['password'] : '1234';
$confirmPasswordValue = isset($_SESSION['formData']['confirm_password']) ? $_SESSION['formData']['confirm_password'] : '1234';
$genderValue = isset($_SESSION['formData']['gender']) ? $_SESSION['formData']['gender'] : 'male';
$cityValue = isset($_SESSION['formData']['city']) ? $_SESSION['formData']['city'] : 'Kv';
$favoriteGamesValue = isset($_SESSION['formData']['favorite_games']) ? $_SESSION['formData']['favorite_games'] : ['football','volleyball'];
$aboutMeValue = isset($_SESSION['formData']['about_me']) ? $_SESSION['formData']['about_me'] : 'text';
?>

<?php

if (isset($_GET['lang'])) {
    $selectedLang = $_GET['lang'];
    setcookie('selectedLang', $selectedLang, time() + (180 * 24 * 60 * 60));
} else {

    $selectedLang = isset($_COOKIE['selectedLang']) ? $_COOKIE['selectedLang'] : 'ukr';
}

echo "<p>Вибрана мова: ";
switch ($selectedLang) {
    case 'ukr':
        echo "Українська";
        break;
    case 'usa':
        echo "English";
        break;
    default:
        echo "Українська";
}
echo "</p>";
?>
    
   <table>
   <div>
    <table>
        <tr>
        <td><a href="index.php?lang=ukr"><img src="ukr.png" alt="Українська" width="50" height="50"></a></td>
        <td><a href="index.php?lang=usa"><img src="usa.jpg" alt="English" width="50" height="50"></a></td>
        </tr>
    </table>
</div>
   </table>


        <form action="index_remote.php" method="post" enctype="multipart/form-data">
            <table>
            <tr>
                <td> <label for="firstName">First Name:</label></td>
                <td>  <input type="text" id="firstName" name="first_name" value="<?php echo $firstNameValue; ?>" required></td>
            </tr>
            <tr>
                <td><label for="lastName">Last Name:</label></td>
                <td><input type="text" id="lastName" name="last_name" value="<?php echo $lastNameValue; ?>" required></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" id="password" name="password" value="<?php echo $passwordValue; ?>" required></td>
            </tr>
            <tr>
                <td><label for="confirmPassword">Confirm Password:</label></td>
                <td> <input type="password" id="confirmPassword" name="confirm_password" value="<?php echo $confirmPasswordValue; ?>" required></td>
            </tr>
            <tr>
                <td><label>Gender:</label></td>
                <td><label><input type="radio" name="gender" value="male" <?php echo ($genderValue === 'male') ? 'checked' : ''; ?>> Male</label></td>
                <td><label><input type="radio" name="gender" value="female" <?php echo ($genderValue === 'female') ? 'checked' : ''; ?>> Female</label></td>
            </tr>
            <tr>
                <td><label>City:</label></td>
                <td><label><input type="radio" name="city" value="Zt" <?php echo ($cityValue === 'Zt') ? 'checked' : ''; ?>> Zt</label></td>
                <td><label><input type="radio" name="city" value="Kv" <?php echo ($cityValue === 'Kv') ? 'checked' : ''; ?>> Kv</label></td>
            </tr>
            <tr>
                <td><label>Favorite Games:</label></td>
                <td><label><input type="checkbox" name="favorite_games[]" value="football" <?php echo in_array('football', $favoriteGamesValue) ? 'checked' : ''; ?>> Football</label></td>
                <td><label><input type="checkbox" name="favorite_games[]" value="volleyball" <?php echo in_array('volleyball', $favoriteGamesValue) ? 'checked' : ''; ?>> Volleyball</label></td>
                <td><label><input type="checkbox" name="favorite_games[]" value="basketball" <?php echo in_array('basketball', $favoriteGamesValue) ? 'checked' : ''; ?>> Basketball</label></td>
            </tr>
            <tr>
                <td><label for="aboutMe">About Me:</label></td>
                <td><textarea id="aboutMe" name="about_me" required><?php echo $aboutMeValue; ?></textarea></td>
            </tr>
            <tr>
                <td><label for="photo">Photo:</label></td>
                <td>  <input type="file" id="photo" name="photo" accept="image/*" required></td>
            </tr>
            <tr>
                <td><button type="submit">Submit</button></td>
            </tr>
        </table>
 
    </form>

</body>
</html>