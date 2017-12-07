<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {
    function __construct() {
        parent::__construct();

    }

    /**
     * Homepage for our app
     */
    public function index() {
        // this is the view we want shown
        $this->data['pagebody'] = 'homepage';
           
         // pass on the data to present, as the "planes" view parameter
        $planes = $this->data['planes'] = $this->fleetdata->all();

        // pass on the data to present, as the "airlines" view parameter
        $airports = $this->data['airports'] = $this->ourAirlines();
        
        $this->data['planeCount'] = count($planes);
        $this->data['flightCount'] = count($airports);

        $this->render();
    }

    
    private function ourAirlines() {
        $this->load->model('Dbaccess');
        $all = $this->Dbaccess->getAirlines();
        $outputUnconverted; 
        $output = array();
        
        foreach ($all as $an)
            if ($an['id'] === 'zipper')
                $outputUnconverted = $an;
        
        foreach ($outputUnconverted as $bad => $good)
            if ($bad != 'id')
                $output[] = array('id' => $good);
        
        return $output;
    }
    
    public function show($key) {
        // this is the view we want shown
        $this->data['pagebody'] = 'info';

        // build the list of planes, to pass on to our view
        $source = $this->ourAirlines()['id'];

        // pass on the data to present, adding the author record's fields
        $this->data = array_merge($this->data, (array) $source);

        $this->render();
    }

}
