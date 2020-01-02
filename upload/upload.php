<?php
$source = $_FILES['profile']['tmp_name'];
$dest = "/upload/files1/".basename($_FILES['profile']['name']);
move_uploaded_file($source,$dest);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <p>밑에 업로드한게 모이면 아마도 업로드 성공</p>
        <img src="<?=$_FILES['profile']['name']?>" alt="" />
    </body>
</html>