<?php
session_start();

// Aumentar contador de sesión si ya existe la sesión y sino se crea a cero
if (isset($_SESSION['contador'])) {
    $_SESSION['contador']++;
} else {
    $_SESSION['contador'] = 0;
    echo "Primera visita.";
}

echo "Visita número: " . $_SESSION['contador'];
    
?>
