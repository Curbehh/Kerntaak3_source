<?php

    if ($_POST['conferentieticket'] != ''){
        
        $ticket = $_POST['conferentieticket'];
        
    } else {
        
        $ticket = ' ';
        
    }

    if ($_POST['maaltijden'] != ''){
        
        $maaltijd = implode(', ', $_POST['maaltijden']);
        
    } else {
        
        $maaltijd = ' ';
        
    }

    if (($_POST['conferentieticket'] != '') && ($_POST['maaltijden'] != '')){
        
        $ticketmaaltijd = $ticket . ' | ' . $maaltijd;
        
    } else {
        
        $ticketmaaltijd = '';
        
    }

    if ($_POST['email'] != ''){
        
        $email = $_POST['email'];
        
    } else {
        
        $email = ' ';
        
    }

    if ($_POST['betaalmethode'] != ''){
    
        $betaalmethode = $_POST['betaalmethode'];
    
    } else {
    
        $betaalmethode = '';
    
    }

?>