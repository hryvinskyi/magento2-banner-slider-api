# Magento 2 & Adobe Commerce Banner Slider API

API interfaces and data contracts for the Banner Slider system.

> **Part of [hryvinskyi/magento2-banner-slider-pack](https://github.com/hryvinskyi/magento2-banner-slider-pack)** - Complete Banner Slider solution for Magento 2

## Description

This module provides the API layer for the Banner Slider system. It contains all interfaces, data contracts, and service definitions that other modules depend on. This is the foundation module with no dependencies on other custom modules.

## Features

- Data interfaces for Slider, Banner, Image, Breakpoint, and ResponsiveCrop entities
- Repository interfaces for CRUD operations
- Service interfaces for image processing and video handling
- Search criteria filter interfaces for flexible querying
- Extensibility points for custom implementations

## Dependencies

- PHP 8.1+
- magento/framework

## Installation

This module is typically installed as part of the `hryvinskyi/magento2-banner-slider-pack` metapackage:

```bash
composer require hryvinskyi/magento2-banner-slider-pack
php bin/magento module:enable Hryvinskyi_BannerSliderApi
php bin/magento setup:upgrade
php bin/magento cache:flush
```

## Author

**Volodymyr Hryvinskyi**
- Email: volodymyr@hryvinskyi.com

## License

MIT
