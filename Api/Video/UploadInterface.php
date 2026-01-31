<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api\Video;

/**
 * Video upload service interface
 *
 * @api
 */
interface UploadInterface
{
    /**
     * Upload video file to temporary storage
     *
     * @param string $fileId Form file input name
     * @return array{name: string, type: string, tmp_name: string, error: int, path: string, file: string, url: string}
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function uploadToTmp(string $fileId): array;

    /**
     * Move video from temporary to permanent storage
     *
     * @param string $fileName
     * @return string Final file path
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function moveFromTmp(string $fileName): string;

    /**
     * Get allowed video MIME types
     *
     * @return string[]
     */
    public function getAllowedMimeTypes(): array;

    /**
     * Get allowed video file extensions
     *
     * @return string[]
     */
    public function getAllowedExtensions(): array;

    /**
     * Get maximum file size in bytes
     *
     * @return int
     */
    public function getMaxFileSize(): int;
}
