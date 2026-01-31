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
 * Locator interface for retrieving sliders with context validation
 *
 * @api
 */
interface SliderLocatorInterface
{
    /**
     * Get slider by location identifier
     *
     * @param string $location
     * @param int $storeId
     * @param int $customerGroupId
     * @return SliderInterface|null
     */
    public function getByLocation(string $location, int $storeId, int $customerGroupId): ?SliderInterface;

    /**
     * Get slider by ID with store and customer group validation
     *
     * @param int $sliderId
     * @param int $storeId
     * @param int $customerGroupId
     * @return SliderInterface|null
     */
    public function getById(int $sliderId, int $storeId, int $customerGroupId): ?SliderInterface;
}
