<?php
// Массив логинов и паролей
$users = [
    "admin" => "123456",
    "user1" => "password1",
    "user2" => "password2"
];

$authorizationMessage = "";

// Проверяем, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем введенные данные
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Проверяем, есть ли введенный логин в массиве и совпадает ли пароль
    if (isset($users[$login]) && $users[$login] === $password) {
        $authorizationMessage = "Авторизация прошла успешно!";
    } else {
        $authorizationMessage = "Неверный логин или пароль!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма для аутентификации</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles_avt/main.css">
</head>

<body>

    <div class="container">
        <h1>Форма для аутентификации</h1>

        <div class="text-centre">
            <?php if ($authorizationMessage): ?>
                <p><?php echo $authorizationMessage; ?></p>
            <?php endif; ?>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label class="form-label" for="login">Логин</label>
                <input type="text" name="login" id="login" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Пароль</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="form-group">
                <input type="checkbox" name="remember" id="remember" value="yes">
                <label for="remember">Запомнить меня</label>
            </div>

            <input class="btn" type="submit" value="Отправить">
        </form>
    </div>

</body>

</html>