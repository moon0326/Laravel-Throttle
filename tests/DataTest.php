<?php

/*
 * This file is part of Laravel Throttle.
 *
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\Tests\Throttle;

use GrahamCampbell\TestBench\AbstractTestCase as AbstractTestBenchTestCase;
use GrahamCampbell\Throttle\Data;

/**
 * This is the data test class.
 *
 * @author Graham Campbell <graham@mineuk.com>
 */
class DataTest extends AbstractTestBenchTestCase
{
    public function testGetIp()
    {
        $data = $this->getData();

        $this->assertSame('127.0.0.1', $data->getIp());
    }

    public function testGetRoute()
    {
        $data = $this->getData();

        $this->assertSame('https://google.co.uk/', $data->getRoute());
    }

    public function testGetRouteKey()
    {
        $data = $this->getData();

        $this->assertSame('7f0b5fb00418ce23a73fb23b055519cad18033ff', $data->getRouteKey());
    }

    public function testGetLimit()
    {
        $data = $this->getData();

        $this->assertSame(123, $data->getLimit());
    }

    public function testGetTime()
    {
        $data = $this->getData();

        $this->assertSame(321, $data->getTime());
    }

    public function testGetKey()
    {
        $data = $this->getData();

        $this->assertSame('9fa39d579031694fbc8e2931aa354df18883e5f2', $data->getKey());
    }

    protected function getData()
    {
        return new Data('127.0.0.1', 'https://google.co.uk/', 123, 321);
    }
}
