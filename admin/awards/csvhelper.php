<?php
// CSVhelper.php - Abstract class that holds useful functions for interacting with a CSV file.
abstract class CSVhelper{
	public $property;
	
    // index the csv file.
	public function index($file){
		$lines=[];
		$fs=fopen($file,'r');
		while(!feof($fs)) $lines[]=explode(';',fgets($fs));
		fclose($fs);
		return $line;
	}
	
	 // reads CSV file and turns it into an array.
    public function readCSVFile($file){
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
    // adds a line to the end of the csv file.
    public function addToCSVFile($file,$newContent){
        // check if file exists and is readable. Stolen from bit of code Jacob shared
        if(!file_exists($file) || !is_readable($file)) return false;
        $fp=fopen($file,'a+');
	    fwrite($fp,$newContent);
	    // close the file
	    fclose($fp);
    }
    // updates an existing line in the csv file.
    public function updateCSVFile($file,$targetIndex,$updatedLine){
        // check if file exists and is readable. Stolen from bit of code Jacob shared
        if(!file_exists($file) || !is_readable($file)) return false;
        $output='';
        // open the file in read mode.
        $fp=fopen($file,'r');
        $index=0;
        // getting line by line.
        while(!feof($fp)){
            // getting a single line out of the original document.
            $line=fgets($fp);
            if($index==$targetIndex){
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
        $fp=fopen($file,'w');
        // write the edited content into it.
        fputs($fp,$output);
        fclose($fp);
    }
    // removes an existing line from the csv file.
    public function deleteFromCSV($file,$targetIndex,$updatedLine){
        // check if file exists and is readable. Stolen from bit of code Jacob shared
        if(!file_exists($file) || !is_readable($file)) return false;
        $output='';
        // open the file in read mode.
        $fp=fopen($file,'r');
        $index=0;
        // getting line by line.
        while(!feof($fp)){
            // getting a single line out of the original document.
            $line=fgets($fp);
            if($index!=$targetIndex){
                // add to the new file if it is not the targetted line.
                $output.=$line;
            }
            $index++;
        }
        // close the file we were reading.
        fclose($fp);
        // open the file in write mode.
        $fp=fopen($file,'w');
        // write the edited content into it.
        fputs($fp,$output);
        fclose($fp);
    }

	
}