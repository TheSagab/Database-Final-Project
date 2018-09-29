<?php
  function connection() {
    $db_connection = pg_connect("host=dbpg.cs.ui.ac.id dbname=db062 user=db062 password=Ohfu1Aec") or die("Could not connect");

    return $db_connection;
  }
?>