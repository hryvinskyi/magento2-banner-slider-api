<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\BannerSliderApi\Model\Validator;

use Hryvinskyi\BannerSliderApi\Api\Data\SliderInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Validation\ValidationResult;

/**
 * Slider validation interface
 *
 * @api
 */
interface SliderValidatorInterface
{
    /**
     * Validate slider data
     *
     * @param SliderInterface $slider
     * @return ValidationResult
     * @throws LocalizedException
     */
    public function validate(SliderInterface $slider): ValidationResult;
}
