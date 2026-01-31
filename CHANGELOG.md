# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.0.1] - 2026-01-31

### Added
- `getById()` method to `SliderLocatorInterface` for retrieving slider by ID with store and customer group validation

### Changed
- Updated `getByLocation()` method signature to accept `$storeId` and `$customerGroupId` parameters instead of resolving them internally

## [1.0.0] - 2026-01-31

### Added
- Initial release of Banner Slider API module
- Data interfaces for core entities:
  - `SliderInterface` - Slider configuration and carousel settings
  - `BannerInterface` - Banner content with support for Image, Video, and Custom HTML types
  - `ImageInterface` - Responsive image variants
  - `BreakpointInterface` - Viewport breakpoint definitions
  - `ResponsiveCropInterface` - Image crop configuration with WebP/AVIF support
- Repository interfaces for CRUD operations:
  - `SliderRepositoryInterface`
  - `BannerRepositoryInterface`
  - `ImageRepositoryInterface`
  - `BreakpointRepositoryInterface`
  - `ResponsiveCropRepositoryInterface`
- Service interfaces:
  - `UploadImageInterface` - Image upload handling
  - `Image\BinaryConverterInterface` - WebP/AVIF format conversion
  - `Image\CropProcessorInterface` - Image cropping operations
  - `Image\ResponsiveImageGeneratorInterface` - Responsive image generation
  - `Video\ProviderInterface` - Video provider abstraction
  - `Video\ProviderResolverInterface` - Video provider resolution
- Search criteria filter interfaces for banners:
  - `ActiveFilterInterface`
  - `DateRangeFilterInterface`
  - `PositionFilterInterface`
  - `SliderIdFilterInterface`
- Search criteria filter interfaces for sliders:
  - `ActiveFilterInterface`
  - `DateRangeFilterInterface`
  - `PriorityFilterInterface`
  - `SliderIdFilterInterface`
  - `StoreIdFilterInterface`
  - `CustomerGroupIdFilterInterface`
- Search results interfaces for all entities
- Exception classes for error handling
