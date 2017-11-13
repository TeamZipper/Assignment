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
class DBAccess extends CI_Model {

    private $ctx;

    public function __construct() {
        parent::__construct();

        $arrContextOptions = array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
            ),
        );

        $this->ctx = stream_context_create($arrContextOptions);
    }

    public function getAirlines() {
        return json_decode(
                file_get_contents('https://wacky.jlparry.com/info/airlines/'
                        ,false
                        ,$this->ctx)
                , true);
    }

    public function getAirports() {
        return json_decode(
                file_get_contents('https://wacky.jlparry.com/info/airports/'
                        ,false
                        ,$this->ctx)
                , true);
    }

    public function getAirplanes() {
        return json_decode(
                file_get_contents('https://wacky.jlparry.com/info/airplanes/'
                        ,false
                        ,$this->ctx)
                , true);
    }

    public function getRegions() {
        return json_decode(
                file_get_contents('https://wacky.jlparry.com/info/regions/'
                        ,false
                        ,$this->ctx)
                , true);
    }

}
