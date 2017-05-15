<html>

    <head>
    
        <title>
        
            Slot tags toevoegen
        
        </title>
        
        <link rel = 'stylesheet' type = 'text/css' href = '../Css/style.css' />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <script>
        
            $(function(){
                
                $('#tagstoevoegen').click(function(){
                        
                    var id = $('#kiesslotaanvraag option:selected').attr('id');
                    
                    var tags = $('#tags option:selected').val();
            
                    $.ajax({

                        type: 'POST',
                        url: 'slot_set_tags.php',
                        data: {

                            'id': id,
                            'tags': tags

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
            
                Slot tags toevoegen
            
            </h3>
        
        </div>
        
        <div id = 'slot_tags_toevoegen'>
            
            <form method = 'POST' action = '<?php echo $_SERVER['PHP_SELF']?>'>
        
            Slot: 
            
            <br>
            
                <select name = 'kiesslotaanvraag' id = 'kiesslotaanvraag'>
                
            <?php

                $servername = "mysql.hostinger.nl";
                $username = "u568086394_kern3";
                $password = "Geheim01";
                $dbname = "u568086394_kern3";

                $con = new mysqli($servername, $username, $password, $dbname);

                if ($con->connect_error) {
                    
                    die("Connection failed: " . $con->connect_error);
                    
                }
            
                $sql = "SELECT id, dag, zaal, tijdstip FROM slots WHERE beschikbaarheid = 'bezet'";
            
                $result = mysqli_query($con, $sql);
            
                if (mysqli_num_rows($result) > 0){
                    
                    while ($row = mysqli_fetch_assoc($result)){
                        
                        $dag = $row['dag'];
                        $zaal = $row['zaal'];
                        $tijdstip = $row['tijdstip'];
                        $id = $row['id'];
                        
                        echo '<option class = "slotaanvraaginfodropdown" id = "' . $id .'"> ' . $dag . '<br>' . ', ' . $zaal
                            . ', ' . $tijdstip . '<br>' . '</option>';
                        
                    }
                    
                }

            ?>
                
            </select>
            
            <br> <br>
            
            Tags: 
            
            <br>
                
            <select name = 'tags' id = 'tags'>
            
                <?php

                $sql = 'SELECT tag FROM tags';

                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result) > 0){

                        while ($row = mysqli_fetch_assoc($result)){

                            $tags = $row['tag'];

                            echo "<option name = 'tags' value = " . $tags . "> " . $tags . " </option>";

                        }

                    }

                ?>
                
            </select>
            
            <br><br>
            
            <input type = 'button' name = 'tagstoevoegen' id = 'tagstoevoegen' value = 'Tags toevoegen' />
                
            </form>
        
        </div>
    
        <div id = 'Contact'>
        
            Contact | Email | Adres | Telefoon nummer
        
        </div>
        
        <div id = 'Hor_line'>
        
            
        
        </div>
    
    </body>

</html>