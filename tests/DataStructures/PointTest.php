<?php namespace Geom;

require_once __DIR__ . '/../../src/DataStructures/Point.php';

class PointTest extends \PHPUnit_Framework_TestCase {

    public function testToString() {
        $point = new Point(8, 5);
        $this->assertEquals('(8,5)', (string) $point);
    }
}
