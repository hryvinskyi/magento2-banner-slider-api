<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api\Video;

/**
 * Video provider resolver interface
 *
 * @api
 */
interface ProviderResolverInterface
{
    /**
     * Get video provider that can handle the given URL
     *
     * @param string $url
     * @return ProviderInterface|null
     */
    public function resolve(string $url): ?ProviderInterface;

    /**
     * Get provider by code
     *
     * @param string $code
     * @return ProviderInterface|null
     */
    public function getByCode(string $code): ?ProviderInterface;

    /**
     * Get all registered providers
     *
     * @return ProviderInterface[]
     */
    public function getAll(): array;
}
