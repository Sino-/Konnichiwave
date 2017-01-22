<?php

  #### CONNECTING TO MYSQL ####
  $HOST = 'localhost';
  $USER = 'root';
  $PASS = 'root';
  $DBNAME = 'Konnichiwave';
  $TABLE = 'highscore';

  mysql_connect($HOST, $USER, $PASS) or die(mysql_error());
  mysql_select_db($DBNAME) or die(mysql_error());
