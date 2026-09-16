<!DOCTYPE html>
<html>
<head>
  <title>PHP Multiplication Table</title>
</head>
<body>
  <form method="get" action="practice4.php">
    <label>Enter a number: </label>
    <input type="text" name="num">
    <button type="submit">Generate</button>
  </form>

  <?php
    if (isset($_GET['num']) && $_GET['num'] !== '') {
      $num = (int)$_GET['num'];

      echo "<table border='1'>";

      echo "<tr><th>&times;</th>";
      for ($col = 1; $col <= $num; $col++) {
        echo "<th>$col</th>";
      }
      echo "</tr>";

      for ($row = 1; $row <= $num; $row++) {
        echo "<tr><th>$row</th>";
        for ($col = 1; $col <= $num; $col++) {
          $product = $row * $col;
          echo "<td>$product</td>";
        }
        echo "</tr>";
      }

      echo "</table>";
    }
  ?>
</body>
</html>
