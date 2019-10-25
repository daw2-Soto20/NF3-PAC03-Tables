<?php
$db = mysqli_connect('localhost', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

//Conexion con la DB Boardgame
mysqli_select_db($db,'boardgamesite') or die(mysqli_error($db));

//Creo la tabla comentarios
$query = 'CREATE TABLE reviews (
        review_boardgame_id INTEGER UNSIGNED NOT NULL, 
        review_date     DATE             NOT NULL, 
        reviewer_name   VARCHAR(255)     NOT NULL, 
        review_comment  VARCHAR(255)     NOT NULL, 
        review_rating   TINYINT UNSIGNED NOT NULL  DEFAULT 0, 

        KEY (review_boardgame_id)
    )
    ENGINE=MyISAM';
mysqli_query($db,$query) or die (mysqli_error($db));

//insert new data into the reviews table
$query = <<<INICIOSQL
INSERT INTO reviews
    (review_boardgame_id, review_date, reviewer_name, review_comment,
        review_rating)
VALUES 
    (1, "2008-09-23", "Cristian", "Juegazo que merece estar en el Top 10 de la BGG.", 4),
    (1, "2009-06-15", "Marc", "El Eurogame que cambio el rumbo de los juegos de mesa.", 4),
    (1, "2007-08-28", "Monica", "Impresionante!", 5),
    (2, "2010-05-23", "Diego", "Es mi juego favorito!", 5),
    (3, "2006-05-23", "Xavi", "Uno de los grandes.", 4),
    (4, "2008-05-23", "Pardelas", "Un abstracto que funciona bien a cualquier numero.", 3),
    (5, "2008-05-23", "Mojopicon", "Un set collection deivertidísimo!", 4),
    (2, "2013-08-02", "Xavi", "Pepinazo!", 4),
    (2, "2013-10-11", "Ruben", "Un juego duro! No es para todo el mundo...", 3),
    (3, "2007-05-05", "Leopoldo", "Demasiado duro, es muy dado al AP!", 2),
    (3, "2014-04-02", "Diego", "Es un obligatorio en la Ludoteca.", 5),
    (4, "2018-11-23", "Leopoldo", "Demasiado ligero, no recomendado para jugadores de culo duro.", 1),
    (4, "2018-12-22", "Cristian", "Un juego con mucha interacción.", 4),
    (5, "2018-07-10", "Marc", "Rapido, agil y entretenido", 3),
    (5, "2018-08-23", "Pardelas", "Sencillamente maravilloso!", 5)
INICIOSQL;
mysqli_query($db,$query) or die (mysqli_error($db));

echo 'Boardgame database successfully updated!';
?>