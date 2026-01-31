<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api\Image;

/**
 * Resolves paths to image processing binaries (cwebp, cavif, magick)
 *
 * @api
 */
interface BinaryPathResolverInterface
{
    /**
     * Get path to cwebp binary
     *
     * @return string|null Path to cwebp binary or null if not available
     */
    public function getCwebpPath(): ?string;

    /**
     * Get path to cavif binary
     *
     * @return string|null Path to cavif binary or null if not available
     */
    public function getCavifPath(): ?string;

    /**
     * Check if cwebp binary is available and executable
     *
     * @return bool
     */
    public function isCwebpAvailable(): bool;

    /**
     * Check if cavif binary is available and executable
     *
     * @return bool
     */
    public function isCavifAvailable(): bool;

    /**
     * Get the base directory where binaries are stored
     *
     * @return string
     */
    public function getBinDirectory(): string;
}
