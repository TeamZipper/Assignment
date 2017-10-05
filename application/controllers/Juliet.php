<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Juliet
 *
 * @author Paul
 */
class Juliet extends CI_Controller {
    //put your code here
function __construct()
	{
            parent::__construct();

			}

	/**
	 * Render this page. View parameters have been collected in our "data" property
	 */
	function render($template = 'template')
	{
		// Establish the meat of the current page, as the "content" parameter.
		// Parse the requested content template (passed as the "pagebody" parameter) to do so.
		$this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
		
		// And then parse the page template, which will pull in and position the
		// "meat" in its middle.
		$this->parser->parse('template', $this->data);
	}
            public function index() {
                $record = $this->quotes->get(1);
                header("Content-type: application/json");
                echo json_encode($record);
            }
}
