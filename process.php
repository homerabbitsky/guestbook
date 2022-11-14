<?php 
  require "config.php";

  // Retreive the input data from the post
  $name = filter_input(INPUT_POST, "name");
  $comment = filter_input(INPUT_POST, "comment");

  function addGuestbookEntry($name, $comment) {
    global $config;
    // Store the data into a CSV file
    $fp = fopen($config['db'],"a");
    fputcsv($fp, [$name, $comment]);
    fclose($fp);
  }
  
  addGuestbookEntry($name, $comment);
  header('Location: index.php?m=1');
  exit;
