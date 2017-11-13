<?php

/**
 * About.
 * The controller that sets up the about page.
 * 
 * @author Paul
 */
class About extends Application {

    /**
     * Shows the page.
     */
    public function index() {
        // this is the view we want shown
        $this->data['pagebody'] = 'about';

        $this->render();
    }
}
