<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api\Banner\SearchCriteria;

use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Filter banners by slider ID
 *
 * @api
 */
interface AddSliderIdFilterInterface
{
    /**
     * Apply slider ID filter to search criteria
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @param int $sliderId
     * @return SearchCriteriaInterface
     */
    public function apply(SearchCriteriaInterface $searchCriteria, int $sliderId): SearchCriteriaInterface;
}
