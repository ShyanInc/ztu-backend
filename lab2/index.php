<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../globals.css">
        <title>Lab 2</title>
    </head>
    <body>
        <h1>Лабораторна робота №2</h1>

        <h2>Завдання 1</h2>
        <form action="" method="post">
            <label for="text">Текст:</label>
            <input type="text" id="text" name="text" required>

            <label for="find">Знайти:</label>
            <input type="text" id="find" name="find" required>

            <label for="replace">Замінити на:</label>
            <input type="text" id="replace" name="replace" required>

            <input type="submit" value="Замінити">
        </form>

        <?php
            if (isset($_POST['text']) && isset($_POST['find']) && isset($_POST['replace'])) {
                $text = $_POST['text'];
                $find = $_POST['find'];
                $replace = $_POST['replace'];

                $result = str_replace($find, $replace, $text);
                echo "<h2>Результат: $result</h2>";
            }
        ?>

        <h2>Завдання 2</h2>
        <form action="" method="post">
            <label for="cities">Міста:</label>
            <input type="text" id="cities" name="cities" required>
            <button type="submit">Відсортувати</button>
        </form>

        <?php
            if (isset($_POST['cities'])) {
                $citiesArray = explode(' ', $_POST['cities']);
                sort($citiesArray);
                $sortedCitiesString = implode(', ', $citiesArray);
                echo "<h2>Відсортовані міста: $sortedCitiesString</h2>";
            }
        ?>
    </body>
</html>
