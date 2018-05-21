<?php

$db = new mysqli("localhost", "root", "", "db_noticias");
if ($db->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $db->connect_errno . ") " . $mysqli->connect_error;
}

?>