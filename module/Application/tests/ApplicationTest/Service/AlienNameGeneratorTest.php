<?php
/**
 * AlienNameGeneratorTest.php
 *
 * @date        22/10/2014
 * @author      Frederic Dewinne
 * @file        AlienNameGeneratorTest.php
 * @copyright   Copyright (c) continuousphp - All rights reserved
 * @license     http://opensource.org/licenses/BSD-3-Clause
 */

namespace ApplicationTest\Service;

use Application\Service\AlienNameGenerator;

class AlienNameGeneratorTest extends \PHPUnit_Framework_TestCase
{

    public function testGetNameReturnsRightLengthName()
    {
        $service = new AlienNameGenerator();

        $this->assertRegExp("/^\S{8}$/", $service->getName(4));
    }
}
