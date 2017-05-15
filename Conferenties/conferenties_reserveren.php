<html>



    <head>

    

        <title>

        

            Conferentie tickets reserveren

        

        </title>

        

        <link rel = 'stylesheet' type = 'text/css' href = '../Css/style.css' />

        

        <?php require_once $_SERVER['DOCUMENT_ROOT'].'/Kerntaak3_source-master/phpmailer-master/phpmailerautoload.php'; ?>

        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        

        <script>



        $(function(){

            

            $('#addTicketVrijdag').click(function(){



                var newTicket = '<table align = "center"> <tr> <td> Conferentie ticket: <b> <input type = "text" name = "conferentieticket" value = "Vrijdag" readonly /> <b> </td> <td> Maaltijd Vrijdag: <select name = "maaltijden[]"> <option value = "Lunch" > Lunch </option> <option value = "Diner"> Diner </option> <option value = "Lunch en Diner"> Lunch en Diner </option> </select> </td><td> <button class = "delete" type = "button" > Verwijder Ticket </button> </td> </tr> </table>';



                $('#newTicket').append(newTicket); 



            });

            

            $('#addTicketZaterdag').click(function(){



                var newTicket = '<table align = "center"> <tr> <td> Conferentie ticket: <b> <input type = "text" name = "conferentieticket" value = "Zaterdag" readonly /> <b> </td> <td> Maaltijd Zaterdag: <select name = "maaltijden[]"> <option value = "Lunch" > Lunch </option> <option value = "Diner"> Diner </option> <option value = "Lunch en Diner"> Lunch en Diner </option> </select> </td><td> <button class = "delete" type = "button" > Verwijder Ticket </button> </td> </tr> </table>';



                $('#newTicket').append(newTicket); 



            });

            

            $('#addTicketZondag').click(function(){



                var newTicket = '<table align = "center"> <tr> <td> Conferentie ticket: <b> <input type = "text" name = "conferentieticket" value = "Zondag" readonly /> <b> </td> <td> Maaltijd Zondag: <select name = "maaltijden[]"> <option value = "Lunch" > Lunch </option> <option value = "Diner"> Diner </option> <option value = "Lunch en Diner"> Lunch en Diner </option> </select> </td><td> <button class = "delete" type = "button" > Verwijder Ticket </button> </td> </tr> </table>';



                $('#newTicket').append(newTicket); 



            });

            

            $('#addTicketWeekend').click(function(){



                var newTicket = '<table align = "center"> <tr> <td> Conferentie ticket: <b> <input type = "text" name = "conferentieticket" value = "Weekend" readonly /> <b> </td> <td> Maaltijd Zaterdag: <select name = "maaltijden[]"> <option value = "Lunch" > Lunch </option> <option value = "Diner"> Diner </option> <option value = "Lunch en Diner"> Lunch en Diner </option> </select> </td><td> Maaltijd Zondag: <select name = "maaltijden[]"> <option value = "Lunch" > Lunch </option> <option value = "Diner"> Diner </option> <option value = "Lunch en Diner"> Lunch en Diner </option> </select> </td> <td> <button class = "delete" type = "button" > Verwijder Ticket </button> </td> </tr> </table>';



                $('#newTicket').append(newTicket); 



            });

            

            $('#addTicketPassePartout').click(function(){



                var newTicket = '<table align = "center"> <tr> <td> Conferentie ticket: <b> <input type = "text" name = "conferentieticket" value = "Passe-partout" readonly /> <b> </td> <td> Maaltijd Vrijdag: <select name = "maaltijden[]"> <option value = "Lunch" > Lunch </option> <option value = "Diner"> Diner </option> <option value = "Lunch en Diner"> Lunch en Diner </option> </select> </td><td> Maaltijd Zaterdag: <select name = "maaltijden[]"> <option value = "Lunch" > Lunch </option> <option value = "Diner"> Diner </option> <option value = "Lunch en Diner"> Lunch en Diner </option> </select> </td><td> Maaltijd Zondag: <select name = "maaltijden[]"> <option value = "Lunch" > Lunch </option> <option value = "Diner"> Diner </option> <option value = "Lunch en Diner"> Lunch en Diner </option> </select> </td><td> <button class = "delete" type = "button" > Verwijder Ticket </button> </td> </tr> </table>';



                $('#newTicket').append(newTicket); 



            });



            $("#newTicket").delegate(".delete", "click", function(){



                $(this).parent().parent().remove();



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

            

                Conferentie tickets reserveren

            

            </h3>

        

        </div>

        

        <div id = 'conferentie_reserveren_prijzen'>

        

            <table align = 'center' border="1px solid black">

            

                <tr>

                

                    <td>

                    

                        <b> Prijzen: </b>

                    

                    </td>

                

                </tr>

                

                <tr>

                

                    <td>

                    

                        Vrijdag: 45,-

                    

                    </td>

                    

                </tr>

                

                <tr>

                    

                    <td>

                    

                        Zaterdag: 60,-

                    

                    </td>

                    

                </tr>

                

                <tr>

                    

                    <td>

                    

                        Zondag: 30,-

                    

                    </td>

                    

                </tr>

                

                <tr>

                    

                    <td>

                    

                        Passe-partout: 100,-

                    

                    </td>

                    

                </tr>

                

                <tr>

                    

                    <td>

                    

                        Zaterdag en Zondag: 80,-

                    

                    </td>

                

                </tr>

                

                <tr>

                

                    <td>

                    

                        Lunch: 20,-

                    

                    </td>

                

                </tr>

                

                <tr>

                

                    <td>

                    

                        Diner: 30,-

                    

                    </td>

                

                </tr>

            

            </table>

            

            <br><br>

            

        </div>

        

        <div id = 'conferentie_reserveren'>

            

            Add Ticket:

            

            <br><br>

            

            <button id = 'addTicketVrijdag'> Vrijdag </button>

            <button id = 'addTicketZaterdag'> Zaterdag </button>

            <button id = 'addTicketZondag'> Zondag </button>

            <button id = 'addTicketWeekend'> Weekend </button>

            <button id = 'addTicketPassePartout'> Passe-partout </button>

            

            <br><br>

            

            <form method = 'POST' action = '<?php echo $_SERVER['PHP_SELF']?>' name = 'form' class = 'form'>

                

                <div id = 'newTicket'>







                </div>

            

                <br>

                

                Naam:

                

                <input type = 'text' name = 'naam' />

                

                <br> <br>



                E-mailadres: 



                <input type = 'text' name = 'email' maxlength = '33'/> 



                <br> <br>

                

                Betaalmethode:

                

                <select name = 'betaalmethode'>

                

                    <option value = 'PayPal'>

                    

                        Paypal

                    

                    </option>

                    

                    <option value = 'Creditcard'>

                    

                        Credit Card

                    

                    </option>

                    

                    <option value = 'IDeal'>

                    

                        IDeal

                    

                    </option>

                

                </select>



                <br> <br>

                

                <input type = 'submit' value = 'Bevestigen' name = 'bevestigen' />

                

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

    

                if (isset($_POST['bevestigen'])){ 

                    

                    include '../reserveren2checkempty.php';

                    

                    $sql = "INSERT INTO klant(naam, email)

                    VALUES ('$naam', '$email')";

                    

                    mysqli_query($con, $sql);



                    $sql = "INSERT INTO reservering2(ticketmaaltijd, naam, email, betaalmethode)

                    VALUES ('$ticketmaaltijd', '$naam', '$email', '$betaalmethode')";



                    if (!mysqli_query($con, $sql)) {

                        

                        echo "Error: " . $sql . "<br>" . mysqli_error($con);

                        

                    } else {

                        

                        $sql = "SELECT id FROM reservering2 ORDER BY id DESC LIMIT 1;";

                        

                        $result = mysqli_query($con, $sql);

                        

                        if (mysqli_num_rows($result) > 0){



                            while ($row = mysqli_fetch_assoc($result)){



                                $id = $row['id'];



                            }



                        }



                       /**$mail = new PHPMailer();

                        

                        $mail->isSMTP();                                                    // Set mailer to use SMTP

                        $mail->Host = 'mailtrap.io';                                        // Specify main and backup SMTP servers

                        $mail->SMTPAuth = true;                                             // Enable SMTP authentication

                        $mail->Username = '566840fe7e19a2';                                 // SMTP username

                        $mail->Password = '1d7d5ee345e75f';                                 // SMTP password

                        $mail->SMTPSecure = 'tls';                                          // Enable TLS encryption, `ssl` also accepted

                        $mail->Port = 25;                                                   // TCP port to connect to



                        $mail->setFrom('Admin@test.nl', 'Admin');

                        $mail->addAddress('customer@test.nl');                              // Add a recipient



                        include 'conferentie_mail_attachments.php';

                            

                        $mail->isHTML(true);                                                // Set email format to HTML



                        $mail->Subject = 'Reservation complete';

                        $mail->Body    = "Thank you for your succesfull purchase of: <br><br>

                        

                        Ticketid: $id <br>

                        Conferenceday: $ticket <br>

                        Meals: $maaltijd <br><br>

                        

                        Payment method: $betaalmethode";



                        if(!$mail->send()) {

                            

                            echo 'Message could not be sent.';

                            echo 'Mailer Error: ' . $mail->ErrorInfo;

                            

                        } else {

                            

                            //echo 'Message has been sent';

                            

                        }**/

                        

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