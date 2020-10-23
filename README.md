# Bagisto Tax Rates
[![GitHub license](https://img.shields.io/github/license/bagisto-europe/tax-rates)](https://github.com/bagisto-europe/tax-rates/blob/master/LICENSE)

This extensions helps you to import all tax rates in your Bagisto instance.

## Installation

Using composer, you only need to run:
```
composer bagisto-eu/tax-rates
```

## Usage
Run the following command in your terminal
```
php artisan db:seed --class="Bagisto\TaxRates\Database\Seeders\DatabaseSeeder"
```

Now go to Admin -> Settings -> Taxes -> Tax Rates.