# Bagisto Tax Rates
[![Packagist Downloads](https://img.shields.io/packagist/dm/bagisto-eu/tax-rates)](https://packagist.org/packages/bagisto-eu/tax-rates)
[![GitHub license](https://img.shields.io/github/license/bagisto-europe/tax-rates)](https://github.com/bagisto-europe/tax-rates/blob/master/LICENSE)

This extensions helps you to import all tax rates for each country in your Bagisto instance.  
Only European tax rates are currently available, other areas will be added as soon as possible..

## Installation

Using composer, you only need to run:
```sh
composer require bagisto-eu/tax-rates
```

## Usage
Run the following command in your terminal
```sh
php artisan db:seed --class="Bagisto\TaxRates\Database\Seeders\DatabaseSeeder"
```

Now go to Admin -> Settings -> Taxes -> Tax Rates.

## Changelog
Please see the [CHANGELOG](CHANGELOG.md) file for more information about what has recently changed.