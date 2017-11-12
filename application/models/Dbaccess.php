<?php
/**
 * DBAccess.
 * This class is for accessing the WACKY server data.
 *
 * @author Andrew
 */
class DBAccess extends CI_Model {
    // The stream context to be used when accessing the WACKY server data.
    private $ctx;

    /**
     * Constructor for DBAccess.
     * Initializes ctx.
     */
    public function __construct() {
        parent::__construct();

        // The context options for ctx.
        // Prevents peer verification from occuring, 
        // because peer verification was failing.
        $arrContextOptions = array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
            ),
        );
        
        $this->ctx = stream_context_create($arrContextOptions);
    }

    /**
     * Retrieves a .json file containing information on all airlines from
     * https://wacky.jlparry.com/info/airlines/ and converts it to an
     * associative array for simplicity.
     * 
     * @return an associative array containing info on all airlines.
     */
    public function getAirlines() {
        return json_decode(
                file_get_contents('https://wacky.jlparry.com/info/airlines/'
                        ,false
                        ,$this->ctx)
                , true);
    }

    /**
     * Retrieves a .json file containing information on all airports from
     * https://wacky.jlparry.com/info/airports/ and converts it to an
     * associative array for simplicity.
     * 
     * @return an associative array containing info on all airports.
     */
    public function getAirports() {
        return json_decode(
                file_get_contents('https://wacky.jlparry.com/info/airports/'
                        ,false
                        ,$this->ctx)
                , true);
    }

    /**
     * Retrieves a .json file containing information on all airplanes from
     * https://wacky.jlparry.com/info/airplanes/ and converts it to an
     * associative array for simplicity.
     * 
     * @return an associative array containing info on all airplanes.
     */
    public function getAirplanes() {
        return json_decode(
                file_get_contents('https://wacky.jlparry.com/info/airplanes/'
                        ,false
                        ,$this->ctx)
                , true);
    }

    /**
     * Retrieves a .json file containing information on all regions from
     * https://wacky.jlparry.com/info/regions/ and converts it to an
     * associative array for simplicity.
     * 
     * @return an associative array containing info on all regions.
     */
    public function getRegions() {
        return json_decode(
                file_get_contents('https://wacky.jlparry.com/info/regions/'
                        ,false
                        ,$this->ctx)
                , true);
    }

}
