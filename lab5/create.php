<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>Создание новой записи в таблице комаутатор</h2>
                </div>
                <p>Заполните данные и отправьте на добавление в базу данных</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                      method="post">
                    <div class="form-group <?php echo (!empty($switc)) ? 'has-error' : ''; ?>">
                        <label>Модель</label>
                        <input type="text" name="name" class="form-control" value="<?php echo
                        $switc_мodel; ?>">
                        <span class="help-block"><?php echo $switc_мodel; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($switc_мodel)) ?
                        'has-error' : ''; ?>">
                        <label>Вид коммутатора</label>
                        <select class="form-control" name="switc_Type_of">;
                            <?php
                            #$result_spisok = mysqli_query($link,"SELECT * from VS_Resolution");
                            #while($row_spisok = mysqli_fetch_array($result_spisok)){
                            #echo '<option value="'.$row_spisok[ 'VS_Resolution_id'].'">' .
                            $row_spisok['VS_switc_Type_of'] . '</option>';

                            #}
                            ?>
                        </select>
                    </div>
                    <div class="form-group <?php echo (!empty($switc_Type_of)) ? 'has-
error' : ''; ?>">
                        <label>Скорость передачи данных</label>
                        <select class="form-control" name="switc_Data_transfer_rater">;
                            <?php
                            #$result_spisok = mysqli_query($link,"SELECT * from VS_Corner");
                            #while($row_spisok = mysqli_fetch_array($result_spisok)){
                            #echo '<option value="'.$row_spisok['VS_Corner_id'].'">' .
                            $row_spisok['VS_switc_Data_transfer_rater'] . '</option>';
                            #}
                            ?>
                        </select>
                    </div>
                    <div class="form-group <?php echo (!empty($switc_Data_transfer_rate)) ? 'has-error' :
                        ''; ?>">

                        <label>Общее количество портов</label>
                        <select class="form-control" name="switc_number_of_ports">;
                            <?php
                            #$result_spisok = mysqli_query($link,"SELECT * from VS_IP");
                            #while($row_spisok = mysqli_fetch_array($result_spisok)){
                            #echo '<option value="'.$row_spisok['VS_IP_id'].'">' . $row_spisok['VS_IP_name'].
                            '</option>';
                            #}
                            ?>
                        </select>
                    </div>
                    <div class="form-group <?php echo (!empty($switc_number_of_ports)) ? 'has-
error' : ''; ?>">
                        <label>Цена</label>
                        <input type="text" name="price" class="form-control" value="<?php echo
                        $switc_Price; ?>">
                        <span class="help-block"><?php echo $switc_Price; ?></span>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="index.php" class="btn btn-default">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

