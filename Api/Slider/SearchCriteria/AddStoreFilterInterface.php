<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api\Slider\SearchCriteria;

use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Filter sliders by store
 *
 * @api
 */
interface AddStoreFilterInterface
{
    /**
     * Apply store filter to search criteria
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @param int $storeId
     * @return SearchCriteriaInterface
     */
    public function apply(SearchCriteriaInterface $searchCriteria, int $storeId): SearchCriteriaInterface;
}
