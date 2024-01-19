
<?php
require_once('databaseconect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $lastname = $_POST['surname'];
    $phone = $_POST['phone_number'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, surname, phone_number, password) VALUES ('$name', '$lastname', '$phone', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php"); // Переадресация после успешной регистрации
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гостиница - Регистрация</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #333;
        }

        h2 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            margin-bottom: 5px;
            display: block;
        }

        input {
            padding: 10px;
            margin-bottom: 15px;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #aaa;
            border-radius: 5px;
        }

        button {
            padding: 15px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #333;
        }

        p {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Регистрация</h2>
    
    <form action="register_process.php" method="post">
        <label for="firstname">Имя:</label>
        <input type="text" id="firstname" name="firstname" required>

        <label for="lastname">Фамилия:</label>
        <input type="text" id="lastname" name="lastname" required>
        
        <label for="phone">Номер телефона:</label>
        <input type="tel" id="phone" name="phone" placeholder="8XXXXXXXXXX" pattern="^\8\d{10}$" required>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
        
        <label for="confirm_password">Подтвердите пароль:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        
        <button type="submit">Зарегистрироваться</button>
    </form>

    <p>Уже есть аккаунт? <a href="login.php">Войдите</a>.</p>
</body>
</html>
