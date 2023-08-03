<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, 'phpcrud');

    if(isset($_POST['insertdata'])){
        $faname = $_POST['fname'];
        $laname = $_POST['lname'];
        $email = $_POST['email'];

        $query = "INSERT INTO student(fname, lname, email) VALUES($faname, $laname, $email)";
        $query_run = mysqli_query($connection, $query);

        if($query_run){
            echo '<script> alert("DATA saved") </script>';
            header('Location: index.php');
        }
        else{
            echo '<script> alert("data not saved") </script>';
        }

    }
?>