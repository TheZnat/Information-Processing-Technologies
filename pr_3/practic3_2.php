<?php

if (isset($_POST["update"])) {
    if ($_FILES['filename']['size'] == 0 ) {
        exit('Файл не загружен');
    }
    if ($_FILES['filename']['size'] <= 1 * 1024 * 1024) {
        // создать папку
        $result = mkdir('NewDir', 0777, true); // создание папки

        if ($result) {
            echo '<div class="alert alert-success" >Папка создана</div>';
        } else {
            echo '<div class="alert alert-danger">Папка НЕ создана</div>';
        }

        move_uploaded_file($_FILES['filename']['tmp_name'], 'NewDir/' . $_FILES['filename']['name']); // перемещение файла
        echo 'Файл перемещен в папку созданную папку NewDir <br>';
        echo '<h3>Характеристика файла:</h3>  <br>';
        echo '<p>Имя файла: ' . $_FILES['filename']['name'] . '</p> <br>';
        echo '<p>Размер файла: ' . $_FILES['filename']['size'] . ' Кб</p> <br>';
        echo '<p>Тип файла: ' . $_FILES['filename']['type'] . '</p>  <br>';

    } elseif ($_FILES['filename']['size'] > 1 * 1024 * 1024) {
        echo '<h3>Характеристика файла:</h3> <br>';
        echo '<p>Имя файла: ' . $_FILES['filename']['name'] . '</p> <br>';
        echo '<p>Размер файла: ' . $_FILES['filename']['size'] .' КБ</p> <br>';
        echo '<p>Тип файла: ' . $_FILES['filename']['type'] . '</p> <br>';
    } else {
        echo '<div class="alert alert-danger">Ошибка загрузки файла</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Практика-3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/mustard-ui@latest/dist/css/mustard-ui.min.css">
</head>
<body>
<div class="container">
    <p>Форма для отправки файлов на сервер</p>
    <form  method="post" enctype="multipart/form-data">
        <input type="file" name="filename">
        <br>
        <input type="submit" name="update" value="Отправить">
    </form>
</div>
</body>
</html>
