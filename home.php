
<?php
// Проверка, был ли отправлен POST-запрос
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $message = ($_POST['message']);
    $source = isset($_POST['source']) ? ($_POST['source']) : 'Не указано';
    $category = ($_POST['category']);



    // Проверка, был ли загружен файл
    $fileName = '';
    if (isset($_FILES['attachment']) && $_FILES['attachment']['name'] != '') {
        $fileName = $_FILES['attachment']['name'];
    }

    // Отображение данных
    echo "<h1>Ответ на обращение</h1>";
    echo "<p><strong>ФИО:</strong> $name</p>";
    echo "<p><strong>Текст обращения:</strong> $message</p>";

    if ($fileName) {
        echo "<p><strong>Прикрепленный файл:</strong> $fileName</p>";
    } else {
        echo "<p><strong>Файл не прикреплен.</strong></p>";
    }

    // Кнопка для возвращения к форме с сохраненными данными
    echo '
        <form action="obr_sv.php" method="POST">
            <input type="hidden" name="name" value="' . $name . '">
            <input type="hidden" name="email" value="' . $email . '">
            <input type="hidden" name="message" value="' . $message . '">
            <input type="hidden" name="source" value="' . $source . '">
            <input type="hidden" name="category" value="' . $category . '">
            <input type="submit" value="Заполнить снова">
        </form>
    ';
} else {
    echo "Данные не были отправлены.";
}
?>