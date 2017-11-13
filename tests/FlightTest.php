<?php

/**
 * Testing valid and invalid properties of flights.
 * @author Paul
 */
class FlightTest extends PHPUnit_Framework_TestCase {
    
    // The flight on which tests will occur.
    private $flight;

    /**
     *  Initializes data.
     */
    public function setUp() 
    {
        $this->flight = new Flight();
    }

    /**
     * Tests setter with valid data.
     */
    public function testSetValid() 
    {
        $validAirport = "Long Beach Airport";
        $validAirportId = "YAZ";
        
        $this->flight->setAirport($validAirport);
        $name = $this->flight->getAirport();
        
        $this->flight->setId($validAirportId);
        $id = $this->flight->getId();
        
        $this->assertEquals($validAirport, $name);
        $this->assertEquals($validAirportId, $id);
    }
    
    /**
     *  Tests setter with invalid data.
     */
    public function testSetInvalid()
    {
        $invalidAirport = 437234;
        
        $this->flight->setAirport($invalidAirport);
        $name = $this->flight->getAirport();
        
        $this->assertNotEquals($invalidAirport, $name);
    }
}
