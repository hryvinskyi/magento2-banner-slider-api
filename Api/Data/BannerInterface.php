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
 * Banner entity interface
 *
 * @api
 */
interface BannerInterface extends ExtensibleDataInterface
{
    public const BANNER_ID = 'banner_id';
    public const SLIDER_ID = 'slider_id';
    public const NAME = 'name';
    public const IMAGE = 'image';
    public const VIDEO_URL = 'video_url';
    public const VIDEO_ASPECT_RATIO = 'video_aspect_ratio';
    public const VIDEO_PATH = 'video_path';
    public const VIDEO_AS_BACKGROUND = 'video_as_background';
    public const STATUS = 'status';
    public const TYPE = 'type';
    public const CONTENT = 'content';
    public const LINK_URL = 'link_url';
    public const TITLE = 'title';
    public const OPEN_IN_NEW_TAB = 'open_in_new_tab';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';
    public const FROM_DATE = 'from_date';
    public const TO_DATE = 'to_date';
    public const POSITION = 'position';
    public const IS_PRELOAD = 'is_preload';

    public const TYPE_IMAGE = 0;
    public const TYPE_VIDEO = 1;
    public const TYPE_CUSTOM = 2;

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
    public function setBannerId(?int $bannerId): BannerInterface;

    /**
     * Get associated slider ID
     *
     * @return int|null
     */
    public function getSliderId(): ?int;

    /**
     * Set associated slider ID
     *
     * @param int|null $sliderId
     * @return $this
     */
    public function setSliderId(?int $sliderId): BannerInterface;

    /**
     * Get banner name
     *
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * Set banner name
     *
     * @param string|null $name
     * @return $this
     */
    public function setName(?string $name): BannerInterface;

    /**
     * Get desktop image path
     *
     * @return string|null
     */
    public function getImage(): ?string;

    /**
     * Set desktop image path
     *
     * @param string|null $image
     * @return $this
     */
    public function setImage(?string $image): BannerInterface;

    /**
     * Get video URL (for external videos like YouTube, Vimeo)
     *
     * @return string|null
     */
    public function getVideoUrl(): ?string;

    /**
     * Set video URL
     *
     * @param string|null $videoUrl
     * @return $this
     */
    public function setVideoUrl(?string $videoUrl): BannerInterface;

    /**
     * Get video aspect ratio (e.g., "16:9", "4:3")
     *
     * @return string|null
     */
    public function getVideoAspectRatio(): ?string;

    /**
     * Set video aspect ratio
     *
     * @param string|null $videoAspectRatio
     * @return $this
     */
    public function setVideoAspectRatio(?string $videoAspectRatio): BannerInterface;

    /**
     * Get local video file path
     *
     * @return string|null
     */
    public function getVideoPath(): ?string;

    /**
     * Set local video file path
     *
     * @param string|null $videoPath
     * @return $this
     */
    public function setVideoPath(?string $videoPath): BannerInterface;

    /**
     * Check if video should play as background (autoplay, loop, muted, no controls)
     *
     * @return bool
     */
    public function isVideoAsBackground(): bool;

    /**
     * Set video as background mode
     *
     * @param bool $videoAsBackground
     * @return $this
     */
    public function setVideoAsBackground(bool $videoAsBackground): BannerInterface;

    /**
     * Get banner status
     *
     * @return int|null
     */
    public function getStatus(): ?int;

    /**
     * Set banner status
     *
     * @param int|null $status
     * @return $this
     */
    public function setStatus(?int $status): BannerInterface;

    /**
     * Get banner type (image, video, custom)
     *
     * @return int|null
     */
    public function getType(): ?int;

    /**
     * Set banner type
     *
     * @param int|null $type
     * @return $this
     */
    public function setType(?int $type): BannerInterface;

    /**
     * Get custom HTML content
     *
     * @return string|null
     */
    public function getContent(): ?string;

    /**
     * Set custom HTML content
     *
     * @param string|null $content
     * @return $this
     */
    public function setContent(?string $content): BannerInterface;

    /**
     * Get banner link URL
     *
     * @return string|null
     */
    public function getLinkUrl(): ?string;

    /**
     * Set banner link URL
     *
     * @param string|null $linkUrl
     * @return $this
     */
    public function setLinkUrl(?string $linkUrl): BannerInterface;

    /**
     * Get banner title/alt text
     *
     * @return string|null
     */
    public function getTitle(): ?string;

    /**
     * Set banner title/alt text
     *
     * @param string|null $title
     * @return $this
     */
    public function setTitle(?string $title): BannerInterface;

    /**
     * Check if link should open in new tab
     *
     * @return bool
     */
    public function isOpenInNewTab(): bool;

    /**
     * Set whether link should open in new tab
     *
     * @param bool $openInNewTab
     * @return $this
     */
    public function setOpenInNewTab(bool $openInNewTab): BannerInterface;

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
    public function setCreatedAt(?string $createdAt): BannerInterface;

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
    public function setUpdatedAt(?string $updatedAt): BannerInterface;

    /**
     * Get active from date
     *
     * @return string|null
     */
    public function getFromDate(): ?string;

    /**
     * Set active from date
     *
     * @param string|null $fromDate
     * @return $this
     */
    public function setFromDate(?string $fromDate): BannerInterface;

    /**
     * Get active to date
     *
     * @return string|null
     */
    public function getToDate(): ?string;

    /**
     * Set active to date
     *
     * @param string|null $toDate
     * @return $this
     */
    public function setToDate(?string $toDate): BannerInterface;

    /**
     * Get display position/sort order
     *
     * @return int|null
     */
    public function getPosition(): ?int;

    /**
     * Set display position/sort order
     *
     * @param int|null $position
     * @return $this
     */
    public function setPosition(?int $position): BannerInterface;

    /**
     * Check if image should be preloaded in head
     *
     * @return bool
     */
    public function isPreloadEnabled(): bool;

    /**
     * Set whether image should be preloaded in head
     *
     * @param bool $isPreload
     * @return $this
     */
    public function setIsPreload(bool $isPreload): BannerInterface;

    /**
     * Retrieve existing extension attributes object or create a new one
     *
     * @return \Hryvinskyi\BannerSliderApi\Api\Data\BannerExtensionInterface|null
     */
    public function getExtensionAttributes(): ?BannerExtensionInterface;

    /**
     * Set an extension attributes object
     *
     * @param \Hryvinskyi\BannerSliderApi\Api\Data\BannerExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(BannerExtensionInterface $extensionAttributes): BannerInterface;
}
