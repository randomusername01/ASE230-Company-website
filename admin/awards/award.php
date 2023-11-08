<?php

class Award{
    private $year;
    private $achievement;
    
    public function __construct($year,$achievement){
        $this->year=$year;
        $this->achievement=$achievement;
    }

    public function display(){
        // display the award
        echo '<div class="col-lg-4">
                            <div class="card mt-4 border-0 shadow">
                                    <div class="card-body p-4">
                                        <span class="badge badge-soft-primary">Achievements</span>
                                        <h4 class="font-size-22 my-4"><a href="javascript: void(0);">'.$this->year.'</a></h4>
                                        <p class="text-muted">'.$this->achievement.'</p>
                                        <div class="d-flex align-items-center mt-4 pt-2">
                                            <div class="flex-body">
                                                <h5 class="font-size-17 mb-0"></h5>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->';
    }
}