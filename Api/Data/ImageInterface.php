<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api\Data;

/**
 * Banner image entity interface
 *
 * @api
 */
interface ImageInterface
{
    public const IMAGE_ID = 'image_id';
    public const BANNER_ID = 'banner_id';
    public const ALT = 'alt';
    public const TITLE = 'title';
    public const STATUS = 'status';
    public const IMAGE = 'image';
    public const PICTURE_MEDIA = 'picture_media';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    /**
     * Get image ID
     *
     * @return int|null
     */
    public function getImageId(): ?int;

    /**
     * Set image ID
     *
     * @param int|null $imageId
     * @return $this
     */
    public function setImageId(?int $imageId): ImageInterface;

    /**
     * Get associated banner ID
     *
     * @return int|null
     */
    public function getBannerId(): ?int;

    /**
     * Set associated banner ID
     *
     * @param int|null $bannerId
     * @return $this
     */
    public function setBannerId(?int $bannerId): ImageInterface;

    /**
     * Get image alt text
     *
     * @return string|null
     */
    public function getAlt(): ?string;

    /**
     * Set image alt text
     *
     * @param string|null $alt
     * @return $this
     */
    public function setAlt(?string $alt): ImageInterface;

    /**
     * Get image title
     *
     * @return string|null
     */
    public function getTitle(): ?string;

    /**
     * Set image title
     *
     * @param string|null $title
     * @return $this
     */
    public function setTitle(?string $title): ImageInterface;

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
    public function setStatus(?int $status): ImageInterface;

    /**
     * Get image path
     *
     * @return string|null
     */
    public function getImage(): ?string;

    /**
     * Set image path
     *
     * @param string|null $image
     * @return $this
     */
    public function setImage(?string $image): ImageInterface;

    /**
     * Get picture media breakpoint value
     *
     * @return string|null
     */
    public function getPictureMedia(): ?string;

    /**
     * Set picture media breakpoint value
     *
     * @param string|null $pictureMedia
     * @return $this
     */
    public function setPictureMedia(?string $pictureMedia): ImageInterface;

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
    public function setCreatedAt(?string $createdAt): ImageInterface;

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
    public function setUpdatedAt(?string $updatedAt): ImageInterface;
}
