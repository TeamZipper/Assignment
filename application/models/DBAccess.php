<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBAccess
 *
 * @author Andrew
 */
class DBAccess {
    public function getAirlines()
    {
        return file_get_contents('https://wacky.jlparry.com/info/airlines/');
    }
    
    public function getAirports()
    {
        return file_get_contents('https://wacky.jlparry.com/info/airports/');
    }
    
    public function getAirplanes()
    {
        return file_get_contents('https://wacky.jlparry.com/info/airplanes/');
    }
    
    public function getRegions()
    {
        return file_get_contents('https://wacky.jlparry.com/info/regions/');
    }
}
