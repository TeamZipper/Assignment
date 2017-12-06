<!-- Reference: COMP4711Lab06 -->
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Flights extends Application {

    function __construct() {
        parent::__construct();
    }

    /**
     * Flights listing page for our app
     */
    public function index() {
        // get user role information
        $role = $this->session->userdata('userrole');
        $this->data['flights'] = $this->flightsdata->all();
        $this->data['pagetitle'] = 'Scheduled Flights ('. $role . ')';
        $this->data['pagebody'] = 'flights';
        //  if user role is owner
        if ($role == ROLE_OWNER){
            $this->data['pagination'] = $this->parser->parse('itemadd',[], true);
            // this is the view we want shown
            $this->data['pagebody'] = 'flightsAdmin';
            // build the list of planes, to pass on to our view
            $source = $this->flightsdata->all();
            $this->data['airlines'] = $source;
            $this->render();
        } else {
            // if user role is guests
            $this->data['pagination'] = $this->parser->parse('empty',[], true);
            // this is the view we want shown
            $this->data['pagebody'] = 'flights';
            // build the list of planes, to pass on to our view
            $source = $this->flightsdata->allFlights();
            // pass on the data to present, as the "planes" view parameter
            $this->data['airlines'] = $source;
            $this->render();
        }
    }

    public function show($key)
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'info';

        // build the list of planes, to pass on to our view
        $source = $this->flightsdata->getId($key);

        // pass on the data to present, adding the author record's fields
        $this->data = array_merge($this->data, (array)$source);

        $this->render();
    }

    public function add()
    {
        $role = $this->session->userdata('userrole');
        $this->data['pagetitle'] = 'Add New Schedule ('. $role . ')';
        $this->data['pagebody'] = 'fightsAdmin';
        $this->render();
    }

    public function edit()
    {
        $role = $this->session->userdata('userrole');
        $this->data['pagetitle'] = 'Add New Schedule ('. $role . ')';
        $this->data['pagebody'] = 'addflights';
        $this->render();
    }

    public function delete($id)
    {
        $current = $this->flightsdata->get($id);
        if ($current != NULL)
            $this->flightsdata->delete($id);
        redirect('/flights');
    }
}