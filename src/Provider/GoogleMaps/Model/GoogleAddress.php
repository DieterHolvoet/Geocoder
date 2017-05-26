<?php

/*
 * This file is part of the Geocoder package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace Geocoder\Provider\GoogleMaps\Model;

use Geocoder\Model\Address;

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
final class GoogleAddress extends Address
{
    /**
     * @var string|null
     */
    private $locationType;

    /**
     * @var array
     */
    private $resultType = [];

    /**
     * @param null|string $locationType
     *
     * @return GoogleAddress
     */
    public function setLocationType($locationType)
    {
        $this->locationType = $locationType;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLocationType()
    {
        return $this->locationType;
    }

    /**
     * @return array
     */
    public function getResultType()
    {
        return $this->resultType;
    }

    /**
     * @param array $resultType
     *
     * @return GoogleAddress
     */
    public function setResultType(array $resultType)
    {
        $this->resultType = $resultType;

        return $this;
    }
}