<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api;

use Hryvinskyi\BannerSliderApi\Api\Data\SliderInterface;
use Hryvinskyi\BannerSliderApi\Api\Data\SliderSearchResultsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Slider repository interface
 *
 * @api
 */
interface SliderRepositoryInterface
{
    /**
     * Save slider
     *
     * @param SliderInterface $slider
     * @return SliderInterface
     * @throws CouldNotSaveException
     */
    public function save(SliderInterface $slider): SliderInterface;

    /**
     * Get slider by ID
     *
     * @param int $sliderId
     * @return SliderInterface
     * @throws NoSuchEntityException
     */
    public function getById(int $sliderId): SliderInterface;

    /**
     * Retrieve sliders matching the specified criteria
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return SliderSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): SliderSearchResultsInterface;

    /**
     * Delete slider
     *
     * @param SliderInterface $slider
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete(SliderInterface $slider): bool;

    /**
     * Delete slider by ID
     *
     * @param int $sliderId
     * @return bool
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function deleteById(int $sliderId): bool;
}
