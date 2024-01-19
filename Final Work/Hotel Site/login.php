<?php
require_once('databaseconect.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phone = $_POST['phone_number'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE phone_number='$phone'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            header("Location: profile.php"); 
            exit();
        } else {
            $error = "Неправильный пароль";
        }
    } else {
        $error = "Пользователь с таким номером телефона не найден";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гостиница - Вход</title>
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
    <h2>Вход</h2>
    
    <form action="login_process.php" method="post">
        <label for="phone">Номер телефона:</label>
        <input type="tel" id="phone" name="phone" placeholder="8XXXXXXXXXX" pattern="^\8\d{10}$" required>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Войти</button>
    </form>

    <p>Еще нет аккаунта? <a href="register.php">Зарегистрируйтесь</a>.</p>
</body>
</html>
