<?php
// reads the CSV file and returns an array of arrays.
// references changes made in 09-csv-read-altered.php on pepper's laptop.
function readCSVFile($file){
    // check if file exists and is readable. Stolen from bit of code Jacob shared
    if(!file_exists($file) || !is_readable($file)) return false;
    // create array to return
    $outerArray=array();
    // open file with fOpen & get path
    $fp=fopen($file,'r');
    while($content=fgetcsv($fp)){
        array_push($outerArray,$content);
    }
    // returns an array of arrays.
    return $outerArray;
    // close the file.
    fclose($fp);
}
