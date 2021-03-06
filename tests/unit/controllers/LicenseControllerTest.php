<?php

/*
 * License plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-license
 * @package   hidev-license
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\license\tests\unit\controllers;

use hidev\license\controllers\LicenseController;

/**
 * License Controller test class.
 */
class LicenseControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var LicenseController
     */
    protected $object;

    protected $license = 'MIT';

    protected function setUp()
    {
        $this->object = new LicenseController('license', null);
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
