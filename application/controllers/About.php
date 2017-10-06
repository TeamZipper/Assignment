<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of About
 *
 * @author Paul
 */
class About extends Application {
    //put your code here
    public function index() {
    $this->show(3);
    }
    
    	public function show($key)
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'about';

		$this->render();
	}
}
