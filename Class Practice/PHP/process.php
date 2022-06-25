


<?php

//some global variables of php

function dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    echo "<br />";
}
//dump($_SERVER);
//if ($_SERVER["REQUEST_SCHEME"]=="http"){
   // echo "You are using http.";
//}

//form ko data server ma pathaunu cha vane use name=""


// dump($_COOKIE);
// dump($_GET);
dump($_REQUEST);
dump($_FILES);
// dump($_SESSION);
// dump($_POST);

?>
