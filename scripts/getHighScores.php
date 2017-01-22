<?php
  include './database.inc.php';

  // Executing insert query into the database
  $query = "SELECT * FROM highscore ORDER BY score DESC LIMIT 5";
  $result = mysql_query($query);

  $players = array();

  while ($row = mysql_fetch_assoc($result)) {
    $players[] = $row;
  }

  echo json_encode($players);
?>
