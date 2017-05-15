<html>

    <head>
    
        <title>
        
            Conferenties
        
        </title>
        
        <link rel = 'stylesheet' type = 'text/css' href = '../Css/style.css' />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
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
            
                Conferentie Reservering Annuleren
            
            </h3>
        
        </div>
        
        <div id = 'Reserveringannuleren'>
            
            <form method = 'POST' action = '<?php echo $_SERVER['PHP_SELF']?>' name = 'form' class = 'form'>
            
                <b> Reserveringsid: </b>

                <input type = 'text' name = 'reserveringsnummer' id = 'reserveringsnummer' />

                <br><br>

                <input type = 'submit' name = 'annuleren' id = 'annuleren' value = 'Annuleren'/>
                
            </form>
        
        </div>
        
        <?php
        
            $servername = "mysql.hostinger.nl";
            $username = "u568086394_kern3";
            $password = "Geheim01";
            $dbname = "u568086394_kern3";

            $con = new mysqli($servername, $username, $password, $dbname);

            if ($con->connect_error) {
                
                die("Connection failed: " . $con->connect_error);
                
            }
                  
            if (isset($_POST['annuleren'])){
                
                $id = $_POST['reserveringsnummer'];
                
                $sql = "DELETE from reservering2 WHERE id = '$id'";
                
                mysqli_query($con, $sql);
                
            }
    
        ?>
        
        <div id = 'Contact'>
        
            Contact | Email | Adres | Telefoon nummer
        
        </div>
        
        <div id = 'Hor_line'>
        
            
        
        </div>
    
    </body>

</html>