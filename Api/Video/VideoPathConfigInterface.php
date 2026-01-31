<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api\Video;

/**
 * Video path configuration interface
 *
 * @api
 */
interface VideoPathConfigInterface
{
    /**
     * Get the base path for video files in media directory
     *
     * @return string
     */
    public function getBasePath(): string;

    /**
     * Get the temporary path for video uploads
     *
     * @return string
     */
    public function getTmpPath(): string;

    /**
     * Get allowed MIME types for video uploads
     *
     * @return array<string>
     */
    public function getAllowedMimeTypes(): array;

    /**
     * Get allowed file extensions for video uploads
     *
     * @return array<string>
     */
    public function getAllowedExtensions(): array;

    /**
     * Get maximum file size in bytes for video uploads
     *
     * @return int
     */
    public function getMaxFileSize(): int;
}
