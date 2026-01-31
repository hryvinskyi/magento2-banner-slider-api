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
 * Responsive crop search results interface
 *
 * @api
 */
interface ResponsiveCropSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get responsive crops list
     *
     * @return \Hryvinskyi\BannerSliderApi\Api\Data\ResponsiveCropInterface[]
     */
    public function getItems(): array;

    /**
     * Set responsive crops list
     *
     * @param \Hryvinskyi\BannerSliderApi\Api\Data\ResponsiveCropInterface[] $items
     * @return $this
     */
    public function setItems(array $items): ResponsiveCropSearchResultsInterface;
}
