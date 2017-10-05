<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of india
 *
 * @author Stephanie
 */
class India extends CI_Controller{
    //put your code here
    // what will this reference?
    public function index() {
        // what will this reference?
        $source = '../data/logo.png'; 
        // note that we could have referenced an image anywhere on our system

        // set the mime type for that image (jpeg, png, etc)
        header("Content-type: image/png"); 
        header('Content-Disposition: inline');
        readfile($source); // dish it
    }
    
}
