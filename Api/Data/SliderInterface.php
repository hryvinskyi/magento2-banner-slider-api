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
 * Slider entity interface
 *
 * @api
 */
interface SliderInterface extends ExtensibleDataInterface
{
    public const SLIDER_ID = 'slider_id';
    public const NAME = 'name';
    public const STATUS = 'status';
    public const LOCATION = 'location';
    public const PRIORITY = 'priority';
    public const STORE_IDS = 'store_ids';
    public const CUSTOMER_GROUP_IDS = 'customer_group_ids';
    public const EFFECT = 'effect';
    public const AUTO_WIDTH = 'auto_width';
    public const AUTO_HEIGHT = 'auto_height';
    public const LOOP = 'loop';
    public const LAZY_LOAD = 'lazy_load';
    public const AUTO_PLAY = 'auto_play';
    public const AUTO_PLAY_TIMEOUT = 'auto_play_timeout';
    public const NAV = 'nav';
    public const DOTS = 'dots';
    public const IS_RESPONSIVE = 'is_responsive';
    public const RESPONSIVE_ITEMS = 'responsive_items';
    public const PRELOAD_BANNERS_COUNT = 'preload_banners_count';
    public const FROM_DATE = 'from_date';
    public const TO_DATE = 'to_date';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    /**
     * Get slider ID
     *
     * @return int|null
     */
    public function getSliderId(): ?int;

    /**
     * Set slider ID
     *
     * @param int|null $sliderId
     * @return $this
     */
    public function setSliderId(?int $sliderId): SliderInterface;

    /**
     * Get slider name
     *
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * Set slider name
     *
     * @param string|null $name
     * @return $this
     */
    public function setName(?string $name): SliderInterface;

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
    public function setStatus(?int $status): SliderInterface;

    /**
     * Get location identifier
     *
     * @return string|null
     */
    public function getLocation(): ?string;

    /**
     * Set location identifier
     *
     * @param string|null $location
     * @return $this
     */
    public function setLocation(?string $location): SliderInterface;

    /**
     * Get priority for ordering sliders
     *
     * @return int|null
     */
    public function getPriority(): ?int;

    /**
     * Set priority for ordering sliders
     *
     * @param int|null $priority
     * @return $this
     */
    public function setPriority(?int $priority): SliderInterface;

    /**
     * Get animation effect
     *
     * @return string|null
     */
    public function getEffect(): ?string;

    /**
     * Set animation effect
     *
     * @param string|null $effect
     * @return $this
     */
    public function setEffect(?string $effect): SliderInterface;

    /**
     * Check if auto width is enabled
     *
     * @return bool
     */
    public function isAutoWidthEnabled(): bool;

    /**
     * Set auto width enabled status
     *
     * @param bool $autoWidth
     * @return $this
     */
    public function setAutoWidthEnabled(bool $autoWidth): SliderInterface;

    /**
     * Check if auto height is enabled
     *
     * @return bool
     */
    public function isAutoHeightEnabled(): bool;

    /**
     * Set auto height enabled status
     *
     * @param bool $autoHeight
     * @return $this
     */
    public function setAutoHeightEnabled(bool $autoHeight): SliderInterface;

    /**
     * Check if loop is enabled
     *
     * @return bool
     */
    public function isLoopEnabled(): bool;

    /**
     * Set loop enabled status
     *
     * @param bool $loop
     * @return $this
     */
    public function setLoopEnabled(bool $loop): SliderInterface;

    /**
     * Check if lazy load is enabled
     *
     * @return bool
     */
    public function isLazyLoadEnabled(): bool;

    /**
     * Set lazy load enabled status
     *
     * @param bool $lazyLoad
     * @return $this
     */
    public function setLazyLoadEnabled(bool $lazyLoad): SliderInterface;

    /**
     * Check if autoplay is enabled
     *
     * @return bool
     */
    public function isAutoPlayEnabled(): bool;

    /**
     * Set autoplay enabled status
     *
     * @param bool $autoPlay
     * @return $this
     */
    public function setAutoPlayEnabled(bool $autoPlay): SliderInterface;

    /**
     * Get autoplay timeout in milliseconds
     *
     * @return int|null
     */
    public function getAutoPlayTimeout(): ?int;

    /**
     * Set autoplay timeout in milliseconds
     *
     * @param int|null $autoPlayTimeout
     * @return $this
     */
    public function setAutoPlayTimeout(?int $autoPlayTimeout): SliderInterface;

    /**
     * Check if navigation arrows are enabled
     *
     * @return bool
     */
    public function isNavigationEnabled(): bool;

    /**
     * Set navigation arrows enabled status
     *
     * @param bool $nav
     * @return $this
     */
    public function setNavigationEnabled(bool $nav): SliderInterface;

    /**
     * Check if pagination dots are enabled
     *
     * @return bool
     */
    public function isPaginationEnabled(): bool;

    /**
     * Set pagination dots enabled status
     *
     * @param bool $dots
     * @return $this
     */
    public function setPaginationEnabled(bool $dots): SliderInterface;

    /**
     * Check if responsive mode is enabled
     *
     * @return bool
     */
    public function isResponsiveEnabled(): bool;

    /**
     * Set responsive mode enabled status
     *
     * @param bool $isResponsive
     * @return $this
     */
    public function setResponsiveEnabled(bool $isResponsive): SliderInterface;

    /**
     * Get responsive breakpoint items configuration as JSON string
     *
     * @return string|null
     */
    public function getResponsiveItems(): ?string;

    /**
     * Set responsive breakpoint items configuration as JSON string
     *
     * @param string|null $responsiveItems
     * @return $this
     */
    public function setResponsiveItems(?string $responsiveItems): SliderInterface;

    /**
     * Get number of first banners to preload images for
     *
     * @return int
     */
    public function getPreloadBannersCount(): int;

    /**
     * Set number of first banners to preload images for
     *
     * @param int $count
     * @return $this
     */
    public function setPreloadBannersCount(int $count): SliderInterface;

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
    public function setFromDate(?string $fromDate): SliderInterface;

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
    public function setToDate(?string $toDate): SliderInterface;

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
    public function setCreatedAt(?string $createdAt): SliderInterface;

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
    public function setUpdatedAt(?string $updatedAt): SliderInterface;

    /**
     * Get store IDs where slider is active
     *
     * @return string
     */
    public function getStoreIds(): string;

    /**
     * Set store IDs where slider is active
     *
     * @param string $storeIds
     * @return $this
     */
    public function setStoreIds(string $storeIds): SliderInterface;

    /**
     * Get customer group IDs that can view the slider
     *
     * @return string
     */
    public function getCustomerGroupIds(): string;

    /**
     * Set customer group IDs that can view the slider
     *
     * @param string $customerGroupIds
     * @return $this
     */
    public function setCustomerGroupIds(string $customerGroupIds): SliderInterface;

    /**
     * Retrieve existing extension attributes object or create a new one
     *
     * @return \Hryvinskyi\BannerSliderApi\Api\Data\SliderExtensionInterface|null
     */
    public function getExtensionAttributes(): ?SliderExtensionInterface;

    /**
     * Set an extension attributes object
     *
     * @param \Hryvinskyi\BannerSliderApi\Api\Data\SliderExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(SliderExtensionInterface $extensionAttributes): SliderInterface;
}
