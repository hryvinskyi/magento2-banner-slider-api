<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api\Slider\Locator;

use Hryvinskyi\BannerSliderApi\Api\Data\SliderInterface;

/**
 * Locator interface for retrieving slider by location
 *
 * @api
 */
interface SliderLocatorInterface
{
    /**
     * Get slider by location identifier
     *
     * @param string $location
     * @return SliderInterface|null
     */
    public function getByLocation(string $location): ?SliderInterface;
}
