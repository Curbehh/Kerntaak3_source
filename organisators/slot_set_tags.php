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
    $tags = $_POST['tags'];

    $sql = "SELECT tags FROM slots WHERE id = '$id'";

    $result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($result)){
        
        if ($row['tags'] == ''){
            
            $sql = "UPDATE slots SET tags = '$tags' WHERE id = '$id'";
            
            mysqli_query($con, $sql);
            
        } else {
            
            $oldtag = $row['tags'];
            
            $newtag = $oldtag . ', ' . $tags;
            
            $sql = "UPDATE slots SET tags = '$newtag' WHERE id = '$id'";
            
            mysqli_query($con, $sql);
            
        }
        
    }

?>