<?php

    $servername = "mysql.hostinger.nl";
    $username = "u568086394_kern3";
    $password = "Geheim01";
    $dbname = "u568086394_kern3";

    $con = new mysqli($servername, $username, $password, $dbname);

    if ($con->connect_error) {
        
        die("Connection failed: " . $con->connect_error);
        
    }

    if ($_POST['id'] == ''){
        
        $id = '';
        
    } else {
        
        $id = $_POST['id'];
        
    }

    /**$sql = "SELECT slottijd FROM voorreservering WHERE id = '$id'";

    $result = mysqli_query($con, $sql);
    
    if (mysqli_num_rows($result) > 0){

        while ($row = mysqli_fetch_assoc($result)){
            
            $slottijd = $row['slottijd'];
            
        }
        
    } else {
        
        $slottijd = '';
        
    }**/

    $sql = "SELECT ticketmaaltijd FROM reservering2 WHERE id = '$id'";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0){

        while ($row = mysqli_fetch_assoc($result)){
            
            $ticketmaaltijd = $row['ticketmaaltijd'];
            
            $str = explode(" | ",$ticketmaaltijd);
            
            $day = $str[0];
            
            $sql = "SELECT * FROM slots WHERE dag = '$day' AND beschikbaarheid = 'bezet'";
            $results = mysqli_query($con, $sql);
            
            if (mysqli_num_rows($results) > 0){
                
                while ($row = mysqli_fetch_assoc($results)){

                    $dag = $row['dag'];
                    $zaal = $row['zaal'];
                    $tijdstip = $row['tijdstip'];
                    $tags = $row['tags'];
                    $spreker = $row['spreker'];
                    $onderwerp = $row['onderwerp'];
                    $maxbezoekers = $row['maxbezoekers'];
                    
                    $value = "$dag" . ", " . "$zaal" . ", ". "$tijdstip";
                    
                    if ($maxbezoekers != 0){
                            
                        $disabled = '';
                            
                    }
                    
                    if ($maxbezoekers == 0){
                            
                        $disabled = 'disabled';
                            
                    }
                    
                    $sql = "SELECT slottijd FROM voorreservering WHERE id = '$id'";

                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result) > 0){

                        while ($row = mysqli_fetch_assoc($result)){

                            $slottijd = $row['slottijd'];
                            
                            if ($tijdstip == $slottijd){
                        
                                $disabled = 'disabled';
                        
                            }

                        }

                    } else {

                        $slottijd = '';

                    }
                    
                    echo "<option name = 'beschikbareSlots' id = 'beschikbareSlots' value = '$value' $disabled>" . $dag . ", " . $zaal . ", " . 
                        $tijdstip . ", " . $tags . ", " . $spreker . ", " . $onderwerp . ", " . "beschikbare plaatsen: " . $maxbezoekers . "</option>";
                    
                }
                    
            }
                
        }

    }

?>