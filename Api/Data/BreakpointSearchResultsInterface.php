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
 * Breakpoint search results interface
 *
 * @api
 */
interface BreakpointSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get breakpoints list
     *
     * @return \Hryvinskyi\BannerSliderApi\Api\Data\BreakpointInterface[]
     */
    public function getItems(): array;

    /**
     * Set breakpoints list
     *
     * @param \Hryvinskyi\BannerSliderApi\Api\Data\BreakpointInterface[] $items
     * @return $this
     */
    public function setItems(array $items): BreakpointSearchResultsInterface;
}
