<?php

// Datos en conx.php
include "conx.php";

// Crear conexión
$conn = new mysqli($servername, $username, $pw, $dbname );

// Verificar conexion
if ($conn->connect_error) {
    die("No conectado... " . $conn->connect_error);
}

require "version/ver.php" ?>
