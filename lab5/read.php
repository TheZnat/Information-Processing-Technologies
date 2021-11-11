<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Просмотр</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Просмотр записи</h1>
                </div>
                <div class="form-group">
                    <label>Модель</label>
                    <p class="form-control-static"><?php echo $row["VS_switc_мodel"]; ?></p>
                </div>
                <div class="form-group">
                    <label>Вид коммутатора</label>
                    <p class="form-control-static"><?php echo $row["VS_switc_Type_of"]; ?></p>
                </div>
                <div class="form-group">
                    <label>Скорость передачи данных</label>
                    <p class="form-control-static"><?php echo $row["VS_switc_Data_transfer_rater"]; ?></p>
                </div>
                <div class="form-group">
                    <label>Общее количество портов</label>
                    <p class="form-control-static"><?php echo $row["VS_switc_number_of_ports"]; ?></p>
                </div>
                <div class="form-group">
                    <label>Цена</label>
                    <p class="form-control-static"><?php echo $row["VS_switc_Price"]; ?></p>
                </div>
                <p><a href="login.php" class="btn btn-primary">Back</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>