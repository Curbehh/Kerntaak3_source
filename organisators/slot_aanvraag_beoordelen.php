<html>

    <head>
    
        <title>
        
            Slot aanvraag beoordelen
        
        </title>
        
        <?php require_once $_SERVER['DOCUMENT_ROOT'].'/Kerntaak3_source-master/phpmailer-master/phpmailerautoload.php'; ?>
        
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
            
                Slot aanvraag beoordelen
            
            </h3>
        
        </div>
        
        <div id = 'Slot_aanvraag_beoordelen'>
            
            <form method = 'POST' action = '<?php echo $_SERVER['PHP_SELF']?>' name = 'form' class = 'form'>
            
            <script>
                
                $(function(){
                    
                    $('#kiesslotaanvraag').change(function(){
                        
                        var id = $('#kiesslotaanvraag option:selected').attr('id');
            
                        $.ajax({

                        type: 'POST',
                        url: 'slot_aanvraag_info.php',
                        data: {

                            'id': id

                        },
                        
                        success: function(response){

                            document.getElementById('Slot_aanvraag_info').innerHTML = response;   
                    
                        }
                        
                        });
                        
                    });
                    
                });
            
            </script>
            
            Slot beoordelen:
            
            <br>
            
            <select name = 'kiesslotaanvraag' id = 'kiesslotaanvraag'>
                
                <option name = '' value = '' id = '0'>
                
                    
                
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
            
                $sql = 'SELECT slot, voorkeurslot, naam, onderwerp, id FROM slotaanvraag';
            
                $result = mysqli_query($con, $sql);
            
                if (mysqli_num_rows($result) > 0){
                    
                    while ($row = mysqli_fetch_assoc($result)){
                        
                        $naam = $row['naam'];
                        $onderwerp = $row['onderwerp'];
                        
                        $slot = $row['slot'];
                        $voorkeurslot = $row['voorkeurslot'];
                        
                        $value = $slot;
                        $value .= ' | ';
                        $value .= $voorkeurslot;
                        
                        echo '<option name = "slotaanvragen" value = "' . $value . '" id = ' . $row['id'] . '>
                        
                            Spreker: ' . $naam . ' | Onderwerp: ' . $onderwerp . '
                        
                        </option>';
                        
                    }
                    
                }

            ?>
                
            </select>
            
            <br><br>
        
            <div id = 'Slot_aanvraag_info'>
            

            
            </div>
            
            <br>
            
            <div id = 'Slot_aanvraag_beredenering'>
                    
                Slot toewijzen :
                    
                <select name = 'slottoewijzen'>
                        
                    <option name = '' value = ''>
                        
                            
                        
                    </option>
                    
                    <option name = 'openslot' value = 'openslot'>
                        
                        Slot
                        
                    </option>
                        
                    <option name = 'ondervoorbehoudslot' value = 'ondervoorbehoudslot'>
                        
                        Voorkeurslot
                            
                    </option>
                    
                </select>
                    
                <br><br>
                
                Beoordeling:

                <select name = 'beoordeling'>

                    <option name = 'accepteren' value = 'Accepteren'>

                        Accepteren

                    </option>

                    <option name = 'berwerpen' value = 'Verwerpen'>

                        Verwerpen

                    </option>

                </select>

                <br><br>

                Beredenering:

                <br>

                <textarea name = 'beredenering' maxlength = '200' rows = '10' cols = '25'></textarea>
                    
                <br><br>

                <input type = 'submit' name = 'beoordelen' value = 'Beoordelen' />
                
                <?php
    
                $servername = "mysql.hostinger.nl";
                $username = "u568086394_kern3";
                $password = "Geheim01";
                $dbname = "u568086394_kern3";

                $con = new mysqli($servername, $username, $password, $dbname);

                if ($con->connect_error) {
                        
                    die("Connection failed: " . $con->connect_error);
                        
                }

                if (isset($_POST['beoordelen'])){ 

                    include '../beoordelencheckempty.php';
                    
                    $slot = explode(" | ", $_POST['kiesslotaanvraag']);
                    
                    if ($slot[0] != ''){ 
                        
                        $openslot = $slot[0];
                        
                    } else {
                        
                        $openslot = '';
                        
                    }
                    
                    if ($slot[1] != ''){
                        
                        $voorkeurslot = $slot[1];
                        
                    } else {
                        
                        $voorkeurslot = null;
                        
                    }
                    
                    $sql = "SELECT id FROM slotaanvraag WHERE slot = '$openslot' AND voorkeurslot = '$voorkeurslot'";
                    
                    $result = mysqli_query($con, $sql);
                    
                    if (mysqli_num_rows($result) > 0){
                    
                        while ($row = mysqli_fetch_assoc($result)){
                            
                            $id = $row['id'];
                            
                        }
                        
                    }
                        
                    $sql = "INSERT INTO slotaanvraagbeoordeling(beoordeeldeaanvraag, beoordeling, beredenering, toegewezenslot)
                    VALUES ('$id', '$beoordeling', '$beredenering', '$toegewezenslot')";
                    
                    if (!mysqli_query($con, $sql)) {

                        echo "Error: " . $sql . "<br>" . mysqli_error($con);

                    } else {
                        
                        /**$mail = new PHPMailer();
                        
                        $mail->isSMTP();                                                    // Set mailer to use SMTP
                        $mail->Host = 'mailtrap.io';                                        // Specify main and backup SMTP servers
                        $mail->SMTPAuth = true;                                             // Enable SMTP authentication
                        $mail->Username = '566840fe7e19a2';                                 // SMTP username
                        $mail->Password = '1d7d5ee345e75f';                                 // SMTP password
                        $mail->SMTPSecure = 'tls';                                          // Enable TLS encryption, `ssl` also accepted
                        $mail->Port = 25;                                                   // TCP port to connect to

                        $mail->setFrom('Organisator@test.nl', 'Organisator');
                        $mail->addAddress('spreker@test.nl');                              // Add a recipient

                        if ($beoordeling == 'Accepteren'){
                            
                            if (!$mail->addAttachment('../conferenties/streepjescodes/ticketpassepartout.pdf')){
                                
                                echo 'fout';
                                
                            } else {
                                
                                //echo 'geen fout';
                                
                            }
                            
                        }
                            
                        $mail->isHTML(true);                                                // Set email format to HTML

                        $mail->Subject = 'Slot aanvraag beoordeling';
                        $mail->Body    = "We hebben besloten uw slot aanvraag te $beoordeling.<br><br>
                        
                        De reden daarvoor was: $beredenering;
                        
                        ";

                        if(!$mail->send()) {
                            echo 'Message could not be sent.';
                            echo 'Mailer Error: ' . $mail->ErrorInfo;
                        } else {
                            //echo 'Message has been sent';
                        }
                                
                        $msg = "
                            
                            We hebben besloten uw slot aanvraag te $beoordeling.
                                
                            De reden daarvoor was: $beredenering.
                            
                        ";

                        mail("test@test.nl", "Uw slot aanvraag is behandeld", $msg);**/
                            
                    }
                    
                    if ($openslot != ''){
                    
                        $getopenslots = explode(", ", $openslot);
                        
                        $openslotdag = $getopenslots[0];
                        $openslotzaal = $getopenslots[1];
                        $openslottijd = $getopenslots[2];
                        
                    }
                    
                    if ($voorkeurslot != ''){
                        
                        $getondervoorbehoudslots = explode(", ", $voorkeurslot);
                        
                        if (!empty($getondervoorbehoudslots)){
                    
                            $ondervoorbehoudslotdag = $getondervoorbehoudslots[0];
                            $ondervoorbehoudslotzaal = $getondervoorbehoudslots[1];
                            $ondervoorbehoudslottijd = $getondervoorbehoudslots[2];
                            
                        } else {
                            
                            $ondervoorbehoudslotdag = '';
                            $ondervoorbehoudslotzaal = '';
                            $ondervoorbehoudslottijd = '';
                            
                        }
                        
                    }
                    
                    if ($beoordeling = 'Accepteren'){
                        
                        $slottoewijzen = $_POST['slottoewijzen'];
                        
                        $sql = "SELECT naam, onderwerp, omschrijving FROM slotaanvraag WHERE id = '$id'";
                            $result = mysqli_query($con, $sql);
                            
                            if (mysqli_num_rows($result) > 0){
                    
                                while ($row = mysqli_fetch_assoc($result)){
                                    
                                    $spreker = $row['naam'];
                                    $onderwerp = $row['onderwerp'];
                                    $omschrijving = $row['omschrijving'];
                                    
                                }
                                   
                            }
                        
                            if ($slottoewijzen == 'openslot'){
                            
                                $sql = "UPDATE slots SET beschikbaarheid = 'bezet' WHERE dag = '$openslotdag' AND zaal = '$openslotzaal' AND tijdstip = '$openslottijd'";
                                $result = mysqli_query($con, $sql);

                                $sql = "UPDATE slots SET spreker = '$spreker', onderwerp = '$onderwerp', omschrijving = '$omschrijving' WHERE dag = '$openslotdag' AND zaal = '$openslotzaal' AND tijdstip = 
                                '$openslottijd'";
                                $result = mysqli_query($con, $sql);

                                $sql = "DELETE from slotaanvraag WHERE slot = '$openslot' AND voorkeurslot = '$voorkeurslot'";
                                $result = mysqli_query($con, $sql);
                                
                                mysqli_close($con);

                            }
                        
                            else {
                                
                                if ($slottoewijzen == 'ondervoorbehoudslot'){
                                
                                    $sql = "UPDATE slots SET beschikbaarheid = 'bezet' WHERE dag = '$ondervoorbehoudslotdag' AND zaal = '$ondervoorbehoudslotzaal' AND 
                                    tijdstip = '$ondervoorbehoudslottijd'";
                                    $result = mysqli_query($con, $sql);

                                    $sql = "UPDATE slots SET spreker = '$spreker', onderwerp = '$onderwerp', omschrijving = '$omschrijving' WHERE dag = 
                                    '$ondervoorbehoudslotdag' AND zaal = '$ondervoorbehoudslotzaal' AND tijdstip = '$ondervoorbehoudslottijd'";
                                    $result = mysqli_query($con, $sql);

                                    $sql = "DELETE from slotaanvraag WHERE slot = '$openslot' AND voorkeurslot = '$voorkeurslot'";
                                    $result = mysqli_query($con, $sql);
                                    
                                    $sql = "DELETE from slotaanvraag WHERE slot = '$voorkeurslot'";
                                    $result = mysqli_query($con, $sql);

                                    mysqli_close($con);
                                    
                                }

                            }
                        
                        } 
                            
                            if ($beoordeling = 'Verwerpen'){
                        
                                $sql = "UPDATE slots SET beschikbaarheid = 'open' WHERE dag = '$openslotdag' AND zaal = '$openslotzaal' AND tijdstip = '$openslottijd'";
                                $result = mysqli_query($con, $sql);

                                $sql = "DELETE from slotaanvraag WHERE slot = '$openslot' AND voorkeurslot = '$voorkeurslot'";
                                $result = mysqli_query($con, $sql);
                                
                            }

                        

                    }

                ?>
                
            </div>
                
        </form>
        
        </div>
        
        <div id = 'Contact'>
        
            Contact | Email | Adres | Telefoon nummer
        
        </div>
        
        <div id = 'Hor_line'>
        
            
        
        </div>
    
    </body>

</html>