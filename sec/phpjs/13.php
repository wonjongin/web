<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
       <script>
           function a(input){
               document.write(input+1);
           }
           a(5);
           a(4);
           function b(input2){
               return input2+1;
           }
           document.write(b(5));
           input3 = prompt("값을 입력하세요");
           //함수 만들어서 인풋3가 이용되게 만들기 
       </script>
        <?php
            function a(){
                echo "hello function";
            }
            a();
        ?>
    </body>
</html>