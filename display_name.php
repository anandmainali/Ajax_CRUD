<?php

    include("db.php");

    $query = "SELECT * FROM names";
    $mysqli_data = mysqli_query($connection,$query);

    if(!$mysqli_data){
        die("QUERY FAILED.");
    }

    while($row = mysqli_fetch_array($mysqli_data))
    {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "</tr>";
    }