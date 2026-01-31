<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api\Image;

/**
 * Image path configuration interface
 *
 * @api
 */
interface ImagePathConfigInterface
{
    /**
     * Get the base path for responsive images
     *
     * @return string
     */
    public function getResponsivePath(): string;
}
