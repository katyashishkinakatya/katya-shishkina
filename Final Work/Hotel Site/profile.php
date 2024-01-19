
<?php
require_once('databaseconect.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM users WHERE id=$user_id";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
} else {
    echo "Ошибка: пользователь не найден.";
    exit();
}

$conn->close();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .container {
            width: 60%;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>Личный кабинет</h1>
</header>

<div class="container">
    <h2>Добро пожаловать, [Имя пользователя]!</h2>
    <p>Здесь вы можете просмотреть и отредактировать свои личные данные.</p>
    
    <p><strong>Имя:</strong> <?php echo $user_data['name']; ?></p>
    <p><strong>Фамилия:</strong> <?php echo $user_data['surname']; ?></p>
    <p><strong>Номер телефона:</strong> <?php echo $user_data['phone_number']; ?></p>

    <p><a href="logout.php">Выйти</a></p>
</div>

<footer>
    <p>&copy; 2024 Отель "Artaya Oasis"</p>
</footer>

</body>
</html>
