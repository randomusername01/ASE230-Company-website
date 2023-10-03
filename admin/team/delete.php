<?php
$output='';
$fp=fopen('../../data/teams.csv','r');
$index=0;
while(!feof($fp)){
    $line=fgets($fp);
    if($index!=$_GET['index']){
        // put the line into $output
        $output.=$line;
    }
    $index++;
}
fclose($fp);
$fp=fopen('../../data/teams.csv','w');
fputs($fp,$output);
fclose($fp);
header('location: index.php');
