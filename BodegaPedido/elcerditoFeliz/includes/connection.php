<?php

mysql_connect("localhost","root","") or
 die('Imposible Conectarse a la base de datos!');


mysql_select_db("elcerditofeliz") or
 die('No hay base de datos seleccionada!');
 mysql_query ("SET NAMES 'utf8' collate 'utf8_general_ci'");
?>