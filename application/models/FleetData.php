<?php

/**
 * This is a "CMS" model for Fleet, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author jim & andrew
 */
class FleetData extends CI_Model
{
	// expressed using long-form array notaiton in case students use PHP 5.x
	var $data = array(
		'1' => array("id"           => "avanti",
                             "manufacturer" => "Piaggo",
                             "model"        => "Avanti II",
                             "price"        => "7195",
                             "seats"        => "8",
                             "reach"        => "2797",
                             "cruise"       => "589",
                             "takeoff"      => "994",
                             "hourly"       => "977"),
		'2' => array("id"           => "mustang",
                             "manufacturer" => "Cessna",
                             "model"        => "Citation Mustang",
                             "price"        => "2770",
                             "seats"        => "4",
                             "reach"        => "2130",
                             "cruise"       => "630",
                             "takeoff"      => "950",
                             "hourly"       => "1015")
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