<?php

/**
 * Description of FlightTest
 *
 * @author Paul
 */
class FlightTest extends PHPUnit_Framework_TestCase {
    
    private $flight;

    public function setUp() 
    {
        $this->flight = new Flight();
    }

    public function testSetValid() 
    {
        /*$flight = $this->flight->setFlight("Do stuff");
        $scheduled = $this->flight->setScheduled(1);
        $estimate = $this->flight->setEstimated(1);
        $airline = $this->flight->setAirline(2);
        $to = $this->flight->setTo("Do stuff");
        $terminal = $this->flight->setTerminal(1);
        $gate = $this->flight->setGate(1);
        $status = $this->flight->setGate(2);
        
        $this->assertEquals("Do stuff", $flight);
        $this->assertEquals(1, $scheduled);
        $this->assertEquals(1, $estimate);
        $this->assertEquals(2, $airline);
        $this->assertEquals("Do stuff", $to);
        $this->assertEquals(1, $terminal);
        $this->assertEquals(1, $gate);
        $this->assertEquals(2, $status);*/
    }
    
    public function testSetInvalid()
    {
        /*$flight = $this->flight->setFlight("Do stuff");
        $scheduled = $this->flight->setScheduled(1);
        $estimate = $this->flight->setEstimated(1);
        $airline = $this->flight->setAirline(2);
        $to = $this->flight->setTo("Do stuff");
        $terminal = $this->flight->setTerminal(1);
        $gate = $this->flight->setGate(1);
        $status = $this->flight->setGate(2);
        
        $this->assertEquals("Do stuff", $flight);
        $this->assertEquals(1, $scheduled);
        $this->assertEquals(1, $estimate);
        $this->assertEquals(2, $airline);
        $this->assertEquals("Do stuff", $to);
        $this->assertEquals(1, $terminal);
        $this->assertEquals(1, $gate);
        $this->assertEquals(2, $status);*/
    }
}
