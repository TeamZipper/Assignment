<?php

/**
 * FleetTest.
 * Tests to ensure all planes in the fleet are valid.
 *
 * @author Andrew
 */
class FleetTest extends PHPUnit_Framework_TestCase {

    // fleet    -   The planes to be checked for validity.
    // $maxCost -   The maximum amount that can be spent on planes.
    private $fleet,
            $maxCost;

    /**
     * Initializes data.
     */
    public function setUp() {
        $data = new Fleetdata();
        $this->fleet = $data->allPlanes();
        $this->maxCost = 10000;
    }

    /**
     * Checks that all planes have full information retrieved from WACKY.
     */
    public function testPlanesValid() {
        foreach ($this->fleet as $plane)
            $this->assertNotEquals($plane, null);
    }

    /**
     * Checks that the total spent on planes does not exceed the maxCost.
     */
    public function testFleetPrice() {
        $totalCost = 0;

        foreach ($this->fleet as $plane)
            $totalCost += $plane['price'];

        $this->assertTrue($totalCost <= $this->maxCost);
    }

}
