<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api\Data;

/**
 * Breakpoint entity interface
 *
 * @api
 */
interface BreakpointInterface
{
    public const BREAKPOINT_ID = 'breakpoint_id';
    public const SLIDER_ID = 'slider_id';
    public const NAME = 'name';
    public const IDENTIFIER = 'identifier';
    public const MEDIA_QUERY = 'media_query';
    public const MIN_WIDTH = 'min_width';
    public const TARGET_WIDTH = 'target_width';
    public const TARGET_HEIGHT = 'target_height';
    public const SORT_ORDER = 'sort_order';
    public const STATUS = 'status';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

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
    public function setBreakpointId(?int $breakpointId): BreakpointInterface;

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
    public function setSliderId(?int $sliderId): BreakpointInterface;

    /**
     * Get display name
     *
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * Set display name
     *
     * @param string|null $name
     * @return $this
     */
    public function setName(?string $name): BreakpointInterface;

    /**
     * Get unique identifier
     *
     * @return string|null
     */
    public function getIdentifier(): ?string;

    /**
     * Set unique identifier
     *
     * @param string|null $identifier
     * @return $this
     */
    public function setIdentifier(?string $identifier): BreakpointInterface;

    /**
     * Get CSS media query
     *
     * @return string|null
     */
    public function getMediaQuery(): ?string;

    /**
     * Set CSS media query
     *
     * @param string|null $mediaQuery
     * @return $this
     */
    public function setMediaQuery(?string $mediaQuery): BreakpointInterface;

    /**
     * Get minimum viewport width for ordering
     *
     * @return int|null
     */
    public function getMinWidth(): ?int;

    /**
     * Set minimum viewport width for ordering
     *
     * @param int|null $minWidth
     * @return $this
     */
    public function setMinWidth(?int $minWidth): BreakpointInterface;

    /**
     * Get target output image width
     *
     * @return int|null
     */
    public function getTargetWidth(): ?int;

    /**
     * Set target output image width
     *
     * @param int|null $targetWidth
     * @return $this
     */
    public function setTargetWidth(?int $targetWidth): BreakpointInterface;

    /**
     * Get target output image height
     *
     * @return int|null
     */
    public function getTargetHeight(): ?int;

    /**
     * Set target output image height
     *
     * @param int|null $targetHeight
     * @return $this
     */
    public function setTargetHeight(?int $targetHeight): BreakpointInterface;

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
    public function setSortOrder(?int $sortOrder): BreakpointInterface;

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
    public function setStatus(?int $status): BreakpointInterface;

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
    public function setCreatedAt(?string $createdAt): BreakpointInterface;

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
    public function setUpdatedAt(?string $updatedAt): BreakpointInterface;

    /**
     * Get aspect ratio (width/height)
     *
     * @return float
     */
    public function getAspectRatio(): float;
}
