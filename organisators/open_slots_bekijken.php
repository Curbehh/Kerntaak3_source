<html>

    <head>
    
        <title>
        
            Organisatorpagina
        
        </title>
        
        <link rel = 'stylesheet' type = 'text/css' href = '../Css/style.css' />
    
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
            
                Open slots overzicht
            
            </h3>
        
        </div>
        
        <div id = 'openslots'>
            
            <table border = "1px solid black" align = "center" style="text-align: center;">
                
                <tr> 
                    
                    <td> 
                        
                        <b> Dag </b>
                    
                    </td> 
                    
                    <td> 
                        
                        <b> Zaal </b>
                    
                    </td> 
                    
                    <td> 
                        
                        <b> Tijdstip </b> 
                    
                    </td> 
                
                </tr>
        
                <?php

                    $servername = "mysql.hostinger.nl";
                    $username = "u568086394_kern3";
                    $password = "Geheim01";
                    $dbname = "u568086394_kern3";

                    $con = new mysqli($servername, $username, $password, $dbname);

                    if ($con->connect_error) {

                        die("Connection failed: " . $con->connect_error);

                    };

                    $sql = "SELECT dag, zaal, tijdstip FROM slots WHERE beschikbaarheid = 'open'";

                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result) > 0){

                        while ($row = mysqli_fetch_assoc($result)){

                            echo '<tr> <td>' . $row['dag'] . '</td>' . '<td>' . $row['zaal'] . '</td> ' . '<td>' . $row['tijdstip'] . '</td> </tr>';

                        }

                    }

                ?>
                
            </table>
        
        </div>
        
        <div id = 'Contact'>
        
            Contact | Email | Adres | Telefoon nummer
        
        </div>
        
        <div id = 'Hor_line'>
        
            
        
        </div>
    
    </body>

</html>