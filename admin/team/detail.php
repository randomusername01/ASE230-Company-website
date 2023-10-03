<?php
require_once '../../lib/readCSV.php';
$team_data = readCSVFile('../../data/teams.csv');
array_shift($team_data);
$ind = $_GET['index'];
?>

<table>
    <tr>
        <th><a href="index.php">Back</a></th>
        <th><a href="edit.php?index=<?= $ind + 1 ?>">Edit</a></th>
        <th><a href="delete.php?index=<?= $ind + 1 ?>">Delete</a></th>
    </tr>
</table>

<?php
echo '<h1>'.$team_data[$ind][0].'</h1>';
echo '<h2>'.$team_data[$ind][1].'</h2>';
echo '<h4>'.$team_data[$ind][2].'</h4>';
echo '<img src="../../'.$team_data[$ind][3].'" alt="'.$team_data[$ind][0].'">';
?>
