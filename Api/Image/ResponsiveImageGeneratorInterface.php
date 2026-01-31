<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api\Image;

use Hryvinskyi\BannerSliderApi\Api\Data\BreakpointInterface;
use Hryvinskyi\BannerSliderApi\Api\Data\ResponsiveCropInterface;

/**
 * Responsive image generator interface
 *
 * @api
 */
interface ResponsiveImageGeneratorInterface
{
    /**
     * Generate all responsive images for a crop configuration
     *
     * @param ResponsiveCropInterface $crop
     * @param BreakpointInterface $breakpoint
     * @return ResponsiveCropInterface Updated crop with generated image paths
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function generate(ResponsiveCropInterface $crop, BreakpointInterface $breakpoint): ResponsiveCropInterface;

    /**
     * Generate responsive images for all breakpoints of a banner
     *
     * @param int $bannerId
     * @return ResponsiveCropInterface[] Generated crops
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function generateForBanner(int $bannerId): array;

    /**
     * Delete generated images for a crop
     *
     * @param ResponsiveCropInterface $crop
     * @return bool
     */
    public function deleteGeneratedImages(ResponsiveCropInterface $crop): bool;

    /**
     * Get the base path for responsive images
     *
     * @return string
     */
    public function getResponsiveImageBasePath(): string;

    /**
     * Get the URL path for responsive images
     *
     * @return string
     */
    public function getResponsiveImageBaseUrl(): string;
}
