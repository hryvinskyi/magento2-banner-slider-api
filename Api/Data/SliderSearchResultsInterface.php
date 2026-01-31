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
 * Slider search results interface
 *
 * @api
 */
interface SliderSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get sliders list
     *
     * @return \Hryvinskyi\BannerSliderApi\Api\Data\SliderInterface[]
     */
    public function getItems(): array;

    /**
     * Set sliders list
     *
     * @param \Hryvinskyi\BannerSliderApi\Api\Data\SliderInterface[] $items
     * @return $this
     */
    public function setItems(array $items): SliderSearchResultsInterface;
}
