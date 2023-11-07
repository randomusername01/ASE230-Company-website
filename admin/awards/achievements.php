<?php
require_once('award.php');
require_once('csvhelper.php');

class Achievements{
	private static $awards=[];

	// read the awards from the CSV file.
	public static function init($filepath){
		$awards=CSVHelper::index($filepath.'/data/awards.csv');
		foreach($awards as $award){
			if(count($award)>0)
			if($award[0]=='year'){
				// skip
			}else{
				// add to the array
				self::$awards[]=new Award($award[0],$award[1]);
			}
		}
	}
	
	public static function index(){
		foreach(self::$awards as $award) $award->display();
	}
	
}