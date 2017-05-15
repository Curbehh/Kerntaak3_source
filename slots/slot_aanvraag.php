<html>

    <head>
    
        <title>
        
            Slot aanvraag
        
        </title>
        
        <link rel = 'stylesheet' type = 'text/css' href = '../Css/style.css' />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <script>
        
            $(function(){
                
                $('#aanvraagdoen').click(function(){
                        
                    var id = $('#slot option:selected').attr('id');
            
                    $.ajax({

                        type: 'POST',
                        url: 'slot_set_open.php',
                        data: {

                            'id': id

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
            
                Slots aanvragen
            
            </h3>
        
        </div>
        
        <div id = 'aanmelden_slot'>
            
            <form method = 'POST' action = '<?php echo $_SERVER['PHP_SELF']?>'>
                
                <div id = 'gewensteslot'>
        
                    Slots Open: 

                    <select name = 'slot' id = 'slot'> 

                        <?php
            
                            $servername = "mysql.hostinger.nl";
                            $username = "u568086394_kern3";
                            $password = "Geheim01";
                            $dbname = "u568086394_kern3";

                            $con = new mysqli($servername, $username, $password, $dbname);

                            if ($con->connect_error) {

                                die("Connection failed: " . $con->connect_error);

                            }

                            $sql = "SELECT id, dag, zaal, tijdstip FROM slots WHERE beschikbaarheid = 'open'";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result) > 0){

                                while ($row = mysqli_fetch_assoc($result)){

                                    echo '<option class = "openslots" id = " ' . $row['id'] . '"> ' . $row['dag'] . ', ' . $row ['zaal'] . ', ' . $row['tijdstip'] . '</option>';

                                }

                            }


                        ?>

                    </select>
                    
                </div>
                
                <br>
                
                <div id = 'voorkeursslot'>
                
                    Slots Onder Vorbehoud:

                    <select name = 'voorkeurslot'> 
                        
                        <option class = 'ondervoorbehoudslots' value = ''>
                        
                        
                        
                        </option>

                        <?php
            
                            $servername = "mysql.hostinger.nl";
                            $username = "u568086394_kern3";
                            $password = "Geheim01";
                            $dbname = "u568086394_kern3";

                            $con = new mysqli($servername, $username, $password, $dbname);

                            if ($con->connect_error) {

                                die("Connection failed: " . $con->connect_error);

                            }

                            $sql = "SELECT id, dag, zaal, tijdstip FROM slots WHERE beschikbaarheid = 'onder voorbehoud'";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result) > 0){

                                while ($row = mysqli_fetch_assoc($result)){

                                    echo '<option class = "ondervoorbehoudslots"> ' . $row['dag'] . ', ' . $row ['zaal'] . ', ' . $row['tijdstip'] . '</option>';

                                }

                            }


                        ?>

                    </select>
                    
                </div>
                
                <br>
                
                <div id = 'naam'>
                
                    Naam:
                
                    <input type = 'text' name = 'naam'>
                                             
                </div>
                
                <br>
                
                <div id = 'email'>
                
                    Email:
                    
                    <input type = 'email' name = 'email'>
                
                </div>
                
                <br>
                
                <div id = 'onderwerp'>
                
                    Onderwerp: 
                
                    <input type = 'text' name = 'onderwerp'>
                    
                </div>
                
                <br>
                
                <div id = 'omschrijving'>
                
                    Omschrijving: 
                
                    <input type = 'text' name = 'omschrijving'> 
                    
                </div>
                
                <br>
                
                <div id = 'wensen'> 
                    
                    Wensen: 
                
                <br>
                
                <input type = 'checkbox' name = 'wensen[]' value = '' style = 'display:none;' checked>
                <input type = 'checkbox' name = 'wensen[]' value = 'beamer' > Beamer <br> 
                <input type = 'checkbox' name = 'wensen[]' value = 'speakers' > Speakers <br>
                <input type = 'checkbox' name = 'wensen[]' value = 'laptop' > Laptop <br>
                    
                </div>
                
                <br> <br>

                <input type = 'submit' value = 'Aanvraag doen' name = 'aanvraagdoen' id = 'aanvraagdoen' />
                
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
                    
                    include '../slotaanvraagcheckempty.php';

                    $sql = "INSERT INTO slotaanvraag(slot, voorkeurslot, naam, email, onderwerp, omschrijving, wensen)
                    VALUES ('$slot', '$voorkeurslot', '$naam', '$email', '$onderwerp', '$omschrijving', '$wensen')";

                    if (!mysqli_query($con, $sql)) {
                        
                        echo "Error: " . $sql . "<br>" . mysqli_error($con);
                        
                    }

                }  

            ?>
            
        </div>
        
        <div id = 'Contact'>
        
            Contact | Email | Adres | Telefoon nummer
        
        </div>
        
        <div id = 'Hor_line'>
        
            
        
        </div>
    
    </body>

</html>