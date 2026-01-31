<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api;

use Hryvinskyi\BannerSliderApi\Api\Data\ResponsiveCropInterface;
use Hryvinskyi\BannerSliderApi\Api\Data\ResponsiveCropSearchResultsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Responsive crop repository interface
 *
 * @api
 */
interface ResponsiveCropRepositoryInterface
{
    /**
     * Save responsive crop
     *
     * @param ResponsiveCropInterface $responsiveCrop
     * @return ResponsiveCropInterface
     * @throws CouldNotSaveException
     */
    public function save(ResponsiveCropInterface $responsiveCrop): ResponsiveCropInterface;

    /**
     * Get responsive crop by ID
     *
     * @param int $cropId
     * @return ResponsiveCropInterface
     * @throws NoSuchEntityException
     */
    public function getById(int $cropId): ResponsiveCropInterface;

    /**
     * Retrieve responsive crops matching the specified criteria
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return ResponsiveCropSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): ResponsiveCropSearchResultsInterface;

    /**
     * Get responsive crops by banner ID
     *
     * @param int $bannerId
     * @return ResponsiveCropInterface[]
     */
    public function getByBannerId(int $bannerId): array;

    /**
     * Get responsive crops by multiple banner IDs
     *
     * Returns crops grouped by banner ID for efficient batch loading.
     *
     * @param array<int> $bannerIds
     * @return array<int, ResponsiveCropInterface[]>
     */
    public function getByBannerIds(array $bannerIds): array;

    /**
     * Get responsive crop by banner and breakpoint
     *
     * @param int $bannerId
     * @param int $breakpointId
     * @return ResponsiveCropInterface|null
     */
    public function getByBannerAndBreakpoint(int $bannerId, int $breakpointId): ?ResponsiveCropInterface;

    /**
     * Delete responsive crop
     *
     * @param ResponsiveCropInterface $responsiveCrop
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete(ResponsiveCropInterface $responsiveCrop): bool;

    /**
     * Delete responsive crop by ID
     *
     * @param int $cropId
     * @return bool
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function deleteById(int $cropId): bool;
}
