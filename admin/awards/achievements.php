<?php

require_once('././settings.php');
include_once 'award.php';
include_once 'CSVHelper.php';

class Achievements{
	private $awards=[];
	private $goodAwards=[];

	// read the awards from the CSV file.
	public function index(){
		$csvHelp = new CSVHelper();
		
		$awards=$csvHelp->index(APP_PATH.'\data\awards.csv');

		foreach($awards as $i => $achievement){
			if(count($achievement)>0){
				if($achievement[0]!='Year'){
				// add to the array as a new Award Object
				$newAward = new Award($achievement[0],$achievement[1]);
				$this->goodAwards[]=$newAward;
				// dump the variable
				$newAward = "";
				}
				else{ 
					continue;
				}
			}
		}
	}
	
	public function display(){
		foreach($this->goodAwards as $award) $award->display();
		// foreach($this->goodAwards as $goodAward) $goodAward->display();
	}
	
}