<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ваши результаты!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    УЧЕБНИК
                </h1>
                <h2 class="subtitle">
                    «Логарифмическая функция»
                </h2>
            </div>
        </div>
    </section>
    <div class="container is-fluid">
        <div class="notification">
            <a href='/' class="button">Назад</a><br><br>
            <br>
            <strong>IP-адрес компьютера</strong>:
            <?php
            echo $_SERVER['REMOTE_ADDR'];
            ?><br>
            <strong>Подключение к базе данных</strong>:
                <?php
                include('db.php');
                ?><br>
            <div class="content">
                <strong>Студент: </strong><?php echo $_POST['username']; ?>
                <br><br>
                <p><strong>Задача 1.</strong> Из пунктов А и В навстречу друг другу с постоянными скоростями вышли два путника.<br>
                    Первый вышел из А в <?php echo $_POST["z11"]; ?>:00 и пришел в В в 13 часов. Второй путник вышел из В в <?php echo $_POST["z11"]; ?>:00
                    и пришел в А в <?php echo $_POST["z12"]; ?>:00.<br>
                    В какое время путники встретились? Ответ округлить.</p>
                    <!--- Промежуточные данные для решения --->
                    <?php
                        $z1p1 = (13-$_POST["z11"]);
                        $z1p2 = ($_POST["z12"]-$_POST["z11"]);
                        $z1V = ((max($z1p1 , $z1p2)/$z1p1)+(max($z1p1 , $z1p2)/$z1p2));
                        $rating = 0;
                    ?>
                    <details>
                    <summary>Решение</summary>
                    <div class="has-background-warning">
                    <p><strong>Решение: </strong><br>
                        <ol type="1">
                            <li>Заметим, что первый путник был в пути <?php echo (13-$_POST["z11"]); ?> часов, а второй
                                - <?php echo ($_POST["z12"]-$_POST["z11"]); ?> часов.</li>
                                <li>Предположим, потому, что весь путь от А до В составляет
                                <?php
                                    echo max($z1p1 , $z1p2); ?> условных единиц. </li>
                                <li>Скорость первого путника равна <?php
                                    echo max($z1p1 , $z1p2) . ' : ' . $z1p1 . ' = ' .
                                    round(max($z1p1 , $z1p2)/$z1p1);
                                ?> у.е./час;
                                    второго - <?php
                                        echo max($z1p1 , $z1p2) . ' : ' . $z1p2 . ' = ' .
                                        round(max($z1p1 , $z1p2)/$z1p2);
                                    ?>
                                     у.е./час.</li>
                                    <li>Скорость сближения путников <?php
                                        echo round(max($z1p1 , $z1p2)/$z1p1) . ' + ' . round(max($z1p1 , $z1p2)/$z1p2) . ' = ' .
                                        round($z1V);
                                    ?> у.е./час.</li>
                                    <li>Встреча произойдет через <?php
                                        echo max($z1p1 , $z1p2) . ' : ' . round($z1V) . ' = ' .
                                        round(max($z1p1 , $z1p2)/($z1V));
                                    ?> часа после начала их
                                        движения. Так как путники вышли в <?php echo $_POST["z11"]; ?>:00, то встреча произойдет в <?php
                                        echo round($_POST["z11"]+(max($z1p1 , $z1p2)/($z1V)));
                                        ?> часов.</li><br>
                                    </ol>
                                    <strong>Ответ:</strong> <?php
                                    echo round($_POST["z11"]+(max($z1p1 , $z1p2)/($z1V)));
                                    ?>.
                                </p></div>
                            </details><br>
                                <div class="answer">
                                    <p>Ваш ответ: <?php
                                        echo $_POST['ans1'];
                                        if ($_POST['ans1'] == (round($_POST["z11"]+(max($z1p1 , $z1p2)/($z1V)))))
                                        {
                                            echo '   <i class="far fa-check-circle has-text-success"></i>'; $rating++;
                                        } else
                                            {
                                                echo '<span class="has-text-danger"> - Неверно! Правильный ответ: ' . round($_POST["z11"]+(max($z1p1 , $z1p2)/($z1V))) . '</span>';
                                            }
                                    ?></p>
                                </div>
                            </div>
                            <div class="content">
                                <p><strong>Задача 2.</strong> Из пунктов А и В навстречу друг другу с постоянными скоростями вышли два путника.<br>
                                    Первый вышел из А в <?php echo $_POST["z21"]; ?>:00 и пришел в В в 13 часов. Второй путник вышел из В в <?php echo $_POST["z21"]; ?>:00
                                    и пришел в А в <?php echo $_POST["z22"]; ?>:00.<br>
                                    В какое время путники встретились? Ответ округлить.</p>
                                    <!--- Промежуточные данные для решения --->
                                    <?php
                                        $z2p1 = (13-$_POST["z21"]);
                                        $z2p2 = ($_POST["z22"]-$_POST["z21"]);
                                        $z2V = ((max($z2p1 , $z2p2)/$z2p1)+(max($z2p1 , $z2p2)/$z2p2));
                                    ?>
                                    <details>
                                    <summary>Решение</summary>
                                    <div class="has-background-warning">
                                    <p><strong>Решение: </strong><br>
                                        <ol type="1">
                                            <li>Заметим, что первый путник был в пути <?php echo (13-$_POST["z21"]); ?> часов, а второй
                                                - <?php echo ($_POST["z22"]-$_POST["z21"]); ?> часов.</li>
                                                <li>Предположим, потому, что весь путь от А до В составляет
                                                <?php
                                                    echo max($z2p1 , $z2p2); ?> условных единиц. </li>
                                                <li>Скорость первого путника равна <?php
                                                    echo max($z2p1 , $z2p2) . ' : ' . $z2p1 . ' = ' .
                                                    round(max($z2p1 , $z2p2)/$z2p1);
                                                ?> у.е./час;
                                                    второго - <?php
                                                        echo max($z2p1 , $z2p2) . ' : ' . $z2p2 . ' = ' .
                                                        round(max($z2p1 , $z2p2)/$z2p2);
                                                    ?>
                                                     у.е./час.</li>
                                                    <li>Скорость сближения путников <?php
                                                        echo round(max($z2p1 , $z2p2)/$z2p1) . ' + ' . round(max($z2p1 , $z2p2)/$z2p2) . ' = ' .
                                                        round($z2V);
                                                    ?> у.е./час.</li>
                                                    <li>Встреча произойдет через <?php
                                                        echo max($z2p1 , $z2p2) . ' : ' . round($z2V) . ' = ' .
                                                        round(max($z2p1 , $z2p2)/($z2V));
                                                    ?> часа после начала их
                                                        движения. Так как путники вышли в <?php echo $_POST["z21"]; ?>:00, то встреча произойдет в <?php
                                                        echo round($_POST["z21"]+(max($z2p1 , $z2p2)/($z2V)));
                                                        ?> часов.</li><br>
                                                    </ol>
                                                    <strong>Ответ:</strong> <?php
                                                    echo round($_POST["z21"]+(max($z2p1 , $z2p2)/($z2V)));
                                                    ?>.
                                                </p></div>
                                            </details><br>
                                                <div class="answer">
                                                    <p>Ваш ответ: <?php
                                                        echo $_POST['ans2'];
                                                        if ($_POST['ans2'] == (round($_POST["z21"]+(max($z2p1 , $z2p2)/($z2V)))))
                                                        {
                                                            echo '   <i class="far fa-check-circle has-text-success"></i>'; $rating++;
                                                        } else
                                                            {
                                                                echo '<span class="has-text-danger"> - Неверно! Правильный ответ: ' . round($_POST["z21"]+(max($z2p1 , $z2p2)/($z2V))) . '</span>';
                                                            }
                                                    ?></p>
                                                </div>
                                            </div>

                                            <div class="content">
                                                <p><strong>Задача 3.</strong> Из пунктов А и В навстречу друг другу с постоянными скоростями вышли два путника.<br>
                                                    Первый вышел из А в <?php echo $_POST["z31"]; ?>:00 и пришел в В в 13 часов. Второй путник вышел из В в <?php echo $_POST["z31"]; ?>:00
                                                    и пришел в А в <?php echo $_POST["z32"]; ?>:00.<br>
                                                    В какое время путники встретились? Ответ округлить.</p>
                                                    <!--- Промежуточные данные для решения --->
                                                    <?php
                                                        $z3p1 = (13-$_POST["z31"]);
                                                        $z3p2 = ($_POST["z32"]-$_POST["z31"]);
                                                        $z3V = ((max($z3p1 , $z3p2)/$z3p1)+(max($z3p1 , $z3p2)/$z3p2));

                                                    ?>
                                                    <details>
                                                    <summary>Решение</summary>
                                                    <div class="has-background-warning">
                                                    <p><strong>Решение: </strong><br>
                                                        <ol type="1">
                                                            <li>Заметим, что первый путник был в пути <?php echo (13-$_POST["z31"]); ?> часов, а второй
                                                                - <?php echo ($_POST["z32"]-$_POST["z31"]); ?> часов.</li>
                                                                <li>Предположим, потому, что весь путь от А до В составляет
                                                                <?php
                                                                    echo max($z3p1 , $z3p2); ?> условных единиц. </li>
                                                                <li>Скорость первого путника равна <?php
                                                                    echo max($z3p1 , $z3p2) . ' : ' . $z3p1 . ' = ' .
                                                                    round(max($z3p1 , $z3p2)/$z3p1);
                                                                ?> у.е./час;
                                                                    второго - <?php
                                                                        echo max($z3p1 , $z3p2) . ' : ' . $z3p2 . ' = ' .
                                                                        round(max($z3p1 , $z3p2)/$z3p2);
                                                                    ?>
                                                                     у.е./час.</li>
                                                                    <li>Скорость сближения путников <?php
                                                                        echo round(max($z3p1 , $z3p2)/$z3p1) . ' + ' . round(max($z3p1 , $z3p2)/$z3p2) . ' = ' .
                                                                        round($z3V);
                                                                    ?> у.е./час.</li>
                                                                    <li>Встреча произойдет через <?php
                                                                        echo max($z3p1 , $z3p2) . ' : ' . round($z3V) . ' = ' .
                                                                        round(max($z3p1 , $z3p2)/($z3V));
                                                                    ?> часа после начала их
                                                                        движения. Так как путники вышли в <?php echo $_POST["z31"]; ?>:00, то встреча произойдет в <?php
                                                                        echo round($_POST["z31"]+(max($z3p1 , $z3p2)/($z3V)));
                                                                        ?> часов.</li><br>
                                                                    </ol>
                                                                    <strong>Ответ:</strong> <?php
                                                                    echo round($_POST["z31"]+(max($z3p1 , $z3p2)/($z3V)));
                                                                    ?>.
                                                                </p></div>
                                                            </details><br>
                                                                <div class="answer">
                                                                    <p>Ваш ответ: <?php
                                                                        echo $_POST['ans3'];
                                                                        if ($_POST['ans3'] == (round($_POST["z31"]+(max($z3p1 , $z3p2)/($z3V)))))
                                                                        {
                                                                            echo '   <i class="far fa-check-circle has-text-success"></i>'; $rating++;
                                                                        } else
                                                                            {
                                                                                echo '<span class="has-text-danger"> - Неверно! Правильный ответ: ' . round($_POST["z31"]+(max($z3p1 , $z3p2)/($z3V))) . '</span>';
                                                                            }
                                                                    ?></p>
                                                                </div>
                                                            </div>
                                                        <div class="content columns">
                                                            <div class="column is-3">
                                                                <!--- Запись данных в БД --->
                                                                <?php
                                                                $user = htmlentities(mysqli_real_escape_string($connection , $_POST['username']));
                                                                $ans1 = $_POST['ans1'];
                                                                $ans2 = $_POST['ans2'];
                                                                $ans3 = $_POST['ans3'];
                                                                $score = $rating*10;

                                                                  if (isset($_POST["username"])) {
                                                                     if($_SESSION['user'] == 'student'){
                                                                        $query ="INSERT INTO `students` VALUES(NULL, '$user' , '$ans1' , '$ans2' , '$ans3' , '$score')";
                                                                        $sql = mysqli_query($connection, $query);
                                                                        session_destroy();
                                                                     }else{
                                                                        echo '<p class="has-text-danger">Была повторная попытка записи в БД!</p>';
                                                                           }
                                                                    if ($sql) {
                                                                      echo '<p class="has-text-success">Успешно записано в БД!</p>';
                                                                    } else {
                                                                      echo '<p>Произошла ошибка: ' . mysqli_error($connection) . '</p>';
                                                                    }
                                                                  }
                                                                  unset($_POST);
                                                                  mysqli_close($connection);

                                                                ?>
                                                                <strong>Ваш результат: </strong><?php echo ($rating*10); ?> из 30 баллов.
                                                                <progress class="progress is-success" value="<?php echo $rating; ?>" max="3"></progress>
                                                            </div>
                                                        </div>

                        </div>
                    </div>
                    <div><?php include('footer.php'); ?></div>
                </body>
                </html>
