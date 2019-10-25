<?php
//conexion al servidor MySQL
$db = mysqli_connect('localhost', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

//Conexion con la DB Boardgame
mysqli_select_db($db,'boardgamesite') or die(mysqli_error($db));

//Modifico la tabla boardgame para añadir campos
$query = 'ALTER TABLE boardgame ADD COLUMN (
    boardgame_duracion  TINYINT UNSIGNED NULL,
    boardgame_precio    DECIMAL(4,1)     NULL,
    boardgame_beneficios    DECIMAL(4,1)     NULL)';
mysqli_query($db,$query) or die (mysqli_error($db));

//inserto los datos en los nuevos campos
$query = 'UPDATE boardgame SET
        boardgame_duracion = 101,
        boardgame_precio = 81,
        boardgame_beneficios = 242.6
    WHERE
        boardgame_id = 1';
mysqli_query($db,$query) or die (mysqli_error($db));

$query = 'UPDATE boardgame SET
        boardgame_duracion = 60,
        boardgame_precio = 40,
        boardgame_beneficios = 100.6
    WHERE
        boardgame_id = 2';
mysqli_query($db,$query) or die (mysqli_error($db));

$query = 'UPDATE boardgame SET
        boardgame_duracion = 45,
        boardgame_precio = 35,
        boardgame_beneficios = 150.2
    WHERE
        boardgame_id = 3';
mysqli_query($db,$query) or die (mysqli_error($db));

$query = 'UPDATE boardgame SET
        boardgame_duracion = 30,
        boardgame_precio = 40,
        boardgame_beneficios = 92.6
    WHERE
        boardgame_id = 4';
mysqli_query($db,$query) or die (mysqli_error($db));

$query = 'UPDATE boardgame SET
        boardgame_duracion = 15,
        boardgame_precio = 17,
        boardgame_beneficios = 250.5
    WHERE
        boardgame_id = 5';
mysqli_query($db,$query) or die (mysqli_error($db));

echo 'Boardgame database successfully updated!';
?>
