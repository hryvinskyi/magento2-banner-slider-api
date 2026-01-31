<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api\Image;

/**
 * Image crop processor interface
 *
 * @api
 */
interface CropProcessorInterface
{
    /**
     * Crop and resize image to target dimensions
     *
     * @param string $sourceImagePath Absolute path to source image
     * @param int $cropX Crop X coordinate
     * @param int $cropY Crop Y coordinate
     * @param int $cropWidth Crop width from source
     * @param int $cropHeight Crop height from source
     * @param int $targetWidth Output width
     * @param int $targetHeight Output height
     * @param string $destinationPath Absolute path for output image
     * @return string Path to the cropped image
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function crop(
        string $sourceImagePath,
        int $cropX,
        int $cropY,
        int $cropWidth,
        int $cropHeight,
        int $targetWidth,
        int $targetHeight,
        string $destinationPath
    ): string;

    /**
     * Check if the image processing adapter is available
     *
     * @return bool
     */
    public function isAdapterAvailable(): bool;

    /**
     * Get the name of the available adapter
     *
     * @return string|null
     */
    public function getAvailableAdapterName(): ?string;
}
