<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api;

use Hryvinskyi\BannerSliderApi\Api\Data\ImageInterface;
use Hryvinskyi\BannerSliderApi\Api\Data\ImageSearchResultsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Image repository interface
 *
 * @api
 */
interface ImageRepositoryInterface
{
    /**
     * Save image
     *
     * @param ImageInterface $image
     * @return ImageInterface
     * @throws CouldNotSaveException
     */
    public function save(ImageInterface $image): ImageInterface;

    /**
     * Get image by ID
     *
     * @param int $imageId
     * @return ImageInterface
     * @throws NoSuchEntityException
     */
    public function getById(int $imageId): ImageInterface;

    /**
     * Retrieve images matching the specified criteria
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return ImageSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): ImageSearchResultsInterface;

    /**
     * Delete image
     *
     * @param ImageInterface $image
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete(ImageInterface $image): bool;

    /**
     * Delete image by ID
     *
     * @param int $imageId
     * @return bool
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function deleteById(int $imageId): bool;
}
