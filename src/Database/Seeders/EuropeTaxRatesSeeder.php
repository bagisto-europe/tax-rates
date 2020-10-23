<?php

namespace Bagisto\TaxRates\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EuropeTaxRatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tax_rates')->insert([
            [
                'identifier' => 'Austria (standard)',
                'is_zip'     => 0,
                'country'    => 'AT',
                'tax_rate'   => '20'
            ],
            [
                'identifier' => 'Austria (reduced: flights / events / firewood)',
                'is_zip'     => 0,
                'country'    => 'AT',
                'tax_rate'   => '13'
            ],
            [
                'identifier' => 'Austria (reduced: food / books / pharma / hotels)',
                'is_zip'     => 0,
                'country'    => 'AT',
                'tax_rate'   => '10'
            ],
            [
                'identifier' => 'Austria (zero)',
                'is_zip'     => 0,
                'country'    => 'AT',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Belgium (standard)',
                'is_zip'     => 0,
                'country'    => 'BE',
                'tax_rate'   => '21'
            ],
            [
                'identifier' => 'Belgium (reduced: restaurants)',
                'is_zip'     => 0,
                'country'    => 'BE',
                'tax_rate'   => '12'
            ],
            [
                'identifier' => 'Belgium (reduced: food / books/ pharma / medical / hotels)',
                'is_zip'     => 0,
                'country'    => 'BE',
                'tax_rate'   => '6'
            ],
            [
                'identifier' => 'Belgium (zero)',
                'is_zip'     => 0,
                'country'    => 'BE',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Bulgaria (standard)',
                'is_zip'     => 0,
                'country'    => 'BG',
                'tax_rate'   => '20'
            ],
            [
                'identifier' => 'Bulgaria (reduced: hotels)',
                'is_zip'     => 0,
                'country'    => 'BG',
                'tax_rate'   => '9'
            ],
            [
                'identifier' => 'Bulgaria (zero)',
                'is_zip'     => 0,
                'country'    => 'BG',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Croatia (standard)',
                'is_zip'     => 0,
                'country'    => 'HR',
                'tax_rate'   => '25'
            ],
            [
                'identifier' => 'Croatia (reduced: hotels / newspapers)',
                'is_zip'     => 0,
                'country'    => 'HR',
                'tax_rate'   => '13'
            ],
            [
                'identifier' => 'Croatia (reduced: newspapers / pharma / medical / food / cinema)',
                'is_zip'     => 0,
                'country'    => 'HR',
                'tax_rate'   => '5'
            ],
            [
                'identifier' => 'Croatia (zero)',
                'is_zip'     => 0,
                'country'    => 'HR',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Cyprus (standard)',
                'is_zip'     => 0,
                'country'    => 'CY',
                'tax_rate'   => '19'
            ],
            [
                'identifier' => 'Cyprus (reduced: hotels)',
                'is_zip'     => 0,
                'country'    => 'CY',
                'tax_rate'   => '9'
            ],
            [
                'identifier' => 'Cyprus (reduced: food / books / pharma / medical)',
                'is_zip'     => 0,
                'country'    => 'CY',
                'tax_rate'   => '5'
            ],
            [
                'identifier' => 'Cyprus (zero)',
                'is_zip'     => 0,
                'country'    => 'CY',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Czech Republic (standard)',
                'is_zip'     => 0,
                'country'    => 'CZ',
                'tax_rate'   => '21'
            ],
            [
                'identifier' => 'Czech Republic (reduced: food / medical / pharma / hotels)',
                'is_zip'     => 0,
                'country'    => 'CZ',
                'tax_rate'   => '15'
            ],
            [
                'identifier' => 'Czech Republic (reduced: pharma / books)',
                'is_zip'     => 0,
                'country'    => 'CZ',
                'tax_rate'   => '10'
            ],
            [
                'identifier' => 'Czech Republic (zero)',
                'is_zip'     => 0,
                'country'    => 'CZ',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Denmark (standard)',
                'is_zip'     => 0,
                'country'    => 'DK',
                'tax_rate'   => '25'
            ],
            [
                'identifier' => 'Denmark (zero)',
                'is_zip'     => 0,
                'country'    => 'DK',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Estonia (standard)',
                'is_zip'     => 0,
                'country'    => 'EE',
                'tax_rate'   => '20'
            ],
            [
                'identifier' => 'Estonia (reduced: books / pharma / medical / hotels)',
                'is_zip'     => 0,
                'country'    => 'EE',
                'tax_rate'   => '9'
            ],
            [
                'identifier' => 'Estonia (zero)',
                'is_zip'     => 0,
                'country'    => 'EE',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Finland (standard)',
                'is_zip'     => 0,
                'country'    => 'FI',
                'tax_rate'   => '24'
            ],
            [
                'identifier' => 'Finland (reduced: restaurants)',
                'is_zip'     => 0,
                'country'    => 'FI',
                'tax_rate'   => '14'
            ],
            [
                'identifier' => 'Finland (reduced: books / pharma / hotels)',
                'is_zip'     => 0,
                'country'    => 'FI',
                'tax_rate'   => '10'
            ],
            [
                'identifier' => 'Finland (zero)',
                'is_zip'     => 0,
                'country'    => 'FI',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'France (standard)',
                'is_zip'     => 0,
                'country'    => 'FR',
                'tax_rate'   => '20'
            ],
            [
                'identifier' => 'France (reduced: pharma / hotels / restaurants)',
                'is_zip'     => 0,
                'country'    => 'FR',
                'tax_rate'   => '10'
            ],
            [
                'identifier' => 'France (reduced: medicals / food / books)',
                'is_zip'     => 0,
                'country'    => 'FR',
                'tax_rate'   => '5.5000'
            ],
            [
                'identifier' => 'France (reduced: newspapers / pharma)',
                'is_zip'     => 0,
                'country'    => 'FR',
                'tax_rate'   => '2.1000'
            ],
            [
                'identifier' => 'France (zero)',
                'is_zip'     => 0,
                'country'    => 'FR',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Germany (standard)',
                'is_zip'     => 0,
                'country'    => 'DE',
                'tax_rate'   => '16'
            ],
            [
                'identifier' => 'Germany (reduced: food / medical / books / hotels)',
                'is_zip'     => 0,
                'country'    => 'DE',
                'tax_rate'   => '5'
            ],
            [
                'identifier' => 'Germany (zero)',
                'is_zip'     => 0,
                'country'    => 'DE',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Greece (standard)',
                'is_zip'     => 0,
                'country'    => 'GR',
                'tax_rate'   => '24'
            ],
            [
                'identifier' => 'Greece (reduced: food / pharma / medical)',
                'is_zip'     => 0,
                'country'    => 'GR',
                'tax_rate'   => '13'
            ],
            [
                'identifier' => 'Greece (reduced: books / hotels)',
                'is_zip'     => 0,
                'country'    => 'GR',
                'tax_rate'   => '6.5000'
            ],
            [
                'identifier' => 'Greece (zero)',
                'is_zip'     => 0,
                'country'    => 'GR',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Hungary (standard)',
                'is_zip'     => 0,
                'country'    => 'HU',
                'tax_rate'   => '27'
            ],
            [
                'identifier' => 'Hungary (reduced: food / hotels)',
                'is_zip'     => 0,
                'country'    => 'HU',
                'tax_rate'   => '18'
            ],
            [
                'identifier' => 'Hungary (reduced: books / medical)',
                'is_zip'     => 0,
                'country'    => 'HU',
                'tax_rate'   => '5'
            ],
            [
                'identifier' => 'Hungary (zero)',
                'is_zip'     => 0,
                'country'    => 'HU',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Ireland (standard)',
                'is_zip'     => 0,
                'country'    => 'IE',
                'tax_rate'   => '23'
            ],
            [
                'identifier' => 'Ireland (reduced: fuel, electricity, vet fees, building, services, hotels / restaurants)',
                'is_zip'     => 0,
                'country'    => 'IE',
                'tax_rate'   => '13.5000'
            ],
            [
                'identifier' => 'Ireland (reduced: newspapers, e-books, sporting facilities)',
                'is_zip'     => 0,
                'country'    => 'IE',
                'tax_rate'   => '9'
            ],
            [
                'identifier' => 'Ireland (reduced: food)',
                'is_zip'     => 0,
                'country'    => 'IE',
                'tax_rate'   => '4.8000'
            ],
            [
                'identifier' => 'Ireland (zero)',
                'is_zip'     => 0,
                'country'    => 'IE',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Italy (standard)',
                'is_zip'     => 0,
                'country'    => 'IT',
                'tax_rate'   => '22'
            ],
            [
                'identifier' => 'Italy (reduced: transport / hotels / restaurants)',
                'is_zip'     => 0,
                'country'    => 'IT',
                'tax_rate'   => '10'
            ],
            [
                'identifier' => 'Italy (reduced: food / medical / books)',
                'is_zip'     => 0,
                'country'    => 'IT',
                'tax_rate'   => '4'
            ],
            [
                'identifier' => 'Italy (zero)',
                'is_zip'     => 0,
                'country'    => 'IT',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Latvia (standard)',
                'is_zip'     => 0,
                'country'    => 'LV',
                'tax_rate'   => '21'
            ],
            [
                'identifier' => 'Latvia (reduced: books / pharma / medical / hotels)',
                'is_zip'     => 0,
                'country'    => 'LV',
                'tax_rate'   => '12'
            ],
            [
                'identifier' => 'Latvia (zero)',
                'is_zip'     => 0,
                'country'    => 'LV',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Lithuania (standard)',
                'is_zip'     => 0,
                'country'    => 'LT',
                'tax_rate'   => '21'
            ],
            [
                'identifier' => 'Lithuania (reduced: books)',
                'is_zip'     => 0,
                'country'    => 'LT',
                'tax_rate'   => '9'
            ],
            [
                'identifier' => 'Lithuania (reduced: medical)',
                'is_zip'     => 0,
                'country'    => 'LT',
                'tax_rate'   => '5'
            ],
            [
                'identifier' => 'Lithuania (zero)',
                'is_zip'     => 0,
                'country'    => 'LT',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Luxembourg (standard)',
                'is_zip'     => 0,
                'country'    => 'LU',
                'tax_rate'   => '17'
            ],
            [
                'identifier' => 'Luxembourg (reduced: wine / advertising)',
                'is_zip'     => 0,
                'country'    => 'LU',
                'tax_rate'   => '14'
            ],
            [
                'identifier' => 'Luxembourg (reduced: bikes / domestic)',
                'is_zip'     => 0,
                'country'    => 'LU',
                'tax_rate'   => '8'
            ],
            [
                'identifier' => 'Luxembourg (reduced: food / books / pharma / medical / hotels / restaurants)',
                'is_zip'     => 0,
                'country'    => 'LU',
                'tax_rate'   => '3'
            ],
            [
                'identifier' => 'Luxembourg (zero)',
                'is_zip'     => 0,
                'country'    => 'LU',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Malta (standard)',
                'is_zip'     => 0,
                'country'    => 'MT',
                'tax_rate'   => '18'
            ],
            [
                'identifier' => 'Malta (reduced: hotels)',
                'is_zip'     => 0,
                'country'    => 'MT',
                'tax_rate'   => '7'
            ],
            [
                'identifier' => 'Malta (reduced: books / medical)',
                'is_zip'     => 0,
                'country'    => 'MT',
                'tax_rate'   => '5'
            ],
            [
                'identifier' => 'Malta (zero)',
                'is_zip'     => 0,
                'country'    => 'MT',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Netherlands (standard)',
                'is_zip'     => 0,
                'country'    => 'NL',
                'tax_rate'   => '21'
            ],
            [
                'identifier' => 'Netherlands (reduced: food / books / pharma / medical / hotels)',
                'is_zip'     => 0,
                'country'    => 'NL',
                'tax_rate'   => '9'
            ],
            [
                'identifier' => 'Netherlands (zero)',
                'is_zip'     => 0,
                'country'    => 'NL',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Poland (standard)',
                'is_zip'     => 0,
                'country'    => 'PL',
                'tax_rate'   => '23'
            ],
            [
                'identifier' => 'Poland (reduced: pharma / medical / hotels / restaurants)',
                'is_zip'     => 0,
                'country'    => 'PL',
                'tax_rate'   => '8'
            ],
            [
                'identifier' => 'Poland (reduced: food)',
                'is_zip'     => 0,
                'country'    => 'PL',
                'tax_rate'   => '5'
            ],
            [
                'identifier' => 'Poland (zero)',
                'is_zip'     => 0,
                'country'    => 'PL',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Portugal (standard)',
                'is_zip'     => 0,
                'country'    => 'PT',
                'tax_rate'   => '23'
            ],
            [
                'identifier' => 'Portugal (reduced: food)',
                'is_zip'     => 0,
                'country'    => 'PT',
                'tax_rate'   => '13'
            ],
            [
                'identifier' => 'Portugal (reduced: food/ books / pharma / medical / hotels)',
                'is_zip'     => 0,
                'country'    => 'PT',
                'tax_rate'   => '6'
            ],
            [
                'identifier' => 'Portugal (zero)',
                'is_zip'     => 0,
                'country'    => 'PT',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Romania (standard)',
                'is_zip'     => 0,
                'country'    => 'RO',
                'tax_rate'   => '19'
            ],
            [
                'identifier' => 'Romania (reduced: social housing)',
                'is_zip'     => 0,
                'country'    => 'RO',
                'tax_rate'   => '5'
            ],
            [
                'identifier' => 'Romania (reduced: books / pharma / medical / hotels)',
                'is_zip'     => 0,
                'country'    => 'RO',
                'tax_rate'   => '9'
            ],
            [
                'identifier' => 'Romania (zero)',
                'is_zip'     => 0,
                'country'    => 'RO',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Slovakia (standard)',
                'is_zip'     => 0,
                'country'    => 'SK',
                'tax_rate'   => '20'
            ],
            [
                'identifier' => 'Slovakia (reduced: books / food / medical / pharma)',
                'is_zip'     => 0,
                'country'    => 'SK',
                'tax_rate'   => '10'
            ],
            [
                'identifier' => 'Slovakia (zero)',
                'is_zip'     => 0,
                'country'    => 'SK',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Spain (standard)',
                'is_zip'     => 0,
                'country'    => 'ES',
                'tax_rate'   => '21'
            ],
            [
                'identifier' => 'Spain (reduced: medical / pharma)',
                'is_zip'     => 0,
                'country'    => 'ES',
                'tax_rate'   => '10'
            ],
            [
                'identifier' => 'Spain (reduced: food / newspapers)',
                'is_zip'     => 0,
                'country'    => 'ES',
                'tax_rate'   => '4'
            ],
            [
                'identifier' => 'Spain (zero)',
                'is_zip'     => 0,
                'country'    => 'ES',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Sweden (standard)',
                'is_zip'     => 0,
                'country'    => 'SE',
                'tax_rate'   => '25'
            ],
            [
                'identifier' => 'Sweden (reduced: food)',
                'is_zip'     => 0,
                'country'    => 'SE',
                'tax_rate'   => '12'
            ],
            [
                'identifier' => 'Sweden (reduced: books)',
                'is_zip'     => 0,
                'country'    => 'SE',
                'tax_rate'   => '6'
            ],
            [
                'identifier' => 'Sweden (zero)',
                'is_zip'     => 0,
                'country'    => 'SE',
                'tax_rate'   => '0'
            ]
        ]);
    }
}
