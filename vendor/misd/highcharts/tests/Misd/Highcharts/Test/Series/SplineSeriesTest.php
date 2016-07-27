<?php

/*
 * This file is part of the PHP Highcharts library.
 *
 * (c) University of Cambridge
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Misd\Highcharts\Test\Series;

use Misd\Highcharts\Series\SplineSeries;

class SplineSeriesTest extends AbstractSeriesTest
{
    public function getSeries()
    {
        return new SplineSeries();
    }

    public function testFactory()
    {
        $this->assertInstanceOf('Misd\Highcharts\Series\SplineSeriesInterface', SplineSeries::factory());
    }
}
