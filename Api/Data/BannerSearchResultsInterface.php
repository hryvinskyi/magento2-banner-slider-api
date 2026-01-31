<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Banner search results interface
 *
 * @api
 */
interface BannerSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get banners list
     *
     * @return \Hryvinskyi\BannerSliderApi\Api\Data\BannerInterface[]
     */
    public function getItems(): array;

    /**
     * Set banners list
     *
     * @param \Hryvinskyi\BannerSliderApi\Api\Data\BannerInterface[] $items
     * @return $this
     */
    public function setItems(array $items): BannerSearchResultsInterface;
}
