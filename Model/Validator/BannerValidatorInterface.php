<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Model\Validator;

use Hryvinskyi\BannerSliderApi\Api\Data\BannerInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Validation\ValidationResult;

/**
 * Banner validation interface
 *
 * @api
 */
interface BannerValidatorInterface
{
    /**
     * Validate banner data
     *
     * @param BannerInterface $banner
     * @return ValidationResult
     * @throws LocalizedException
     */
    public function validate(BannerInterface $banner): ValidationResult;
}
