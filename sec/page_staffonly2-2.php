<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
            $password = $_GET["password"];
            if($password==12345678){
                echo "비밀페이지에 들어오셧습니다.";
            }
            else{
                echo "비밀번호가 틀렸습니다.";
            }
        ?>
    </body>
</html>