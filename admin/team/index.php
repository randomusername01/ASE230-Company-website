<?php
require_once '../../lib/readCSV.php';
$team_data = readCSVFile('../../data/teams.csv');
array_shift($team_data);
?>
<h2>Team Members</h2>
<table>
    <?php
    $ind = 0;
    foreach($team_data as $member) {
        echo '<tr>';
            echo '<th><a href="detail.php?index='.$ind.'">'.$member[0].'</a></th>';
            echo '<th>'.$member[1].'</th>';
        echo '</tr>';
        $ind++;
    }
    ?>
</table>
<br><br>
<a href="create.php">Add another member</a>
