<?php

$books = array('Гарри Поттер', 'Хоббит', 'Библия', 'Наруто');

$surname = isset($_POST['surname']) ? $_POST['surname'] : null;
$readed_keys = isset($_POST['readed']) ? $_POST['readed'] : null;
$favorite = isset($_POST['favorite']) ? $_POST['favorite'] : null;

if ($surname !== null && $readed_keys !== null && $favorite !== null):

    $readed_array = array();

    foreach ($readed_keys as $key=>$value) {
        $readed_array[$key] = $books[$key];
    }

    asort($readed_array);

    $html_books = '
<table>
<thead>
	<tr><td>' . $surname . '</td></tr>
</thead>
<tbody>';

    foreach ($readed_array as $key=>$value) {
        if ($key == $favorite) {
            $html_books .= '<tr><td><strong>' . $books[$key] . '</strong></td></tr> ';
        } else {
            $html_books .= '<tr><td>' . $books[$key] . '</td></tr> ';
        }
    }

    $html_books .= '
</tbody>
</table>';

endif;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>laba-3/task-2</title>
    <link rel="stylesheet" href="https://unpkg.com/mustard-ui@latest/dist/css/mustard-ui.min.css">
</head>
<body>
<div class="container">
<form method="POST">
    <p>Фамилия: <input type="text" name="surname"></p>
    <?php
    foreach ($books as $key=>$value) {
        echo '<p>' . $value . ': <input type="checkbox" name="readed[' . $key . ']"></p>';
    }
    ?>
    Любимая: <select name="favorite">
        <?php
        foreach ($books as $key=>$value) {
            echo '<option value=' . $key . '>' . $value . '</option>';
        }
        ?>
    </select>
    <p><input type="submit"></p>
</form>
<?=isset($html_books) ? $html_books : null?>
</div>
</body>
</html>
