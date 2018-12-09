<?php
    include('db.php');

    if(isset($_POST['name']))
    {
        $name = $_POST['name'];
        $query = "INSERT INTO names(name) VALUES('$name')";
        $row = mysqli_query($connection,$query);

        if(!$row)
        {
            die('QUERY FAILED');
        }

        header('Location: index.html');
        
    }