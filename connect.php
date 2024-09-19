<?php
include('config.php');
$db=new mysqli($config['mysql']['host'],$config['mysql']['user'],$config['mysql']['password'],database: $config['mysql']['db']);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
  }
