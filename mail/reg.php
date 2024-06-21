<?php
  $mysqli = @new mysqli('localhost', 'degtyanikova_FlowerLove', 'Flower123', 'degtyanikova_FlowerLove');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
  $result_set = $mysqli->query('SELECT * FROM mytable');
  $result_set->num_rows;
  while ($row = $result_set->fetch_assoc()) {
    print_r($row);
    echo "<br />";
  }
  $result_set->data_seek(0);
  while ($row = $result_set->fetch_assoc()) {
    print_r($row);
    echo "<br />";
  }
  $result_set->close();
  $mysqli->close();
?>