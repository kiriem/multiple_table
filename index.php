<?php 

    function createTable($dan){
        print("<table border='1'>");
        $num = 1;
        for($i=0; $i<10; $i++){
            print("<tr>");
            for($j=0; $j<10; $j++){
                print("<td id='{$dan}-{$num}'>{$num}</td>");
                $num++;
            }
            print("</tr>");
        }  
        print("</table>");
    }
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>倍数表</title>

    <style>
        body{
            text-align: center;
        }

        table{
            border-collapse: collapse;
        }

        td{
            width: 40px;
            height: 40px;
        }

        table{
            margin-left: auto;
            margin-right: auto;
        }

        ul{
            list-style: none;
        }

        a{
            text-decoration: none;

            
        }

        .red{
            color: red;
        }

        .blue{
            color: blue;
        }

        .yellow{
            color: yellow;
        }

        .green{
            color: green;
        }

    </style>

</head>

<body>

    <h1>倍数表</h1>

    <ul>
        <li><a href="#red" onclick="drawing('red')" class="red">赤</a></li>
        <li><a href="#blue" onclick="drawing('blue')" class="blue">青</a></li>
        <li><a href="#yellow" onclick="drawing('yellow')" class="yellow">黄</a></li>
        <li><a href="#green" onclick="drawing('green')" class="green">緑</a></li>
    </li>
    
    <?php
        for($k=2; $k<10; $k++){
            print("<h3>{$k}の段</h3>");
            createTable($k);
        }
    ?>


    <script>

        function drawBGColor(dan, color){
            for(var i=1; i<101; i++){
                var danStr = String(dan);
                var id = danStr + "-" + String(i);
                if(i%dan == 0){
                    document.getElementById(id).style.backgroundColor = color;
                }
            }

        }

        function drawing(color){
            for(var j=2; j<10; j++){
                drawBGColor(j, color);
            }
        }
    </script>
    
</body>
</html>