<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Model\Validator;

use Hryvinskyi\BannerSliderApi\Api\Data\ImageInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Validation\ValidationResult;

/**
 * Image validation interface
 *
 * @api
 */
interface ImageValidatorInterface
{
    /**
     * Validate image data
     *
     * @param ImageInterface $image
     * @return ValidationResult
     * @throws LocalizedException
     */
    public function validate(ImageInterface $image): ValidationResult;
}
