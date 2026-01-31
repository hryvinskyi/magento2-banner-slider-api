<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Api;

/**
 * Image upload service interface
 *
 * @api
 */
interface UploadImageInterface
{
    /**
     * Upload image file to temporary storage
     *
     * @param string $fileId Form file input name
     * @return array{name: string, type: string, tmp_name: string, error: int, path: string, file: string, url: string}
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute(string $fileId): array;
}
