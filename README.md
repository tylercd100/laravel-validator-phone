# Validate colors with Laravel 5
[![Latest Version](https://img.shields.io/github/release/tylercd100/laravel-validator-phone.svg?style=flat-square)](https://github.com/tylercd100/laravel-validator-phone/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://travis-ci.org/tylercd100/laravel-validator-phone.svg?branch=master)](https://travis-ci.org/tylercd100/laravel-validator-phone)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/tylercd100/laravel-validator-phone/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/tylercd100/laravel-validator-phone/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/tylercd100/laravel-validator-phone/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/tylercd100/laravel-validator-phone/?branch=master)
[![Dependency Status](https://www.versioneye.com/user/projects/56f3252c35630e0029db0187/badge.svg?style=flat)](https://www.versioneye.com/user/projects/56f3252c35630e0029db0187)
[![Total Downloads](https://img.shields.io/packagist/dt/tylercd100/laravel-validator-phone.svg?style=flat-square)](https://packagist.org/packages/tylercd100/laravel-validator-phone)

## Installation

Install via [composer](https://getcomposer.org/) - In the terminal:
```bash
composer require tylercd100/laravel-validator-phone
```

Now add the following to the `providers` array in your `config/app.php`
```php
Tylercd100\Validator\Phone\ServiceProvider::class
```

## Usage

```php
// Test any color type
Validator::make(['test' => '5556667777'], ['test' => 'phone']);

// Test for rgb 
Validator::make(['test' => 'rgb(0, 200, 150)'], ['test' => 'color_rgb']);

// Test for rgba 
Validator::make(['test' => 'rgba(0, 200, 150, 0.52)'], ['test' => 'color_rgba']);

// Test for hex 
Validator::make(['test' => '#333'], ['test' => 'color_hex']);

// Test for css color keyword 
Validator::make(['test' => 'gold'], ['test' => 'color_keyword']);