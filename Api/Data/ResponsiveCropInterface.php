<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

/**
 * Responsive crop entity interface
 *
 * @api
 */
interface ResponsiveCropInterface extends ExtensibleDataInterface
{
    public const CROP_ID = 'crop_id';
    public const BANNER_ID = 'banner_id';
    public const BREAKPOINT_ID = 'breakpoint_id';
    public const SOURCE_IMAGE = 'source_image';
    public const CROP_X = 'crop_x';
    public const CROP_Y = 'crop_y';
    public const CROP_WIDTH = 'crop_width';
    public const CROP_HEIGHT = 'crop_height';
    public const CROPPED_IMAGE = 'cropped_image';
    public const WEBP_IMAGE = 'webp_image';
    public const AVIF_IMAGE = 'avif_image';
    public const GENERATE_WEBP = 'generate_webp';
    public const GENERATE_AVIF = 'generate_avif';
    public const WEBP_QUALITY = 'webp_quality';
    public const AVIF_QUALITY = 'avif_quality';
    public const SORT_ORDER = 'sort_order';
    public const STATUS = 'status';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    /**
     * Get crop ID
     *
     * @return int|null
     */
    public function getCropId(): ?int;

    /**
     * Set crop ID
     *
     * @param int|null $cropId
     * @return $this
     */
    public function setCropId(?int $cropId): ResponsiveCropInterface;

    /**
     * Get banner ID
     *
     * @return int|null
     */
    public function getBannerId(): ?int;

    /**
     * Set banner ID
     *
     * @param int|null $bannerId
     * @return $this
     */
    public function setBannerId(?int $bannerId): ResponsiveCropInterface;

    /**
     * Get breakpoint ID
     *
     * @return int|null
     */
    public function getBreakpointId(): ?int;

    /**
     * Set breakpoint ID
     *
     * @param int|null $breakpointId
     * @return $this
     */
    public function setBreakpointId(?int $breakpointId): ResponsiveCropInterface;

    /**
     * Get source image path
     *
     * @return string|null
     */
    public function getSourceImage(): ?string;

    /**
     * Set source image path
     *
     * @param string|null $sourceImage
     * @return $this
     */
    public function setSourceImage(?string $sourceImage): ResponsiveCropInterface;

    /**
     * Get crop X coordinate
     *
     * @return int|null
     */
    public function getCropX(): ?int;

    /**
     * Set crop X coordinate
     *
     * @param int|null $cropX
     * @return $this
     */
    public function setCropX(?int $cropX): ResponsiveCropInterface;

    /**
     * Get crop Y coordinate
     *
     * @return int|null
     */
    public function getCropY(): ?int;

    /**
     * Set crop Y coordinate
     *
     * @param int|null $cropY
     * @return $this
     */
    public function setCropY(?int $cropY): ResponsiveCropInterface;

    /**
     * Get crop width from source
     *
     * @return int|null
     */
    public function getCropWidth(): ?int;

    /**
     * Set crop width from source
     *
     * @param int|null $cropWidth
     * @return $this
     */
    public function setCropWidth(?int $cropWidth): ResponsiveCropInterface;

    /**
     * Get crop height from source
     *
     * @return int|null
     */
    public function getCropHeight(): ?int;

    /**
     * Set crop height from source
     *
     * @param int|null $cropHeight
     * @return $this
     */
    public function setCropHeight(?int $cropHeight): ResponsiveCropInterface;

    /**
     * Get generated cropped image path
     *
     * @return string|null
     */
    public function getCroppedImage(): ?string;

    /**
     * Set generated cropped image path
     *
     * @param string|null $croppedImage
     * @return $this
     */
    public function setCroppedImage(?string $croppedImage): ResponsiveCropInterface;

    /**
     * Get generated WebP image path
     *
     * @return string|null
     */
    public function getWebpImage(): ?string;

    /**
     * Set generated WebP image path
     *
     * @param string|null $webpImage
     * @return $this
     */
    public function setWebpImage(?string $webpImage): ResponsiveCropInterface;

    /**
     * Get generated AVIF image path
     *
     * @return string|null
     */
    public function getAvifImage(): ?string;

    /**
     * Set generated AVIF image path
     *
     * @param string|null $avifImage
     * @return $this
     */
    public function setAvifImage(?string $avifImage): ResponsiveCropInterface;

    /**
     * Check if WebP generation is enabled
     *
     * @return bool
     */
    public function isGenerateWebpEnabled(): bool;

    /**
     * Set WebP generation flag
     *
     * @param bool $generateWebp
     * @return $this
     */
    public function setGenerateWebpEnabled(bool $generateWebp): ResponsiveCropInterface;

    /**
     * Check if AVIF generation is enabled
     *
     * @return bool
     */
    public function isGenerateAvifEnabled(): bool;

    /**
     * Set AVIF generation flag
     *
     * @param bool $generateAvif
     * @return $this
     */
    public function setGenerateAvifEnabled(bool $generateAvif): ResponsiveCropInterface;

    /**
     * Get WebP quality (1-100)
     *
     * @return int|null
     */
    public function getWebpQuality(): ?int;

    /**
     * Set WebP quality (1-100)
     *
     * @param int|null $webpQuality
     * @return $this
     */
    public function setWebpQuality(?int $webpQuality): ResponsiveCropInterface;

    /**
     * Get AVIF quality (1-100)
     *
     * @return int|null
     */
    public function getAvifQuality(): ?int;

    /**
     * Set AVIF quality (1-100)
     *
     * @param int|null $avifQuality
     * @return $this
     */
    public function setAvifQuality(?int $avifQuality): ResponsiveCropInterface;

    /**
     * Get sort order
     *
     * @return int|null
     */
    public function getSortOrder(): ?int;

    /**
     * Set sort order
     *
     * @param int|null $sortOrder
     * @return $this
     */
    public function setSortOrder(?int $sortOrder): ResponsiveCropInterface;

    /**
     * Get status
     *
     * @return int|null
     */
    public function getStatus(): ?int;

    /**
     * Set status
     *
     * @param int|null $status
     * @return $this
     */
    public function setStatus(?int $status): ResponsiveCropInterface;

    /**
     * Get created at timestamp
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string;

    /**
     * Set created at timestamp
     *
     * @param string|null $createdAt
     * @return $this
     */
    public function setCreatedAt(?string $createdAt): ResponsiveCropInterface;

    /**
     * Get updated at timestamp
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string;

    /**
     * Set updated at timestamp
     *
     * @param string|null $updatedAt
     * @return $this
     */
    public function setUpdatedAt(?string $updatedAt): ResponsiveCropInterface;

    /**
     * Retrieve existing extension attributes object or create a new one
     *
     * @return \Hryvinskyi\BannerSliderApi\Api\Data\ResponsiveCropExtensionInterface|null
     */
    public function getExtensionAttributes(): ?ResponsiveCropExtensionInterface;

    /**
     * Set an extension attributes object
     *
     * @param \Hryvinskyi\BannerSliderApi\Api\Data\ResponsiveCropExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        ResponsiveCropExtensionInterface $extensionAttributes
    ): ResponsiveCropInterface;
}
