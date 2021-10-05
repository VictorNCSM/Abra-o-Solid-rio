<?php


if((!isset($_POST["doador"]))){
    echo "Doador.<br>";
}
else{
    echo "Sem doador.<br>";
}

if ((!isset($_POST["donatario"]))){
    echo "Donatario<br>";
}
else{echo "Sem donatário.<br>";
}
?>