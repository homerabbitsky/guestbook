<?php
require "config.php";

function deleteGuestbook() {
  global $config;
  unlink($config['db']);
  file_put_contents($config['db'],"");
}

deleteGuestbook();