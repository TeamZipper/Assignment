<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fleet extends Application {

    function __construct() {
        parent::__construct();
    }

    /**
     * Fleet listing page for our app
     */
    public function index() {
        // this is the view we want shown
        $this->data['pagebody'] = 'fleet';

        // build the list of planes, to pass on to our view
        $source = $this->fleetdata->all();

        // pass on the data to present, as the "planes" view parameter
        $this->data['planes'] = $source;

        $this->render();
    }

    /**
     * Show just one actor.
     * Moved here to make it easy to implement other controllers
     */
    public function show($key) {
        // this is the view we want shown
        $this->data['pagebody'] = 'plane';

        // build the list of planes, to pass on to our view
        $source = $this->fleetdata->getPlane($key);

        // pass on the data to present, adding the author record's fields
        $this->data = array_merge($this->data, (array) $source);

        $this->render();
    }

}
