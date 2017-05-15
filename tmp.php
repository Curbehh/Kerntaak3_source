<html>

    <head>
    
        <title>
        
            Test
        
        </title>
    
    </head>
    
    <body>
        
        <form method = 'POST' action = '<?php echo $_SERVER['PHP_SELF']?>' name = 'form' class = 'form'>
    
            Select:

            <br><br>

            <select name = 'select'>

                <option name = 'option' value = 'option'>

                    Option

                </option>

            </select>

            <br><br>

            <input type = 'submit' name = 'submit' value = 'submit' />

            <?php

                if (isset($_POST['submit'])){

                    print_r($_POST);

                }

            ?>
            
        </form>
    
    </body>

</html>