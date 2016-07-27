<?php

/*
 * This file is part of the PHP Highcharts library.
 *
 * (c) University of Cambridge
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Misd\Highcharts\Series;

use Misd\Highcharts\Exception\InvalidArgumentException;
use Misd\Highcharts\Series\State\SolidHoverStateInterface;

/**
 * Pie chart series interface.
 *
 * @author Chris Wilkinson <chris.wilkinson@admin.cam.ac.uk>
 */
interface PieSeriesInterface extends SeriesInterface
{
    /**
     * Gets the x-position.
     *
     * Use `isXPositionAPercentage()` to determine if it is a percentage or a
     * pixel value.
     *
     * @return int X-position.
     */
    public function getXPosition();

    /**
     * Whether the x-position is a percentage value.
     *
     * @return bool `true` if it is a percentage value, `false` if it is pixel.
     */
    public function isXPositionAPercentage();

    /**
     * Sets the x-position.
     *
     * @param int|null $xPosition  X-position, or `null` to remove the existing value.
     * @param bool     $percentage `true` if the x-position if a percentage value, `false` if it is pixel.
     *
     * @return self Reference to the series.
     *
     * @throws InvalidArgumentException If an argument is invalid.
     */
    public function setXPosition($xPosition, $percentage = false);

    /**
     * Gets the y-position.
     *
     * Use `isYPositionAPercentage()` to determine if it is a percentage or a
     * pixel value.
     *
     * @return int Y-position.
     */
    public function getYPosition();

    /**
     * Whether the y-position is a percentage value.
     *
     * @return bool `true` if it is a percentage value, `false` if it is pixel.
     */
    public function isYPositionAPercentage();

    /**
     * Sets the y-position.
     *
     * @param int  $yPosition  Y-position, or `null` to remove the existing value.
     * @param bool $percentage `true` if the y-position if a percentage value, `false` if it is pixel.
     *
     * @return self Reference to the series.
     *
     * @throws InvalidArgumentException If an argument is invalid.
     */
    public function setYPosition($yPosition, $percentage = false);

    /**
     * Gets the size.
     *
     * Use `isSizeAPercentage()` to determine if it is a percentage or a pixel
     * value.
     *
     * @return int Size.
     */
    public function getSize();

    /**
     * Whether the size is a percentage value.
     *
     * @return bool `true` if it is a percentage value, `false` if it is pixel.
     */
    public function isSizeAPercentage();

    /**
     * Sets the size
     *
     * @param int  $size       Size.
     * @param bool $percentage `true` if the y-position if a percentage value, `false` if it is pixel.
     *
     * @return self Reference to the series.
     */
    public function setSize($size, $percentage = true);

    /**
     * Gets the labels distance.
     *
     * @return int Labels distance.
     */
    public function getLabelsDistance();

    /**
     * Sets the labels distance.
     *
     * @param int|null $labelsDistance Labels distance, or `null` to remove the existing value.
     *
     * @return self Reference to the series.
     *
     * @throws InvalidArgumentException If an argument is invalid.
     */
    public function setLabelsDistance($labelsDistance);

    /**
     * {@inheritdoc}
     *
     * @return SolidHoverStateInterface Hover state.
     */
    public function getHoverState();
}
