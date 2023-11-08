<?php

require_once('././settings.php');
include_once 'award.php';
include_once 'CSVHelper.php';

class Achievements{
	private static $awards=[];
	private static $goodAwards=[];

	// read the awards from the CSV file.
	public static function index(){
		$csvHelp = new CSVHelper();
		
		$awards=$csvHelp->index(APP_PATH.'\data\awards.csv');
		print_r("Inside index function.");
		echo '<br><br>';
		// print_r($awards);
		echo '<br><br>';
		print_r(count($awards));

		foreach($awards as $achievement){
			print_r($achievement);
			echo '<br>==============<br>';
			/*
			echo '<div class="col-lg-4">
			<div class="card mt-4 border-0 shadow">
					<div class="card-body p-4">
						<span class="badge badge-soft-primary">Achievements</span>
						<h4 class="font-size-22 my-4"><a href="javascript: void(0);">'.$achievement[0].'</a></h4>
						<p class="text-muted">'.$achievemetn[1].'</p>
						<div class="d-flex align-items-center mt-4 pt-2">
							<div class="flex-body">
								<h5 class="font-size-17 mb-0"></h5>
							</div>
						</div>
					</div><!-- end cardbody -->
				</div><!-- end card -->
			</div><!-- end col -->';
			*/
		}
		/*
		foreach($this->awards as $achievement){
			print_r($achievement);
			echo '<br>';
			if(count($achievement)>0){
				// add to the array as a new Award Object
				$newAward = new Award($achievement[0],$achievement[1]);
				$goodAwards[]= $newAward;
				print_r($newAward);
				// dump the variable
				// var_dump($newAward instanceof Award);			
			}
		}
		*/
	}
	
	public static function display(){
		foreach(self::$goodAwards as $award) $award->display();
	}
	
}