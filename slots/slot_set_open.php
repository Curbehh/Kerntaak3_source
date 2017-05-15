<?php

    $servername = "mysql.hostinger.nl";
    $username = "u568086394_kern3";
    $password = "Geheim01";
    $dbname = "u568086394_kern3";

    $con = new mysqli($servername, $username, $password, $dbname);

    if ($con->connect_error) {
                    
        die("Connection failed: " . $con->connect_error);
                    
    }

    $id = $_POST['id'];

    $sql = "UPDATE slots SET beschikbaarheid = 'onder voorbehoud' WHERE id = '$id'";

    $result = mysqli_query($con, $sql);
?>