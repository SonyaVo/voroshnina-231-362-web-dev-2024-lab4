<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles_obr_sv/main.css">
</head>

<body>
    <h1>Форма обратной связи</h1>
    <div class="container">
        <form action="home.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label class="form-label" for="name">ФИО</label>
                <input type="text" name="name" id="name" placeholder="Иванов Иван Иванович"
                    value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="email">Почта</label>
                <input type="email" name="email" id="email" placeholder="ivanov@yandex.ru"
                    value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" required>
            </div>

            <div class="form-group">
                <p class="form-label">Как вы узнали о нас?</p>
            </div>
            <div class="form-group">
                <input type="radio" name="source" id="advertising" value="advertising" <?php echo (isset($_POST['source']) && $_POST['source'] == 'advertising') ? 'checked' : ''; ?>>
                <label for="advertising">Реклама в интернете</label>
            </div>
            <div class="form-group">
                <input type="radio" name="source" id="friends" value="friends" <?php echo (isset($_POST['source']) && $_POST['source'] == 'friends') ? 'checked' : ''; ?>>
                <label for="friends">Рассказали знакомые</label>
            </div>


            <div class="form-group">
                <label class="form-label" for="category">Категория обращения</label>
                <select name="category" id="category">
                    <option value="proposal" <?php echo (isset($_POST['category']) && $_POST['category'] == 'proposal') ? 'selected' : ''; ?>>Предложение</option>
                    <option value="grievance" <?php echo (isset($_POST['category']) && $_POST['category'] == 'grievance') ? 'selected' : ''; ?>>Жалоба</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label" for="message">Текст сообщения</label>
                <textarea name="message" id="message" cols="30" rows="10"
                    placeholder="Введите сообщение"></textarea>
            </div>

            <div class="form-group">
                <label class="form-label" for="attachment">Вложение</label>
                <input type="file" name="attachment" id="attachment">
            </div>

            <div class="form-group">
                <input type="checkbox" name="agreement" id="agreement" value="yes" <?php echo (isset($_POST['agreement']) && $_POST['agreement'] == 'yes') ? 'checked' : ''; ?>>
                <label for="agreement">Даю согласие на обработку данных</label>
            </div>

            <input class="btn" type="submit" value="Отправить">
        </form>
    </div>
</body>

</html>