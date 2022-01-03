<?php

$tgfile = fopen('3text.txt', 'r');
$countOper = 0;
$tags = array();

$descriptions = array();
$numString = 1;
while (!feof($tgfile)) {
    $tags[] = substr(fgets($tgfile), 0);
    $descriptions[] = substr(fgets($tgfile), 0);
}

echo "<table>";

for ($i = 0; $i < count($tags); $i++) {
    echo "<tr>";
    echo str_replace(' ', '', "<th>&lt;$tags[$i]&gt;</th>");
    echo "<th>$descriptions[$i]</th>";
    echo "</tr>";
    $countOper++;
}

echo "</table>";
echo '<br><p>«всего описано '.$countOper .' тегов»</p>';
fclose($tgfile);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>lab-3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/mustard-ui@latest/dist/css/mustard-ui.min.css">
</head>
<body>
<div class="container">
    <h3>Практика-3</h3>

</div>
</body>
</html>



