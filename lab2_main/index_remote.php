<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $lastName = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirmPassword = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';
    $favoriteGames = isset($_POST['favorite_games']) ? $_POST['favorite_games'] : [];
    $aboutMe = isset($_POST['about_me']) ? $_POST['about_me'] : '';

    $_SESSION['formData'] = [
        'first_name' => $firstName,
        'last_name' => $lastName,
        'password' => $password,
        'confirm_password' => $confirmPassword,
        'gender' => $gender,
        'city' => $city,
        'favorite_games' => $favoriteGames,
        'about_me' => $aboutMe,
    ];

    if ($_FILES['photo']['error'] === 0) {
        $uploadFile = basename($_FILES['photo']['name']);

        move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile);
        $_SESSION['formData']['photo_path'] = $uploadFile;
    }
    
    if($password != $confirmPassword){
        $password_handle =  'паролі не співпадають '.$confirmPassword;
    }else{
        $password_handle =  $password;
    } ;

    echo "<h2>Received Data:</h2>";
    echo "<p><strong>First Name:</strong> $firstName</p>";
    echo "<p><strong>Last Name:</strong> $lastName</p>";
    echo "<p><strong>Password:</strong> $password</p>";
    echo "<p><strong>Confirm Password:</strong> $password_handle</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>City:</strong> $city</p>"; 
    echo "<p><strong>Favorite Games:</strong> " . implode(', ', $favoriteGames) . "</p>";
    echo "<p><strong>About Me:</strong> $aboutMe</p>";

    if (isset($_SESSION['formData']['photo_path'])) {
        echo '<p><strong>Photo:</strong><br>';
        echo '<img src="' . $_SESSION['formData']['photo_path'] . '" alt="User Photo" style="max-width: 300px;"></p>';
    }
} else {
    echo "Invalid request method.";
}
