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
        while(!feof($fp)){
            // trim white spaces at start of the line.
            $line=trim(fgets($fp));
            // check the line has characters in it.
            if(strlen($line)>0){
                // turn line into an array.
                $content=explode(',',$line);
            array_push($outerArray,$content);
            }else{
                continue;
            }
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

    function updateCSVFile($file,$index,$updatedLine){
        $output='';
        // open the file in read mode.
        $fp=fopen(APP_PATH.'/data/awards.csv','r');
        $index=0;
        // getting line by line.
        while(!feof($fp)){
            // getting a single line out of the original document.
            $line=fgets($fp);
            if($index==$_GET['index']){
                // modify line and add it to $output.
                $output.=$updatedLine;
            }else{
                // building the replacement file line by line.
                $output.=$line;
            }
            $index++;
        }
        // close the file we were reading.
        fclose($fp);
        // open the file in write mode.
        $fp=fopen(APP_PATH.'/data/awards.csv','w');
        // write the edited content into it.
        fputs($fp,$output);
        fclose($fp);
    }

    function deleteFromCSVFile($file){

    }
