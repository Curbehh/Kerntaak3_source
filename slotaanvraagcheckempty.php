<?php

    if ($_POST['slot'] != ''){
        
        $slot = $_POST['slot'];
        
    } else {
        
        $slot = ' ';
    }

    if ($_POST['voorkeurslot'] != ''){
        
        $voorkeurslot = $_POST['voorkeurslot'];
        
    } else {
        
        $voorkeurslot = '';
        
    }

    if ($_POST['naam'] != ''){
        
        $naam = $_POST['naam'];
         
    } else {
        
        $naam = ' ';
        
    }

    if ($_POST['email'] != ''){
        
        $email = $_POST['email'];
        
    } else {
        
        $email = ' ';
        
    }

    if ($_POST['onderwerp'] != ''){
        
        $onderwerp = $_POST['onderwerp'];
        
    } else {
        
        $onderwerp = ' ';
        
    }

    if ($_POST['omschrijving'] != ''){
        
        $omschrijving = $_POST['omschrijving'];
        
    } else {
        
        $omschrijving = ' ';
        
    }

    if ($_POST['wensen'] != ''){
        
        $wensen = implode(', ', $_POST['wensen']);
        
    } else {
        
        $wensen = ' ';
        
    }

?>