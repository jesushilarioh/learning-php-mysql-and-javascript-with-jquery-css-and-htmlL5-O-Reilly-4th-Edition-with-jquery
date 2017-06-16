<?php // query-mysqli.php
  require_once 'login.php';
  $connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

  if ($connection->connect_error) die($connection->connect_error);

  $query  = "SELECT * FROM classics";
  $result = $connection->query($query);

  if (!$result) die($connection->error);

  $rows = $result->num_rows;

  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    echo 'Author: '   . $result->fetch_assoc()['author']   . '<br>';
    $result->data_seek($j);
    echo 'Title: '    . $result->fetch_assoc()['title']    . '<br>';
    $result->data_seek($j);
    echo 'Category: ' . $result->fetch_assoc()['category'] . '<br>';
    $result->data_seek($j);
    echo 'Year: '     . $result->fetch_assoc()['year']     . '<br>';
    $result->data_seek($j);
    echo 'ISBN: '     . $result->fetch_assoc()['isbn']     . '<br><br>';
  }

  $result->close();
  $connection->close();
?>
