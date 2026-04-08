<?php
echo "Si na logout stránke<br>";

if (isset($_COOKIE["auth"]) && $_COOKIE["auth"] == true) {
    echo "Bol si prihlásený";
} else {
    echo "Nie si prihlásený";
}
?>