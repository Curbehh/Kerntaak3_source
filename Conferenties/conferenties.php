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
            
                Conferenties Overzicht
            
            </h3>
        
        </div>
        
        <div id = 'Conferentie_reserveren'>
        
            <a href = 'conferenties_reserveren.php'> Conferentie ticket reserveren </a>
            
            <br>
            
            <a href = 'conferentie_reservering_annuleren.php'> Reservering annuleren </a>
        
        </div>
        
        <div id = 'Conferentie_overzicht'>
        
            <script>
                
                $(function(){
                    
                    $('#conferentiedropdown').change(function(){
                        
                        var dag = $(this).children(":selected").attr("value");
            
                        $.ajax({

                        type: 'POST',
                        url: '../conferentieoverzicht.php',
                        data: {

                            'dag': dag

                        },
                        
                        success: function(response){

                            document.getElementById('Conferentie_overzicht_info').innerHTML = response;
                    
                        }
                        
                        });
                        
                    });
                    
                });
            
            </script>
            
            <br>
            
        <div id = 'conferentiedropdowndiv'>
        
            <select id = 'conferentiedropdown'>

                <option name = '' id = '' value = ''>



                </option>

                <option name = 'Vrijdag' id = 'Vrijdag' value = 'Vrijdag'>

                    Vrijdag

                </option>

                <option name = 'Zaterdag' id = 'Zaterdag' value = 'Zaterdag'>

                    Zaterdag

                </option>

                <option name = 'Zondag' id = 'Zondag' value = 'Zondag'>

                    Zondag

                </option>

            </select>   
            
        </div>
            
        <br>
        
        <div id = 'Conferentie_overzicht_table' >
            
            <table border = '1px solid black' align = 'center' style="text-align: center;"> 
                
                <tr>
                
                    <td width = '200'>
                    
                        <b> Spreker </b>
                    
                    </td>
                    
                    <td width = '200'>
                    
                        <b> Onderwerp </b>
                    
                    </td>
                    
                    <td width = '200'>
                    
                        <b> Omschrijving </b>
                    
                    </td>
                    
                    <td width = '200'>
                    
                        <b> Tags </b>
                    
                    </td>
 
                    <td width = '200'>
                    
                        <b> Zaal </b>
                    
                    </td>
                    
                    <td width = '200'>
                    
                        <b> Tijdstip </b>
                    
                    </td>
                
                </tr>
                
            </table>
            
            <div id = 'Conferentie_overzicht_info'>
                    
                    
                
            </div>
    
        </div>
            
        </div>
        
        <div id = 'Contact'>
        
            Contact | Email | Adres | Telefoon nummer
        
        </div>
        
        <div id = 'Hor_line'>
        
            
        
        </div>
    
    </body>

</html>