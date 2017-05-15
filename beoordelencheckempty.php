<?php

    if ($_POST['beoordeling'] != ''){
        
        $beoordeling = $_POST['beoordeling'];
        
    } else {
        
        $beoordeling = ' ';
    }

    if ($_POST['beredenering'] != ''){
        
        $beredenering = $_POST['beredenering'];
        
    } else {
        
        $beredenering = ' ';
    }

    if ($_POST['slottoewijzen'] != ''){
        
        $toegewezenslot = $_POST['slottoewijzen'];
        
    } else {
        
        $toegewezenslot = ' ';
        
    }

?>