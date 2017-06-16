<?php //fetchrow-mysqli.php
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
	$row = $result->fetch_array(MYSQLI_ASSOC);

    echo 'Author: '   . $row['author']   . '<br>';
    echo 'Title: '    . $row['title']    . '<br>';
    echo 'Category: ' . $row['category'] . '<br>';
    echo 'Year: '     . $row['year']     . '<br>';
    echo 'ISBN: '     . $row['isbn']     . '<br><br>';
  }

  $result->close();
  $connection->close();
?>
