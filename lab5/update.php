<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>Обновление записи</h2>
                </div>
                <p>Пожалуйста, отредактируйте необходимые данные и примените изменения.</p>
                <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">

                    <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                        <label>Наименование</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                        <span class="help-block"><?php echo $name_err;?></span>
                    </div>

                    <div class="form-group <?php echo (!empty($brand_err)) ? 'has-error' : ''; ?>">
                        <label>Бренд</label><br>
                        <select id="brand" name="brand"><br>
                            <?php
                            for ($i = 0; $i < count($brands); $i++)
                            {
                                echo "<option value='". $brands[$i]['VR_Base_Brand_id'];
                                if ($brands[$i]['VR_Base_Brand_id'] == $brand)
                                    echo "' selected>";
                                else echo "'>";
                                echo $brands[$i]['VR_Base_Brand_name'] ."</option>";
                            }
                            ?>
                        </select>
                        <span class="help-block"><?php echo $brand_err;?></span>
                    </div>

                    <div class="form-group <?php echo (!empty($type_of_network_equipment_err)) ? 'has-error' : ''; ?>">
                        <label>Тип сетевого оборудования</label><br>
                        <select id="type_of_network_equipment" name="type_of_network_equipment">
                            <?php
                            for ($i = 0; $i < count($type_of_network_equipment); $i++)
                            {
                                echo "<option value='". $type_of_network_equipment[$i]['VR_Base_Machine_Type_id'];
                                if ($type_of_network_equipment[$i]['VR_type_of_network_equipmentType_id'] == $type_of_network_equipment)
                                    echo "' selected>";
                                else echo "'>";
                                echo $type_of_network_equipment[$i]['VR_type_of_network_equipmentType_name'] ."</option>";
                            }
                            ?>
                        </select>
                        <span class="help-block"><?php echo $machine_err;?></span>
                    </div>

                    <div class="form-group <?php echo (!empty($number_of_ports_err)) ? 'has-error' : ''; ?>">
                        <label>Колчисевто портов</label><br>
                        <select id="number_of_ports" name="number_of_ports">
                            <?php
                            for ($i = 0; $i < count($number_of_ports); $i++)
                            {
                                echo "<option value='". $number_of_ports[$i]['VR_Base_number_of_ports_id'];
                                if ($number_of_ports[$i]['VR_Base_number_of_ports_id'] == $number_of_ports)
                                    echo "' selected>";
                                else echo "'>";
                                echo $number_of_ports[$i]['VR_Base_number_of_ports_name'] ."</option>";
                            }
                            ?>
                        </select>
                        <span class="help-block"><?php echo $number_of_ports_err;?></span>
                    </div>

                    <div class="form-group <?php echo (!empty($placement_err)) ? 'has-error' : ''; ?>">
                        <label>Размещение</label>
                        <textarea name="placementr" class="form-control"><?php echo $placement; ?></textarea>
                        <span class="help-block"><?php echo $placement_err;?></span>
                    </div>

                    <div class="form-group <?php echo (!empty($supply_voltage_err)) ? 'has-error' : ''; ?>">
                        <label>Напряжение питания</label><br>
                        <select id="supply_voltage" name="supply_voltage">
                            <?php
                            for ($i = 0; $i < count($supply_voltage); $i++)
                            {
                                echo "<option value='". $supply_voltage[$i]['VR_Base_supply_voltage_id'];
                                if ($supply_voltage[$i]['VR_Base_supply_voltage_id'] == $supply_voltage)
                                    echo "' selected>";
                                else echo "'>";
                                echo $supply_voltage[$i]['VR_Base_supply_voltage_name'] ."</option>";
                            }
                            ?>
                        </select>
                        <span class="help-block"><?php echo $supply_voltage_err;?></span>
                    </div>

                    <div class="form-group <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                        <label>Цена</label>
                        <input type="text" name="price" class="form-control" value="<?php echo $price; ?>">
                        <span class="help-block"><?php echo $price_err;?></span>
                    </div>

                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="login.php" class="btn btn-default">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
