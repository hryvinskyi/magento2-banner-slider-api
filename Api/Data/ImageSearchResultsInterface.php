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
 * Image search results interface
 *
 * @api
 */
interface ImageSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get images list
     *
     * @return \Hryvinskyi\BannerSliderApi\Api\Data\ImageInterface[]
     */
    public function getItems(): array;

    /**
     * Set images list
     *
     * @param \Hryvinskyi\BannerSliderApi\Api\Data\ImageInterface[] $items
     * @return $this
     */
    public function setItems(array $items): ImageSearchResultsInterface;
}
