# Validate phone numbers with Laravel 5
[![Latest Version](https://img.shields.io/github/release/tylercd100/laravel-validator-phone.svg?style=flat-square)](https://github.com/tylercd100/laravel-validator-phone/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://travis-ci.org/tylercd100/laravel-validator-phone.svg?branch=master)](https://travis-ci.org/tylercd100/laravel-validator-phone)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/tylercd100/laravel-validator-phone/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/tylercd100/laravel-validator-phone/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/tylercd100/laravel-validator-phone/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/tylercd100/laravel-validator-phone/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/tylercd100/laravel-validator-phone.svg?style=flat-square)](https://packagist.org/packages/tylercd100/laravel-validator-phone)

This package only checks phone number formatting and not actual number validity.

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
// Test any phone number
Validator::make(['test' => '15556667777'], ['test' => 'phone']); //true
Validator::make(['test' => '+15556667777'], ['test' => 'phone']); //true
Validator::make(['test' => '+1 (555) 666-7777'], ['test' => 'phone']); //true

// Test for E164
Validator::make(['test' => '+15556667777'], ['test' => 'phone:E164']); //true

// Test for NANP (North American Numbering Plan)
Validator::make(['test' => '+1 (555) 666-7777'], ['test' => 'phone:NANP']); //true

// Test for digits only
Validator::make(['test' => '15556667777'], ['test' => 'phone:digits']); //true
```
