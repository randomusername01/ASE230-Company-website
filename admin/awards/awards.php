<?php
    // functions for retrieving and indexing all items, showing a specific item, creating an item, modifying an item, and deleting an item from the database

    // reads CSV file and turns it into an array.
    function readCSVFile($file){
        // check if file exists and is readable. Stolen from bit of code Jacob shared
        if(!file_exists($file) || !is_readable($file)) return false;
        // Everything else below is modified from 09-csv-read.php
        // create array to return
        $outerArray=array();
        // open file with fOpen & get path
        $fp=fopen($file,'r');
        // writes the contents into an array.
        while($content=fgetcsv($fp)){
            array_push($outerArray,$content);
        }
        return $outerArray;
        // close the file.
        fclose($fp);
    }

    function addToCSVFile($file,$newContent){
        $fp=fopen(APP_PATH.'/data/awards.csv','a+');
	    fwrite($fp,$newContent);
	    // close the file
	    fclose($fp);
    }

    function updateCSVFile($file){

    }

    function deleteFromCSVFile($file){

    }
