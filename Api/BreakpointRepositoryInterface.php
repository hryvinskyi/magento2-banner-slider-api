<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api;

use Hryvinskyi\BannerSliderApi\Api\Data\BreakpointInterface;
use Hryvinskyi\BannerSliderApi\Api\Data\BreakpointSearchResultsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Breakpoint repository interface
 *
 * @api
 */
interface BreakpointRepositoryInterface
{
    /**
     * Save breakpoint
     *
     * @param BreakpointInterface $breakpoint
     * @return BreakpointInterface
     * @throws CouldNotSaveException
     */
    public function save(BreakpointInterface $breakpoint): BreakpointInterface;

    /**
     * Get breakpoint by ID
     *
     * @param int $breakpointId
     * @return BreakpointInterface
     * @throws NoSuchEntityException
     */
    public function getById(int $breakpointId): BreakpointInterface;

    /**
     * Retrieve breakpoints matching the specified criteria
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return BreakpointSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): BreakpointSearchResultsInterface;

    /**
     * Get breakpoints by slider ID
     *
     * @param int $sliderId
     * @return BreakpointInterface[]
     */
    public function getBySliderId(int $sliderId): array;

    /**
     * Delete breakpoint
     *
     * @param BreakpointInterface $breakpoint
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete(BreakpointInterface $breakpoint): bool;

    /**
     * Delete breakpoint by ID
     *
     * @param int $breakpointId
     * @return bool
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function deleteById(int $breakpointId): bool;
}
