<?php

/**
 * Planetest.
 * For testing the Plane entity model.
 *
 * @author Paul
 */
class PlaneTest extends PHPUnit_Framework_TestCase {
    
    // The plane on which tests will occur.
    private $plane;

    /**
     *  Initializes data.
     */
    public function setUp() 
    {
        $this->plane = new Plane();
    }

    /**
     * Tests setter with valid data.
     */
    public function testSetValid() 
    {
        $validName = "heidi";
        $validId = 22;
        
        $name = $this->plane->setName($validName);
        $id = $this->plane->setId($validId);
        
        $this->assertEquals($validName, $name);
        $this->assertEquals($validId, $id);
    }
    
    /**
     *  Tests setter with invalid data.
     */
    public function testSetInvalid()
    {
        $invalidName = 16;
        
        $name = $this->plane->setName($invalidName);
        
        $this->assertNotEquals($invalidName, $name);
    }
}
