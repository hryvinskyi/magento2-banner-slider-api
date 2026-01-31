<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api\Video;

/**
 * Video data transfer object interface
 *
 * @api
 */
interface VideoDataInterface
{
    /**
     * Get video provider code (youtube, vimeo, local_mp4, local_webm)
     *
     * @return string
     */
    public function getProvider(): string;

    /**
     * Get video identifier (for external: video ID, for local: file path)
     *
     * @return string
     */
    public function getVideoId(): string;

    /**
     * Get original URL or file path
     *
     * @return string
     */
    public function getOriginalUrl(): string;

    /**
     * Get aspect ratio (e.g., "16:9")
     *
     * @return string
     */
    public function getAspectRatio(): string;

    /**
     * Get video thumbnail URL if available
     *
     * @return string|null
     */
    public function getThumbnailUrl(): ?string;
}
