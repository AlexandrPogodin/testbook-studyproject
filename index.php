<?php
session_start();
$_SESSION['user']='student'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Учебник</title>
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
            <a href='http://google.com' class="button is-danger is-outlined">Выход</a>
            <a href='/info.php' class="button is-primary is-outlined">Справка</a>
            <a href='/results.php' class="button is-info is-outlined">Результаты</a><br><br>
            <strong>IP-адрес компьютера</strong>:
            <?php
         $user_ip = $_SERVER['REMOTE_ADDR'];
         echo $user_ip;
         ?><br>
            <strong>Подключение к базе данных</strong>:
            <?php
         include('db.php');
         //echo $_SESSION['user'];
         ?><br>
            <script type="text/javascript">
                function timer() {
                    var obj = document.getElementById('timer_inp');
                    obj.innerHTML--;
                    $timerm = obj.innerHTML;

                    if (obj.innerHTML == 0) {
                        alert('Время вышло! Страница будет перезагружена! Все данные будут утеряны!');
                        setTimeout(function() {}, 1000);
                        location.reload(true);
                    } else {
                        setTimeout(timer, 1000);
                    }
                }
                setTimeout(timer, 1000);

            </script>
            <strong>Осталось секунд</strong>: <span id="timer_inp"> 600</span> из 600 (10мин)

            <br><br>
            <!--- Рандомизация данных --->
            <?php
         $z11 = rand(1,10);
         $z12 = rand(13,24);
         $z21 = rand(1,10);
         $z22 = rand(13,24);
         $z31 = rand(1,10);
         $z32 = rand(13,24);
         ?>
            <form method=POST action=answer.php>
                <div class="content">
                    <div class="columns">
                        <div class="column is-2">
                            <strong>Введите ваше имя: </strong>
                        </div>
                        <div class="column is-2">
                            <input required class="input" type="text" placeholder="Имя" name='username'>
                        </div>
                        <div class="column is-4">
                            <span class="has-text-danger is-size-5">* - Обязательное поле.</span>
                        </div>
                    </div>
                    <p><strong>Задача 1.</strong> Из пунктов А и В навстречу друг другу с постоянными скоростями вышли два путника.<br>
                        Первый вышел из А в
                        <?php echo $z11; echo "<input type='hidden' name='z11' size='1' value= '$z11'>";?>:00
                        и пришел в В в 13:00. Второй путник вышел из В в
                        <?php echo $z11;?>:00 и пришел в А в
                        <?php echo $z12; echo "<input type='hidden' name='z12' value= '$z12' >" ?>:00.<br>
                        В какое время путники встретились? Ответ округлить.</p>
                    <div class="columns">
                        <div class="column is-2">
                            <input class="input" type="text" placeholder="Ответ" name='ans1'>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <p><strong>Задача 2.</strong> Из пунктов А и В навстречу друг другу с постоянными скоростями вышли два путника.<br>
                        Первый вышел из А в
                        <?php echo $z21; echo "<input type='hidden' name='z21' size='1' value= '$z21' >";?>:00
                        и пришел в В в 13:00. Второй путник вышел из В в
                        <?php echo $z21; ?>:00 и пришел в А в
                        <?php echo $z22; echo "<input type='hidden' name='z22' value= '$z22' >" ?>:00.<br>
                        В какое время путники встретились? Ответ округлить.</p>
                    <div class="columns">
                        <div class="column is-2">
                            <input class="input" type="text" placeholder="Ответ" name='ans2'>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <p><strong>Задача 3.</strong> Из пунктов А и В навстречу друг другу с постоянными скоростями вышли два путника.<br>
                        Первый вышел из А в
                        <?php echo $z31; echo "<input type='hidden' name='z31' size='1' value= '$z31' >";?>:00
                        и пришел в В в 13:00. Второй путник вышел из В в
                        <?php echo $z31; ?>:00 и пришел в А в
                        <?php echo $z32; echo "<input type='hidden' name='z32' value= '$z32' >" ?>:00.<br>
                        В какое время путники встретились? Ответ округлить.</p>
                    <div class="columns">
                        <div class="column is-2">
                            <input class="input" type="text" placeholder="Ответ" name='ans3'>
                        </div>
                    </div>
                </div>
                <input type='hidden' name='userip' size='1' value='$user_ip'>
                <input class="button is-primary is-outlined" type='submit' name='bsubmit' value='Отправить'>
            </form>
        </div>
    </div>
    <div>
        <?php include('footer.php'); ?>
    </div>
</body>

</html>
