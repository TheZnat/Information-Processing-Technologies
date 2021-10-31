<?php
$message = "Угадайте число в диапазоне  от 1 до 999!";
$messageTrying = "";

$number = 0;
$hiddenNumber = rand(1, 999);
$trying = 0;

if (isset($_POST["update"])) {
    $number = $_POST["number"];
    $hiddenNumber = $_POST["hiddenNumber"];
    $trying = $_POST["trying"];

    if ($number < $_POST["hiddenNumber"]) {
        $message = "Загаданное число больше $number";
        $trying++;
    }

    elseif ($number > $_POST["hiddenNumber"]) {
        $message = "Загаданное число меньше $number";
        $trying++;
    }

    elseif ($number == $_POST["hiddenNumber"]) {
        $message = "Ура! Вы победили! Загаданное число $number <br> Загаданно новое число! ";
        $messageTrying = "Количсевто попыток: $trying ";
        $trying = 0;
    }

}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>laba-3/task-1</title>
    <link rel="stylesheet" href="https://unpkg.com/mustard-ui@latest/dist/css/mustard-ui.min.css">
</head>
<body>
<div class="container">
    <p><?php echo "Попытка № $trying"; ?></p>
    <h1>игра Угадай число</h1>
    <form  action="" method="post">
        <input type="text" name="number" value="<?php echo $number ?>"  />
        <input type="submit" name="update" value="Угадать" /><br/>
        <input type="hidden" name="hiddenNumber" value="<?php echo $hiddenNumber ?>" />
        <input type="hidden"  name="trying" value="<?php echo  $trying; ?>" />
    </form>
    <h2><?php echo $message; ?></h2>
    <h3><?php echo $messageTrying; ?></h3>
</div>
</body>
</html>
