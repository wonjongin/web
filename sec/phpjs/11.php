<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <ul>
        <script>
            list = new Array("최진혁","최유빈","한이람","한이은");
            i=0
            while(i<list.length){
                document.write("<li>"+list[i]"</li>");
                i = i + 1;
            }
        </script>
        </ul>
        <ul>
        <?php
            $list=array("최진혁","최유빈","한이람","한이은");
            $i=0;
            while($list< count($list)){
                echo "<li>".$list[$i]."</li>";
                $i=$i+1;
            }?>
        </ul>
    </body>
</html>