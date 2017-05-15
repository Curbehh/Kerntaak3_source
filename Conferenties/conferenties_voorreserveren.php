<html>

    <head>
    
        <title>
        
            Conferenties
        
        </title>
        
        <link rel = 'stylesheet' type = 'text/css' href = '../Css/style.css' />
        
        <?php
        
            $servername = "mysql.hostinger.nl";
            $username = "u568086394_kern3";
            $password = "Geheim01";
            $dbname = "u568086394_kern3";

            $con = new mysqli($servername, $username, $password, $dbname);

            if ($con->connect_error) {

                die("Connection failed: " . $con->connect_error);

            }
        
        ?>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <script>
        
            $(function(){
                
               $('#reserveringsnummer').on('input',function(e){
                        
                    var id = $('#reserveringsnummer').val();
            
                    $.ajax({

                    type: 'POST',
                    url: 'voorreservering.php',
                    data: {

                        'id': id

                    },
                        
                    success: function(response){

                        document.getElementById('voorreservering_info').innerHTML = response;   
                    
                    }
                        
                    });
                        
                }); 
                
            });
        
        </script>
    
    </head>
    
    <body>
        
        <div id = 'Aanmelden'>
        
            <a href = '../aanmelden.php'> Aanmelden </a>
            <a href = '../registreren.php'> Registreren </a>
        
        </div>
    
        <div id = 'Titel'>
            
            <h1>
        
                Conferentiesite
        
            </h1>
            
        </div>
        
        <div id = 'Banner'>
        
            <img src = '../img/convention.jpg' />
        
        </div>
        
        <br>
        
        <div id = 'Pages'>
            
            <a href = '../Conferenties/conferenties.php' > Conferenties </a>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           
            <a href = '../Sprekers/sprekers.php' > Sprekers </a>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href = '../organisators/organisatorpagina.html' > Organisators </a>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href = ../slots/slots.php > Slots </a>
        
        </div>
        
        <div id = 'Info'>
        
            <h3>
            
                Voorreserveringen plaatsen
            
            </h3>
        
        </div>
        
        <div id = 'Info'>
            
            <form method = 'POST' action = '<?php echo $_SERVER['PHP_SELF']?>' name = 'form' class = 'form'>
            
                <div id = 'reservering'>

                    <b>

                        Reserveringsnummer:

                    </b>

                    <input type = 'number' name = 'reserveringsnummer' id = 'reserveringsnummer' />

                </div>

                <br>

                <b>

                    Slots beschikbaar voor voorreservering:

                </b>

                <br>

                <select name = 'voorreservering_info' id = 'voorreservering_info'>

                    <option name = '' id = '' value = ''>
                    
                        
                    
                    </option>

                </select>

                <br> <br>

                <input type = 'submit' name = 'voorreserveringdoen' id = 'voorreserveringdoen' value = 'Voorreservering doen' />
                
            </form>
        
        </div>
        
        <?php
        
            if (isset($_POST['voorreserveringdoen'])){
                    
                $id = $_POST['reserveringsnummer'];
                    
                $gekozenslot = $_POST['voorreservering_info'];
                
                $slotexplode = explode(', ', $gekozenslot);
                
                $slotdag = $slotexplode[0];
                $slotzaal = $slotexplode[1];
                $slottijd = $slotexplode[2];
                                
                $sql = "SELECT naam, email FROM reservering2 WHERE id = '$id'";
                
                $result = mysqli_query($con, $sql);
                
                if (mysqli_num_rows($result) > 0){

                    while ($row = mysqli_fetch_assoc($result)){
                        
                        $klantnaam = $row['naam'];
                        $klantemail = $row['email'];
                        
                    }
                    
                } else {
                    
                    die();
                    
                }
                
                $sql = "SELECT klantid FROM klant WHERE naam = '$klantnaam'";
                
                $result = mysqli_query($con, $sql);
                
                if (mysqli_num_rows($result) > 0){

                    while ($row = mysqli_fetch_assoc($result)){
                        
                        $klantid = $row['klantid'];
                    
                    }
                    
                }
                
                $sql = "SELECT klantid FROM voorreservering WHERE id = '$id'";
                
                $result = mysqli_query($con, $sql);
                
                if (mysqli_num_rows($result) == 4){

                    die('U heeft momenteel al 4 voorreserveringen gedaan');
                    
                } else {
                
                    $sql = "INSERT INTO voorreservering(id, gekozenslot, slotdag, slotzaal, slottijd, klantid, klantnaam, klantemail)
                    VALUES('$id', '$gekozenslot', '$slotdag', '$slotzaal', '$slottijd', '$klantid', '$klantnaam', '$klantemail')";
                    $result = mysqli_query($con, $sql);
                    
                    $sql = "SELECT maxbezoekers FROM slots WHERE dag = '$slotdag' AND zaal = '$slotzaal' AND tijdstip = '$slottijd'";
                    $result = mysqli_query($con, $sql);
                    
                    if (mysqli_num_rows($result) > 0){

                        while ($row = mysqli_fetch_assoc($result)){

                            $maxbezoekers = $row['maxbezoekers'];
                            
                            $newmaxbezoekers = $maxbezoekers - 1;

                        }

                    }    
                    
                    $sql = "UPDATE slots SET maxbezoekers = '$newmaxbezoekers' WHERE dag = '$slotdag' AND zaal = '$slotzaal' AND tijdstip = '$slottijd'";
                    $result = mysqli_query($con, $sql);
                
                    
                }
                
                
            }
        
        ?>
        
        <div id = 'Contact'>
        
            Contact | Email | Adres | Telefoon nummer
        
        </div>
        
        <div id = 'Hor_line'>
        
            
        
        </div>
    
    </body>

</html>