<?php

$infoconn = array (
  'database_host' => "localhost",
  'database_name' => 'database',
  'database_user' => 'root',
  'database_pass' => '',
);

$database = new mysqli($infoconn['database_host'],$infoconn['database_user'],$infoconn['database_pass'],$infoconn['database_name']);

?>