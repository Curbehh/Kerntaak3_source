<?php

    $servername = "mysql.hostinger.nl";
    $username = "u568086394_kern3";
    $password = "Geheim01";
    $dbname = "u568086394_kern3";;

    $con = new mysqli($servername, $username, $password, $dbname);

    if ($con->connect_error) {
                    
        die("Connection failed: " . $con->connect_error);
                    
    }

    $id = $_POST['id'];
    
    $sql = 'SELECT naam, onderwerp, omschrijving, wensen, slot, voorkeurslot FROM slotaanvraag WHERE id = ' . $id . '';
        
    $result = mysqli_query($con, $sql);
            
    if (mysqli_num_rows($result) > 0){
                    
        while ($row = mysqli_fetch_assoc($result)){
                        
            echo 'Spreker: ' . $row['naam'] . '<br>' . 'Onderwerp: ' . $row['onderwerp'] . '<br>' . 'Omschrijving: ' . $row['omschrijving'] . '<br>' . 'Wensen: ' .
                $row['wensen'] . '<br>' . 'Slot: ' . $row['slot'] . '<br>' . 'Voorkeurslot: ' . $row['voorkeurslot'] . '<br>';
                        
        }
                    
    }

?>