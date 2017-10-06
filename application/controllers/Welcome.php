<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';

		// build the list of planes, to pass on to our view
		$source = $this->fleetdata->all();

		// pass on the data to present, as the "planes" view parameter
		$this->data['planes'] = $source;

		$this->render();
	}

}
