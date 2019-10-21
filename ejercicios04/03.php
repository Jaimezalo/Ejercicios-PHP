<?php
if(isset($_POST[enviar])){
    echo "Con print_r:\n";
    print_r($_REQUEST);
    echo "<br>Con var_dump:\n";
    var_dump($_REQUEST);
}
?>