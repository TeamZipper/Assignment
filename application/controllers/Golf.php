<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Golf
 *
 * @author Paul
 */
class Golf extends Application {
    //put your code here
    function __construct(){
        parent::__construct();
    }
    
    public function index() {
    $this->show(6);
    }
}
