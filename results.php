<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Последние результаты тестов</title>
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
            <strong>Подключение к базе данных</strong>:
                <?php
                include('db.php');
                ?><br>
            <br>
            <div class="content">
                <p><strong>Результаты тестов:</strong></p>
                <br>
                <table class="table">
                    <thead>
                    <tr>
                      <th><abbr>Id</abbr></th>
                      <th><abbr>Имя</abbr></th>
                      <th><abbr title="Ответ на первую задачу">1</abbr></th>
                      <th><abbr title="Ответ на вторую задачу">2</abbr></th>
                      <th><abbr title="Ответ на третью задачу">3</abbr></th>
                      <th><abbr title="Количество баллов">Баллы</abbr></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = "SELECT * FROM `students`";
                        $result = mysqli_query($connection, $sql);

                        while (($record = mysqli_fetch_assoc($result)))
                        {
                            echo '<tr> <th>' . $record['id'] . '</th>';
                            echo '<td>' . $record['username'] . '</td>';
                            echo '<td>' . $record['answer1'] . '</td>';
                            echo '<td>' . $record['answer2'] . '</td>';
                            echo '<td>' . $record['answer3'] . '</td>';
                            echo '<td>' . $record['score'] . '</td> </tr>';
                        } //Вывод записей, пока есть что выводить
                        mysqli_close($connection);
                    ?>
                    </tbody>
                </table>
                            </div>
                        </div>
                    </div>
                    <div><?php include('footer.php'); ?></div>
                </body>
                </html>
