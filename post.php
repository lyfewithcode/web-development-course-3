<?php
    $name = $_POST['name'];
    $email = $name.'@gmail.com';
    // $name1 = $name.'%';

    $connect = mysqli_connect('localhost', 'root', '', 'ajax');

    $query = "INSERT INTO customers VALUES('$name','$email')";
    $query_run = mysqli_query($connect, $query);    // mysqli_query() expects at least 2 parameters

    if($query_run) {
        echo "Your information got inserted in our database with Name : ".$name." Email : ".$email;
    } else {
        echo "Oops... Some issue is there";
    }
?>