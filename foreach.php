<?php
$v = [0 => 'bono',
      1 => 'carolina',
      2 => 'hugo',
      3 => 'bono1',
      4 => 'carolina1',
      5 => 'hugo1',
      6 => 'bono2',
      7 => 'carolina2',
      8 => 'hugo2'];

 echo '<table border="1">';
 echo '<tr><th>id</th><th>nome</th>';

foreach ($v as $key => $value) {
    echo " <tr><td>$key</td> <td>$value</td></tr>";
}
 echo '</table>'
?>