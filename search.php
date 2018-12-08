<?php

    $connection = mysqli_connect('localhost','root','','ajax');

    // if($connection)
    // {
    //     echo "Connection is Successfull.";
    // }

    $search = $_POST['search'];
    echo $search;