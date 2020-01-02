<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php
            echo file_get_contents($_GET['id'].".txt");
        ?> 
    </body>
</html>
