<!DOCTYPE html>
<html>
    <head>
        <title> Лабораторная работа 6. Блочная верстка сайта</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div id="categories"> 
            Категории
                <a href="index.php?C=1">Категория 1</a>
                <a href="index.php?C=2">Категория 2</a>
                <a href="index.php?C=3">Категория 3</a>
                <a href="index.php">Домой</a>
        </div>
        <div id="container">
            <div id="objects">         
                $C = $_GET["C"];
                switch ($C) {
                    case "1": $objects=file_get_contents("objects1.php"); break;
                    case "2": $objects=file_get_contents("objects2.php"); break;
                    case "3": $objects=file_get_contents("objects3.php"); break;
                    default: $objects=file_get_contents("about.php");
                }
            ?>
              </div>
            <div id="content">
               <?php
                $O = $_GET["O"];
                switch ($O) {
                    case "1-1": echo(file_get_contents("object1-1.php")); break;
                    case "1-2": echo(file_get_contents("object1-2.php")); break;
                    case "1-3": echo(file_get_contents("object1-3.php")); break;
                    case "2-1": echo(file_get_contents("object2-1.php")); break;
                    case "2-2": echo(file_get_contents("object2-2.php")); break;
                    case "2-3": echo(file_get_contents("object2-3.php")); break;
                    case "3-1": echo(file_get_contents("object3-1.php")); break;
                    case "3-2": echo(file_get_contents("object3-2.php")); break;
                    case "3-3": echo(file_get_contents("object3-3.php")); break;
                    default: echo (file_get_contents("applicate.html"));
                }   
                ?>
            </div>
        </div>
        </body>
</html>
