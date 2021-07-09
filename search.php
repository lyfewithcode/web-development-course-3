<?php
    $name = $_GET['name'];
    $name1 = $name.'%';

    $connect = mysqli_connect('localhost', 'root', '', 'ajax');

    $query = "SELECT * FROM customers WHERE name LIKE '$name1'";
    $query_run = mysqli_query($connect, $query);    // mysqli_query() expects at least 2 parameters

    if(mysqli_num_rows($query_run) > 0) {
        while($row = mysqli_fetch_assoc($query_run)) {
            echo 'name: '.$row['name'].' email: '.$row['email'].'<br>';
        }
    }
?>