<?php
        
    if (isset($_POST['tagstoevoegen'])){
                    
        $tags = implode(', ', $_POST['tags']);

        //echo $tags;
        
        $dag = $_POST['dag'];
        $zaal = $_POST['zaal'];
        $tijdstip = $_POST['tijdstip'];

        $sql = "UPDATE slots SET tags = '$tags' WHERE dag = '$dag' AND zaal = '$zaal' AND tijdstip = '$tijdstip'";

        if (!mysqli_query($con, $sql)){

            echo 'foutmelding';

        }

    }
        
?>