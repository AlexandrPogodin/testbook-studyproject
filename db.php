<?php
$connection = mysqli_connect('127.0.0.1' , 'root' , '' , 'students_db');
if($connection == false)
{
    echo '<span class="has-text-danger is-size-4"> Не удалось подключиться к БД! </span> ' . mysqli_connect_error();
    exit();
} else
    {
        echo '<span class="has-text-success"> <i class="far fa-check-circle"></i> </span>' ;
    }
?>
