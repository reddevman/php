<?php
session_start();
if (isset($_SESSION['verificado'])) {
    echo "Esta es la página privada";
} else {
    header('Location:index.php?error=fuera');
}

?>