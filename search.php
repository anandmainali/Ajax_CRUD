<?php

    require('db.php');

    // if($connection)
    // {
    //     echo "Connection is Successfull.";
    // }

    $search = $_POST['search'];
    
    if(!empty($search))
    {
        $query = "SELECT * FROM names WHERE name LIKE '%$search%'";
        $mysqli_conn = mysqli_query($connection,$query);
        

            if(!$mysqli_conn)
            {
                die('Query Failed. '.mysqli_error($connection));
            }

            ?>

            
            <ol>
            <?php

            while($rows = mysqli_fetch_array($mysqli_conn))
            {
                $name = $rows['name'];
                echo "<li>{$name}</li>";
            }
            ?>

            </ol>

            <?php
            
        
    }