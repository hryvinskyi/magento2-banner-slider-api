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
 * Filter sliders by customer group
 *
 * @api
 */
interface AddCustomerGroupFilterInterface
{
    /**
     * Apply customer group filter to search criteria
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @param int $customerGroupId
     * @return SearchCriteriaInterface
     */
    public function apply(SearchCriteriaInterface $searchCriteria, int $customerGroupId): SearchCriteriaInterface;
}
