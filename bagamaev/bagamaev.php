<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagamaev</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <main class="container">

        <aside class="aside">
            <nav>
                <ul>
                    <li>
                        <a href="bagamaev.php">Главная</a>
                    </li>
                    <li>
                        <a href="bagamaev.php?action=add">Добавить</a>
                    </li>
                    <li>
                        <a href="bagamaev.php?action=update">Изменить</a>
                    </li>
                    <li>
                        <a href="bagamaev.php?action=select">Поиск</a>
                    </li>
                    <li>
                        <a href="bagamaev.php?action=selectAll">Вывод всей БД</a>
                    </li>
                    <li>
                        <a href="bagamaev.php?action=delete">Удалить</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <section class="section">
            <?php
            switch ($_GET['action']) {
                case 'add':
            ?>

                    <form name="add" class="form" action="bagamaev_insert.php" method="POST" autocomplete="off">
                        <div class="flex">
                            <div>

                                <div class="wrapper">
                                    <div class="naming">Отделение</div>
                                    <div class="inputing">
                                        <input required class="inp" type="text" name="otdelenie">
                                    </div>
                                </div>

                                <div class="wrapper">
                                    <div class="naming">ФИО Пациента</div>
                                    <div class="inputing">
                                        <select class="sel" name="fio">
                                            <option value="Архипова Арина Викторовна">Архипова Арина Викторовна</option>
                                            <option value="Багамаев Джамал Раджабович">Багамаев Джамал Раджабович</option>
                                            <option value="Ермаков Вадим Юрьевич">Ермаков Вадим Юрьевич</option>
                                            <option value="Созаев Кязим Расулович">Созаев Кязим Расулович</option>
                                            <option value="Шальковская Полина Олеговна">Шальковская Полина Олеговна</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="wrapper">
                                    <div class="naming">Номер палаты</div>
                                    <div class="inputing">
                                        <input required class="inp" type="number" name="palata">
                                    </div>
                                </div>

                            </div>

                            <div>

                                <div class="wrapper">
                                    <div class="naming">Врач</div>
                                    <div class="inputing">
                                        <input required class="inp" type="text" name="vrach">
                                    </div>
                                </div>

                                <div class="wrapper">
                                    <div class="naming">Диагноз</div>
                                    <div class="inputing">
                                        <input required class="inp" type="text" name="diagnoz">
                                    </div>
                                </div>

                                <div class="wrapper">
                                    <div class="naming">Диета</div>
                                    <div class="inputing">
                                        <input required class="inp" type="text" name="dieta">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="wrapper icon">
                            <div class="inputing">
                                <button class="btn <?= $_GET['action']; ?>" type="submit" name="add"></button>
                            </div>
                        </div>


                    </form>

                <?php
                    break;

                case 'update':
                ?>
                    <form name="update" class="form" action="bagamaev_update.php" method="POST" autocomplete="off">
                        <div class="flex">
                            <div>

                                <div class="wrapper">
                                    <div class="naming">id</div>
                                    <div class="inputing">
                                        <input required class="inp" type="number" name="id">
                                    </div>
                                </div>

                                <div class="wrapper">
                                    <div class="naming">Отделение</div>
                                    <div class="inputing">
                                        <input required class="inp" type="text" name="otdelenie">
                                    </div>
                                </div>

                                <div class="wrapper">
                                    <div class="naming">ФИО Пациента</div>
                                    <div class="inputing">
                                        <input required class="inp" type="text" name="fio">
                                    </div>
                                </div>

                                <div class="wrapper">
                                    <div class="naming">Номер палаты</div>
                                    <div class="inputing">
                                        <input required class="inp" type="number" name="palata">
                                    </div>
                                </div>

                            </div>

                            <div>

                                <div class="wrapper">
                                    <div class="naming">Врач</div>
                                    <div class="inputing">
                                        <input required class="inp" type="text" name="vrach">
                                    </div>
                                </div>

                                <div class="wrapper">
                                    <div class="naming">Диагноз</div>
                                    <div class="inputing">
                                        <input required class="inp" type="text" name="diagnoz">
                                    </div>
                                </div>

                                <div class="wrapper">
                                    <div class="naming">Диета</div>
                                    <div class="inputing">
                                        <div><input type="radio" name="dieta" value="Без Диеты"> Без Диеты</div>
                                        <div><input type="radio" name="dieta" value="Особая" checked> Особая</div>
                                        <div><input type="radio" name="dieta" value="С калориями"> С калориями</div>
                                        <div><input type="radio" name="dieta" value="С углеводами"> С углеводами</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="wrapper icon">
                            <div class="inputing">
                                <button class="btn <?= $_GET['action']; ?>" type="submit" name="update"></button>
                            </div>
                        </div>

                    </form>

                <?php
                    break;

                case 'select':
                    echo 'select';
                    break;

                case 'selectAll':
                ?>

                    <form name="selectAll" class="form" action="" method="POST" autocomplete="off">

                        <?php

                        $db = mysqli_connect("localhost", "root", "mysql", "gospital") or die("Не могу подключиться");
                        $result = mysqli_query($db, "SELECT * FROM `bagamaev`");

                        if (isset($_POST['selectAll'])) {
                            if ($result == null) {
                                echo "<h1>Ничего не найдено</h1>";
                            } else {
                                echo '<table class="hide"><tr><th>id</th><th>Отделение</th><th>ФИО</th><th>Палата</th><th>Врач</th><th>Диагноз</th><th>Диета</th></tr>';
                                while ($myrow = mysqli_fetch_array($result)) {
                                    echo '<tr>
                                <td>' . $myrow['id'] . '</td>
                                <td>' . $myrow['otdelenie'] . '</td>
                                <td>' . $myrow['fio'] . '</td>
                                <td>' . $myrow['palata'] . '</td>
                                <td>' . $myrow['vrach'] . '</td>
                                <td>' . $myrow['diagnoz'] . '</td>
                                <td>' . $myrow['dieta'] . '</td>
                                </tr>';
                                }
                                echo '</table>';
                            }
                        } ?>

                        <div class="direction_column">
                            <div>Вывод всей БД</div>
                            <div>
                                <button id="none" class="<?= $_GET['action']; ?>" type="submit" name="selectAll"></button>
                            </div>
                        </div>

                    </form>

                <?php break;

                case 'delete':
                ?>

                    <form name="delete" class="form" action="bagamaev_delete.php" method="POST" autocomplete="off">

                        <div class="direction_column">

                            <div class="wrapper">
                                <div class="naming">id</div>
                                <div class="inputing">
                                    <input required class="inp" type="number" name="id">
                                </div>
                            </div>

                            <div class="wrapper icon">
                                <div class="inputing">
                                    <button class="<?= $_GET['action']; ?>" type="submit" name="delete"></button>
                                </div>
                            </div>

                        </div>

                    </form>

                <?php break;

                default:
                ?>

                    <div class="icon">
                        <div class="logo"></div>
                    </div>

            <?php break;
            }
            ?>

        </section>

    </main>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="bagamaev.js"></script>
</body>

</html>