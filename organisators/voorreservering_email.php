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
            
                Voorreservering email
            
            </h3>
        
        </div>
        
        <div id = 'Info'>
            
            <form method = 'POST' action = '<?php echo $_SERVER['PHP_SELF']?>' name = 'form' class = 'form'>
        
                <b> 
                    
                    Email: 
                
                </b>

                <br> <br>

                <textarea name = 'voorreserveringmail' id = 'voorreserveringmail' rows = '10' cols = '25'>



                </textarea>
                
                <br> <br>
                
                <input type = 'submit' name = 'voorreserveringmailsturen' id = 'voorreserveringmailsturen' value = 'Mail sturen' />
                
            </form>
        
        </div>
        
        <?php
    
            if (isset($_POST['voorreserveringmailsturen'])){
                
                $voorreserveringemail = $_POST['voorreserveringmail'];
    
                $msg = $voorreserveringemail;

                mail("test@test.nl", "Pre-reservations now available", $msg);
                
                
            }
    
        ?>
        
        <div id = 'Contact'>
        
            Contact | Email | Adres | Telefoon nummer
        
        </div>
        
        <div id = 'Hor_line'>
        
            
        
        </div>
    
    </body>

</html>