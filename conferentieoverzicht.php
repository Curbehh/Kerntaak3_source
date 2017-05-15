<?php

    $servername = "mysql.hostinger.nl";
    $username = "u568086394_kern3";
    $password = "Geheim01";
    $dbname = "u568086394_kern3";

    $con = new mysqli($servername, $username, $password, $dbname);

    if ($con->connect_error) {
                    
        die("Connection failed: " . $con->connect_error);
                    
    }

    $dag = $_POST['dag'];
            
    $sql = "SELECT zaal, tijdstip, tags, spreker, onderwerp, omschrijving FROM slots WHERE dag = '$dag' AND beschikbaarheid = 'bezet'";

    $result = mysqli_query($con, $sql);
            
    if (mysqli_num_rows($result) > 0){
                    
        while ($row = mysqli_fetch_assoc($result)){
                        
            echo '<table border = "1px solid black" align = "center" style="text-align: center;"> <td width = "200">' . $row['spreker']. '</td> <td width = "200">' . 
                $row['onderwerp'] . '</td> <td width = "200">' . $row['omschrijving'] . '</td> <td width = "200">' . $row['tags']. '</td> <td width = "200">' . $row['zaal'] . 
                '</td> <td width = "200">' . $row['tijdstip'] . '</td> </tr> </table>';
            
        }
                    
    }

?>