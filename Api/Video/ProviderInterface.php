<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api\Video;

/**
 * Video provider interface for parsing and rendering videos
 *
 * @api
 */
interface ProviderInterface
{
    /**
     * Get unique provider code identifier
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * Check if this provider can handle the given URL/path
     *
     * @param string $url
     * @return bool
     */
    public function supports(string $url): bool;

    /**
     * Parse URL/path and extract video data
     *
     * @param string $url
     * @return VideoDataInterface
     * @throws \InvalidArgumentException if URL cannot be parsed
     */
    public function parse(string $url): VideoDataInterface;

    /**
     * Get embed URL for the video
     *
     * @param VideoDataInterface $videoData
     * @return string
     */
    public function getEmbedUrl(VideoDataInterface $videoData): string;

    /**
     * Get HTML attributes for the embed element
     *
     * @return array<string, string>
     */
    public function getEmbedAttributes(): array;

    /**
     * Check if this is a local file provider (vs external URL)
     *
     * @return bool
     */
    public function isLocal(): bool;
}
