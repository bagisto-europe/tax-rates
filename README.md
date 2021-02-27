# Bagisto Tax Rates
[![Packagist Downloads](https://img.shields.io/packagist/dt/bagisto-eu/tax-rates)](https://packagist.org/packages/bagisto-eu/tax-rates)
[![GitHub license](https://img.shields.io/github/license/bagisto-europe/tax-rates)](https://github.com/bagisto-europe/tax-rates/blob/master/LICENSE)

This extensions helps you to import all tax rates for each country in your Bagisto instance.  

## Installation

Using composer, you only need to run:
```sh
composer require bagisto-eu/tax-rates:dev-master
```

## Usage

### Import tax rates for all regions.
Run the following command in your terminal
```sh
php artisan db:seed --class="Bagisto\TaxRates\Database\Seeders\DatabaseSeeder"
```

### Import only European tax rates
```sh
php artisan db:seed --class="Bagisto\TaxRates\Database\Seeders\EuropeanTaxRatesSeeder"
```

### Import only US tax rates
```sh
php artisan db:seed --class="Bagisto\TaxRates\Database\Seeders\UsTaxRatesSeeder"
```

Now go to Admin -> Settings -> Taxes -> Tax Rates.

## Changelog
Please see the [CHANGELOG](CHANGELOG.md) file for more information about what has recently changed.
