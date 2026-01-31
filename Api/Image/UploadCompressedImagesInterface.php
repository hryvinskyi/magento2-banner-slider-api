<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api\Image;

use Hryvinskyi\BannerSliderApi\Api\Data\ResponsiveCropInterface;
use Magento\Framework\Exception\LocalizedException;

/**
 * Interface for uploading pre-compressed images from browser
 *
 * @api
 */
interface UploadCompressedImagesInterface
{
    /**
     * Upload and store pre-compressed images for a responsive crop
     *
     * @param int $cropId
     * @param array<string, mixed> $files Uploaded files array
     * @param array<string, mixed> $params Additional parameters (crop coordinates, quality settings)
     * @return ResponsiveCropInterface Updated crop with stored image paths
     * @throws LocalizedException
     */
    public function upload(int $cropId, array $files, array $params = []): ResponsiveCropInterface;

    /**
     * Store a single compressed image file
     *
     * @param int $bannerId
     * @param string $breakpointIdentifier
     * @param string $format Format type: 'original', 'webp', 'avif'
     * @param string $tmpFilePath Temporary file path
     * @param string $mimeType MIME type of the file
     * @return string Relative media path of stored file
     * @throws LocalizedException
     */
    public function storeCompressedImage(
        int $bannerId,
        string $breakpointIdentifier,
        string $format,
        string $tmpFilePath,
        string $mimeType
    ): string;

    /**
     * Validate uploaded file
     *
     * @param string $tmpFilePath
     * @param string $mimeType
     * @return bool
     * @throws LocalizedException
     */
    public function validateUploadedFile(string $tmpFilePath, string $mimeType): bool;
}
