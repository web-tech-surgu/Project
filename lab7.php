 <div id="контейнер">
            <div id="объекты">         
 $C = $_GET["C"];
 коммутатор ($C) {
 case "1": $objects=file_get_contents("objects1.php"); перерыв;
 case "2": $objects=file_get_contents("objects2.php"); перерыв;
 case "3": $objects=file_get_contents("objects3.php"); перерыв;
 по умолчанию: $objects=file_get_contents("about.php);
                }
            ?>
              </div>
            <div id="content">
               <?php
                $O = $_GET["O"];
                коммутатор ($O) {
                    case "1-1": echo(file_get_contents("object1-1.php")); перерыв;
                    case "1-2": echo(file_get_contents("object1-2.php")); перерыв;
                    case "1-3": echo(file_get_contents("object1-3.php")); перерыв;
                    case "2-1": echo(file_get_contents("object2-1.php")); перерыв;
                    case "2-2": echo(file_get_contents("object2-2.php")); перерыв;
                    case "2-3": echo(file_get_contents("object2-3.php")); перерыв;
                    case "3-1": echo(file_get_contents("object3-1.php")); перерыв;
                    case "3-2": echo(file_get_contents("object3-2.php")); перерыв;
                    case "3-3": echo(file_get_contents("object3-3.php")); перерыв;
                    по умолчанию: echo (file_get_contents("applicate.html"));
                }   
                ?>
            </div>
        </div>
