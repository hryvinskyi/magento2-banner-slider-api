<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Base interface for search criteria filters
 *
 * @api
 */
interface SearchCriteriaFilterInterface
{
    /**
     * Apply filter to search criteria
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return SearchCriteriaInterface
     */
    public function apply(SearchCriteriaInterface $searchCriteria): SearchCriteriaInterface;
}
