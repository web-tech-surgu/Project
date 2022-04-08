 <?php
    $tmp=file_get_contents("index.php");
    $objects="";
    $contents=""; 
       $C = $_GET["C"];
       switch($C) {
            case "1": $objects=file_get_contents("objects1.php"); break;
            case "2": $objects=file_get_contents("objects2.php"); break;
            case "3": $objects=file_get_contents("objects3.php"); break;
            default: $objects=file_get_contents("about.php);
                }
             
        $O = $_GET["O"];
                switch ($O) {
                    case "1-1": $content=file_get_contents("object1-1.php"); break;
                    case "1-2": $content=file_get_contents("object1-2.php"); break;
                    case "1-3": $content=file_get_contents("object1-3.php"); break;
                    case "2-1": $content=file_get_contents("object2-1.php"); break;
                    case "2-2": $content=file_get_contents("object2-2.php"); break;
                    case "2-3": $content=file_get_contents("object2-3.php"); break;
                    case "3-1": $content=file_get_contents("object3-1.php"); break;
                    case "3-2": $content=file_get_contents("object3-2.php"); break;
                    case "3-3": $content=file_get_contents("object3-3.php"); break;
                    default: $content=file_get_contents("applicate.php");
                }; 
                $tmp = str_replace("{objects}", $objects, $tmp);
                $tmp = str_replace("{content}", $content, $tmp);
      echo $tmp;
                
?>
