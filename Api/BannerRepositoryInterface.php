<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api;

use Hryvinskyi\BannerSliderApi\Api\Data\BannerInterface;
use Hryvinskyi\BannerSliderApi\Api\Data\BannerSearchResultsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Banner repository interface
 *
 * @api
 */
interface BannerRepositoryInterface
{
    /**
     * Save banner
     *
     * @param BannerInterface $banner
     * @return BannerInterface
     * @throws CouldNotSaveException
     */
    public function save(BannerInterface $banner): BannerInterface;

    /**
     * Get banner by ID
     *
     * @param int $bannerId
     * @return BannerInterface
     * @throws NoSuchEntityException
     */
    public function getById(int $bannerId): BannerInterface;

    /**
     * Retrieve banners matching the specified criteria
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return BannerSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): BannerSearchResultsInterface;

    /**
     * Delete banner
     *
     * @param BannerInterface $banner
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete(BannerInterface $banner): bool;

    /**
     * Delete banner by ID
     *
     * @param int $bannerId
     * @return bool
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function deleteById(int $bannerId): bool;
}
