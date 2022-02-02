<?php
// Lógica para ir a la primera pantalla
if (strtolower($_POST['pokemon'])=='pikachu') {
    header('Location: ../view/pantalla1.php');
} else {
    header('Location: ../index.php?msg=25');
}

?>