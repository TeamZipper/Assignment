<?php

/**
 * Description of PlaneTest
 *
 * @author Paul
 */
class PlaneTest extends PHPUnit_Framework_TestCase {
    
    private $plane;

    public function setUp() 
    {
        $this->plane = new Plane();
    }

    public function testSetValid() 
    {
        /*$name = $this->plane->setName("Do stuff");
        $id = $this->plane->setId(1);
        
        $this->assertEquals("Do stuff", $name);
        $this->assertEquals(1, $id);*/
    }
    
    public function testSetInvalid()
    {
        /*$name = $this->plane->setName("Do stuff");
        $id = $this->plane->setId(1);
        
        $this->assertNotEquals("Do stuff", $name);
        $this->assertNotEquals(1, $id);*/
    }
}
