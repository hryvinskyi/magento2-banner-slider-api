<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api\Image;

/**
 * Image format converter interface for WebP and AVIF
 *
 * @api
 */
interface FormatConverterInterface
{
    /**
     * Convert image to WebP format
     *
     * @param string $sourceImagePath Absolute path to source image
     * @param int $quality Quality setting 1-100
     * @param string|null $destinationPath Optional destination path (default: same name with .webp)
     * @return string|null Path to WebP image or null if conversion failed
     */
    public function convertToWebP(string $sourceImagePath, int $quality = 85, ?string $destinationPath = null): ?string;

    /**
     * Convert image to AVIF format
     *
     * @param string $sourceImagePath Absolute path to source image
     * @param int $quality Quality setting 1-100
     * @param string|null $destinationPath Optional destination path (default: same name with .avif)
     * @return string|null Path to AVIF image or null if conversion failed
     */
    public function convertToAvif(string $sourceImagePath, int $quality = 80, ?string $destinationPath = null): ?string;

    /**
     * Check if WebP conversion is supported
     *
     * @return bool
     */
    public function isWebPSupported(): bool;

    /**
     * Check if AVIF conversion is supported
     *
     * @return bool
     */
    public function isAvifSupported(): bool;

    /**
     * Get list of supported formats
     *
     * @return array<string, bool>
     */
    public function getSupportedFormats(): array;
}
