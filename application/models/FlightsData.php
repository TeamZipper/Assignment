<?php

class FlightsData extends CI_Model
{
	// expressed using long-form array notaiton in case students use PHP 5.x
	var $data = array(
        '1' => array("flight" => "3U8502",
                    "scheduled" => "11:25",
                    "estimated" => "12:56",
                    "airline" => "Sichuan Airlines",
                    "to" => "chengdu",
                    "terminal" => "Main",
                    "gate" => "D53",
                    "status" => "Departed"),
        '2' => array("flight" => "WS180",
                    "scheduled" => "12:30",
                    "estimated" => "12:45",
                    "airline" => "WestJet Airlines",
                    "to" => "Edmonton",
                    "terminal" => "Main",
                    "gate" => "B27",
                    "status" => "Final Call"),
        '3' => array("flight" => "AC114",
                    "scheduled" => "13:00",
                    "estimated" => "",
                    "airline" => "Air Canada",
                    "to" => "Toronto",
                    "terminal" => "Main",
                    "gate" => "C44",
                    "status" => "Boarding")
	);

	// Constructor
	public function __construct()
	{
		parent::__construct();

		// inject each "record" key into the record itself, for ease of presentation
		foreach ($this->data as $key => $record)
		{
			$record['key'] = $key;
			$this->data[$key] = $record;
		}
	}

	// retrieve a single quote, null if not found
	public function get($which)
	{
		return !isset($this->data[$which]) ? null : $this->data[$which];
	}

	// retrieve all of the quotes
	public function all()
	{
		return $this->data;
	}

}