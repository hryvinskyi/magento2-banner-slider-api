<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api\Image;

/**
 * Binary-based image format converter interface
 *
 * @api
 */
interface BinaryConverterInterface
{
    /**
     * Convert image to target format using command-line binary
     *
     * @param string $sourcePath Absolute path to source image
     * @param string $destinationPath Absolute path to destination image
     * @param int $quality Quality setting 1-100
     * @return bool True if conversion successful
     */
    public function convert(string $sourcePath, string $destinationPath, int $quality): bool;

    /**
     * Check if the converter is available (binary exists and is executable)
     *
     * @return bool
     */
    public function isAvailable(): bool;

    /**
     * Get the target format extension
     *
     * @return string
     */
    public function getFormat(): string;
}
