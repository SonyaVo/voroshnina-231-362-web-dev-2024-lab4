<?php
$title = "Ворошнина София Павловна, 231-362, лаб.3";

$seconds = date("s");

if ($seconds % 2 == 0) {
    $image = "images_main/avatar.jpg";
} else {
    $image = "images_main/avatar-2.jpg";
}
?>




<!DOCTYPE html> <!-- тип документа-->
<html> <!-- корневой тег-->

<head>
    <meta charset="UTF-8">


    <title> <?php echo $title; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles_main/main.css">
</head>

<body>
    <header class="header">
        <div>
            <nav class="main-menu">


                <?php
                echo '<a href="#about"';
                ?>
                <?php
                echo ' class="btn">Обо мне</a>';
                ?>

                <?php
                echo '<a href="#skills"';
                ?>
                <?php
                echo ' class="btn">Навыки</a>';
                ?>


                <?php	// начинаем первый PHP скрипт
                echo '<a href="#projects"';
                ?>
                <?php	// начинаем второй PHP скрипт
                echo ' class="btn">Проекты</a>';
                ?>

                <?php
                $name = 'Авторизация';
                $link = 'avt.php';
                $current_page = true;
                ?>

                <a href="<?php echo $link; ?>" <?php if ($current_page)
                       echo ' class="btn btn-righ"'; ?>>
                    <?php echo $name; ?>
                </a>



            </nav>
            <div class="text-center">
                <h1>Ворошнина София Павловна</h1>
                <h2>Разработчик</h2>


            </div>
        </div>
    </header>

    <main>
        <div>
            <section id="about"> <!-- для выделения смысловой части-->
                <p class="text-center bold back">Обо мне</p>

                <figure class="avatar">
                    <?php echo '<img src="' . $image . '" alt="Dynamic Image">' ?> <!-- Выводим изображение -->
                </figure>
                <p> Всем привет! Меня зовут Ворошнина София Павловна! Я закончила школу в 2023 году и поступила в
                    Москвоский политехнический
                    университет. Сейчас я обучаюсь на 2 курсе направления Корпоративаные информационные системы.
                </p>
                <section id="ege">
                    <p class="text-left bold">ЕГЭ</p>
                    <table>
                        <thead>
                            <tr class="text-left">
                                <th>Предмет</th>
                                <th>Баллы</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Математика</td>
                                <td>72</td>
                            </tr>
                            <tr>
                                <td>Физика</td>
                                <td>74</td>
                            </tr>
                            <tr>
                                <td>Информатика</td>
                                <td>80</td>
                            </tr>
                            <tr>
                                <td>Русский язык</td>
                                <td>89</td>
                            </tr>
                        </tbody>
                    </table>
                </section>

            </section>
            <section id="skills">
                <p class="text-center bold back">Навыки</p>
                <ul>
                    <?php
                    // Массив с навыками
                    $skillsArray = [
                        "Базовые знания языков программирования Java и Python.",
                        "Работа в проекте 'Моделирование интеллектуальных систем управления развитием г. Москвы на основе методов машинного обучения.'",
                        "Опыт работы в 3D программах: Компас, Autocad, Archicad. Занимаю должность помощника архитектора."
                    ];

                    // Динамически создать элементы списка на основе массива
                    foreach ($skillsArray as $skill) {
                        echo "<li>" . $skill . "</li>";
                    }
                    ?>
                </ul>
            </section>
            <section id="projects">
                <p class="text-center bold back">Проекты</p>
                <ul>
                    <?php
                    // Массив с проектами
                    $projectsArray = [
                        "Научная статья на тему 'Искуственный интеллект в развитии талантов'",
                        "Курсовой проект игра 'Жизнь' на Java",
                        "Курсовой проект на тему: 'Разработка клиент-серверного desktop-приложения для поддержки бизнес-процессов компании велопроката'"
                    ];

                    // Динамически создать элементы списка на основе массива
                    foreach ($projectsArray as $project) {
                        echo "<li>" . $project . "</li>";
                    }
                    ?>
                </ul>
            </section>
        </div>

    </main>

    <footer>
        <div class="footer">
            &copy; Ворошнина София Павловна
            <a class="btn" href="mailto:voroshnina.sofia31052005@yandex.ru">voroshnina.sofia31052005@yandex.ru</a>
            89684754909

            <?php
            $name = 'обратная связь';
            $link = 'obr_sv.php';
            $current_page = true;
            ?>


            <a href="<?php echo $link; ?>" <?php if ($current_page)
                   echo ' class="btn"'; ?>>
                <?php echo $name; ?>
            </a>


        </div>
        <p class="footer-info">
            <?php

            date_default_timezone_set('Europe/Moscow');


            echo "Сформировано " . date("d.m.Y") . " в " . date("H:i:s");
            ?>
        </p>
    </footer>


</body>

</html>

