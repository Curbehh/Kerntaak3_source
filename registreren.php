<html>

    <head>
    
        <title>
        
            Registreren
        
        </title>
        
        <link rel = 'stylesheet' type = 'text/css' href = 'Css/style.css' />
    
    </head>
    
    <body>
        
        <div id = 'Aanmelden'>
        
            <a href = 'aanmelden.php'> Aanmelden </a>
            <a href = 'registreren.php'> Registreren </a>
        
        </div>
    
        <div id = 'Titel'>
            
            <h1>
        
                Conferentiesite
        
            </h1>
            
        </div>
        
        <div id = 'Banner'>
        
            <img src = 'img/convention.jpg' />
        
        </div>
        
        <br>
        
        <div id = 'Pages'>
            
            <a href = 'Conferenties/conferenties.php' > Conferenties </a>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           
            <a href = 'Sprekers/sprekers.php' > Sprekers </a>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href = 'organisators/organisatorpagina.html' > Organisators </a>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href = slots/slots.php > Slots </a>
        
        </div>
        
        <div id = 'Info'>
        
            <h3>
            
                Registreren
            
            </h3>
        
        </div>
        
        <div id = 'registreren_formulier'>
            
            <form method = 'POST' action = '<?php echo $_SERVER['PHP_SELF']; ?>'>
        
            Naam: <input type = 'text' name = 'naam' id = 'naam'/> Tussenvoegsel: <input type = 'text' name = 'tussenvoegsel' />  Achternaam: <input type = 'text' name = 'achternaam' /> <br> <br>
            Adres: <input type = 'text' name = 'adres'/> Huisnummer: <input type = 'text' name = 'huisnummer'/>  Woonplaats: <input type = 'text' name = 'woonplaats'/> <br> <br>
            Email: <input type = 'text' name = 'email' /> <br> <br>
            Gebruikersnaam: <input type = 'text' name = 'gebruikersnaam' /> <br> <br>
            Wachtwoord: <input type = 'password' name = 'wachtwoord' /> <br> <br>
            
            <input type = 'submit' value = 'Registreren' name = 'registreren' id = 'registreren' />
                
            </form>
            
            <?php
    
                $servername = "mysql.hostinger.nl";
                $username = "u568086394_kern3";
                $password = "Geheim01";
                $dbname = "u568086394_kern3";

                $con = new mysqli($servername, $username, $password, $dbname);

                if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
                } 

                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    
                    include 'registrerencheckempty.php';

                    $sql = "INSERT INTO bezoeker(naam, tussenvoegsel, achternaam, adres, huisnummer, woonplaats, email, gebruikersnaam, wachtwoord)
                    VALUES ('$naam', '$tussenvoegsel', '$achternaam', '$adres', '$huisnummer', '$woonplaats', '$email', '$gebruikersnaam', '$wachtwoord')";

                    if (!mysqli_query($con, $sql)) {
                        
                        echo "Error: " . $sql . "<br>" . mysqli_error($con);
                        
                    }

                }   


            ?>
        
        </div>
        
        <div id = 'Contact'>
        
            Contact | Email | Adres | Telefoon nummer
        
        </div>
    
    </body>

</html>