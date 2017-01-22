<?php

  #### CONNECTING TO MYSQL ####
  $HOST = 'localhost';
  $USER = 'root';
  $PASS = 'root';
  $DBNAME = 'Konnichiwave';

  $TABLE = 'highscore';

  mysql_connect($HOST, $USER, $PASS) or die(mysql_error());
  mysql_select_db($DBNAME);
  ####  ####

  // Bits of security: ensuring both username and score and sent into this request and score is numeric
  if (empty($_POST['username']) || empty($_POST['score'] || !is_numeric($score))) {
    echo "Both username and score parameters are needed";
    exit();
  }

  // Pulling variables from post request
  $username = htmlentities(mysql_real_escape_string($_POST['username']));
  $score = htmlentities(mysql_real_escape_string($_POST['score']));

  // Executing insert query into the database
  $query = "INSERT INTO highscore(username, score) VALUES('$username', '$score')";
  $result = mysql_query($query);

  // Housekeeping
  if ($result) {
    echo "success";
  } else {
    echo "failure";
  }

?>
