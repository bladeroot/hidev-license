<?php

/*
 * License plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-license
 * @package   hidev-license
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\license\tests\unit\goals;

use hidev\license\goals\LicenseGoal;

/**
 * License Goal test class.
 */
class LicenseGoalTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var LicenseGoal
     */
    protected $object;

    protected $license = 'MIT';

    protected function setUp()
    {
        $this->object = new LicenseGoal('license', null);
        $this->object->setLicense($this->license);
    }

    protected function tearDown()
    {
    }

    public function testSetLicense()
    {
        $this->object->setLicense('BSD');
        $this->assertSame('BSD', $this->object->getLicense());
    }

    public function testGetLicense()
    {
        $this->assertSame($this->license, $this->object->getLicense());
    }

    public function testGetTemplate()
    {
        $this->assertSame('licenses/MIT.twig', $this->object->getTemplate());
    }

    public function testGetUrl()
    {
        $this->assertSame('http://choosealicense.com/licenses/mit', $this->object->getUrl());
    }
}
