<?php

/**
 * This is a "CMS" model for Fleet, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author jim & andrew
 */
class Fleetdata extends CSV_Model {

    // Constructor
    public function __construct() {
        parent::__construct(APPPATH . '../data/fleetdata.csv', 'id');

        // inject each "record" key into the record itself, for ease of presentation
        /*foreach ($this->data as $key => $record) {
            $record['key'] = $key;
            $this->data[$key] = $record;
        }*/
    }

    // retrieve a single quote, null if not found
    public function getPlane($which) {
        return (array)$this->get($which);
    }
}
