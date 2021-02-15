<?php

namespace Bagisto\TaxRates\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsTaxRatesSeeder extends Seeder
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
                'identifier' => 'Alabama (standard)',
                'is_zip'     => 0,
                'state'      => 'AL',
                'country'    => 'US',
                'tax_rate'   => '4'
            ],
            [
                'identifier' => 'Alabama (reduced: pharma)',
                'is_zip'     => 0,
                'state'      => 'AL',
                'country'    => 'US',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Alaska (standard)',
                'is_zip'     => 0,
                'state'      => 'AK',
                'country'    => 'US',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Arizona (standard)',
                'is_zip'     => 0,
                'state'      => 'AZ',
                'country'    => 'US',
                'tax_rate'   => '5.6'
            ],
            [
                'identifier' => 'Arizona (reduced: food / pharma)',
                'is_zip'     => 0,
                'state'      => 'AZ',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Arkansas (standard)',
                'is_zip'     => 0,
                'state'      => 'AR',
                'country'    => 'US',
                'tax_rate'   => '6.5'
            ],
            [
                'identifier' => 'Arkansas (reduced: food)',
                'is_zip'     => 0,
                'state'      => 'AR',
                'country'    => 'US',
                'tax_rate'   => '1.5'
            ],
            [
                'identifier' => 'California (standard)',
                'is_zip'     => 0,
                'state'      => 'CA',
                'country'    => 'US',
                'tax_rate'   => '7.5'
            ],
            [
                'identifier' => 'California (reduced: food / pharma)',
                'is_zip'     => 0,
                'state'      => 'CA',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Colorado (standard)',
                'is_zip'     => 0,
                'state'      => 'CO',
                'country'    => 'US',
                'tax_rate'   => '2.9'
            ],
            [
                'identifier' => 'Colorado (reduced: food / pharma)',
                'is_zip'     => 0,
                'state'      => 'CO',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Connecticut (standard)',
                'is_zip'     => 0,
                'state'      => 'CT',
                'country'    => 'US',
                'tax_rate'   => '6.35'
            ],
            [
                'identifier' => 'Connecticut (reduced: food / pharma)',
                'is_zip'     => 0,
                'state'      => 'CT',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Delaware (standard)',
                'is_zip'     => 0,
                'state'      => 'DE',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Florida (standard)',
                'is_zip'     => 0,
                'state'      => 'FL',
                'country'    => 'US',
                'tax_rate'   => '6.0'
            ],
            [
                'identifier' => 'Florida (reduced: food / pharma)',
                'is_zip'     => 0,
                'state'      => 'DE',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Georgia (standard)',
                'is_zip'     => 0,
                'state'      => 'GA',
                'country'    => 'US',
                'tax_rate'   => '4.0'
            ],
            [
                'identifier' => 'Hawai (standard)',
                'is_zip'     => 0,
                'state'      => 'HI',
                'country'    => 'US',
                'tax_rate'   => '4.0'
            ],
            [
                'identifier' => 'Idaho (standard)',
                'is_zip'     => 0,
                'state'      => 'ID',
                'country'    => 'US',
                'tax_rate'   => '6.0'
            ],
            [
                'identifier' => 'Idaho (reduced: pharma)',
                'is_zip'     => 0,
                'state'      => 'ID',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Ilinois (standard)',
                'is_zip'     => 0,
                'state'      => 'IL',
                'country'    => 'US',
                'tax_rate'   => '6.25'
            ],
            [
                'identifier' => 'Idaho (reduced: groceries)',
                'is_zip'     => 0,
                'state'      => 'IL',
                'country'    => 'US',
                'tax_rate'   => '1.0'
            ],
            [
                'identifier' => 'Idaho (reduced: prepare food)',
                'is_zip'     => 0,
                'state'      => 'IL',
                'country'    => 'US',
                'tax_rate'   => '8.25'
            ],
            [
                'identifier' => 'Idaho (reduced: pharma)',
                'is_zip'     => 0,
                'state'      => 'IL',
                'country'    => 'US',
                'tax_rate'   => '1.0'
            ],
            [
                'identifier' => 'Indiana (standard)',
                'is_zip'     => 0,
                'state'      => 'IN',
                'country'    => 'US',
                'tax_rate'   => '7.0'
            ],
            [
                'identifier' => 'Indiana (reduced: groceries)',
                'is_zip'     => 0,
                'state'      => 'IN',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Indiana (reduced: prepared food)',
                'is_zip'     => 0,
                'state'      => 'IN',
                'country'    => 'US',
                'tax_rate'   => '9.0'
            ],
            [
                'identifier' => 'Indiana (reduced: pharma)',
                'is_zip'     => 0,
                'state'      => 'IN',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Iowa (standard)',
                'is_zip'     => 0,
                'state'      => 'IA',
                'country'    => 'US',
                'tax_rate'   => '6.0'
            ],
            [
                'identifier' => 'Iowa (reduced: food / pharma)',
                'is_zip'     => 0,
                'state'      => 'IA',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Kansas (standard)',
                'is_zip'     => 0,
                'state'      => 'KS',
                'country'    => 'US',
                'tax_rate'   => '6.3'
            ],
            [
                'identifier' => 'Kansas (reduced food / pharma)',
                'is_zip'     => 0,
                'state'      => 'KS',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Kentucky (standard)',
                'is_zip'     => 0,
                'state'      => 'KY',
                'country'    => 'US',
                'tax_rate'   => '6.0'
            ],
            [
                'identifier' => 'Kentucky (reduced: food / pharma)',
                'is_zip'     => 0,
                'state'      => 'KY',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Lousiana (standard)',
                'is_zip'     => 0,
                'state'      => 'LA',
                'country'    => 'US',
                'tax_rate'   => '4.0'
            ],
            [
                'identifier' => 'Lousiana (reduced: food)',
                'is_zip'     => 0,
                'state'      => 'LA',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Maine (standard)',
                'is_zip'     => 0,
                'state'      => 'ME',
                'country'    => 'US',
                'tax_rate'   => '5.5'
            ],
            [
                'identifier' => 'Maine (reduced: groceries)',
                'is_zip'     => 0,
                'state'      => 'ME',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Maine (reduced: prepared food)',
                'is_zip'     => 0,
                'state'      => 'ME',
                'country'    => 'US',
                'tax_rate'   => '5.5'
            ],
            [
                'identifier' => 'Maine (reduced: pharma)',
                'is_zip'     => 0,
                'state'      => 'ME',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Maryland (standard)',
                'is_zip'     => 0,
                'state'      => 'MD',
                'country'    => 'US',
                'tax_rate'   => '6.0'
            ],
            [
                'identifier' => 'Maryland (reduced: groceries / pharma)',
                'is_zip'     => 0,
                'state'      => 'MD',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Massachusetts (standard)',
                'is_zip'     => 0,
                'state'      => 'MA',
                'country'    => 'US',
                'tax_rate'   => '6.25'
            ],
            [
                'identifier' => 'Massachusetts (reduced: groceries / pharma)',
                'is_zip'     => 0,
                'state'      => 'MA',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Massachusetts (reduced: prepared food)',
                'is_zip'     => 0,
                'state'      => 'MA',
                'country'    => 'US',
                'tax_rate'   => '7.0'
            ],
            [
                'identifier' => 'Michigan (standard)',
                'is_zip'     => 0,
                'state'      => 'MI',
                'country'    => 'US',
                'tax_rate'   => '6.0'
            ],
            [
                'identifier' => 'Michigan (reduced)',
                'is_zip'     => 0,
                'state'      => 'MI',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Minnesota (standard)',
                'is_zip'     => 0,
                'state'      => 'MN',
                'country'    => 'US',
                'tax_rate'   => '6.875'
            ],
            [
                'identifier' => 'Minnesota (reduced: groceries / prepared food / pharma / clothes)',
                'is_zip'     => 0,
                'state'      => 'MN',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Mississippi (standard)',
                'is_zip'     => 0,
                'state'      => 'MS',
                'country'    => 'US',
                'tax_rate'   => '7.0'
            ],
            [
                'identifier' => 'Missouri (standard)',
                'is_zip'     => 0,
                'state'      => 'MO',
                'country'    => 'US',
                'tax_rate'   => '4.225'
            ],
            [
                'identifier' => 'Missouri (reduced: groceries)',
                'is_zip'     => 0,
                'state'      => 'MO',
                'country'    => 'US',
                'tax_rate'   => '1.225'
            ],
            [
                'identifier' => 'Montana (standard)',
                'is_zip'     => 0,
                'state'      => 'MT',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Nebraska (standard)',
                'is_zip'     => 0,
                'state'      => 'NE',
                'country'    => 'US',
                'tax_rate'   => '5.5'
            ],
            [
                'identifier' => 'Nebraska (reduced: groceries)',
                'is_zip'     => 0,
                'state'      => 'NE',
                'country'    => 'US',
                'tax_rate'   => '0'
            ],
            [
                'identifier' => 'Nevada (standard)',
                'is_zip'     => 0,
                'state'      => 'NV',
                'country'    => 'US',
                'tax_rate'   => '6.85'
            ],
            [
                'identifier' => 'Nevada (reduced: groceries / pharma)',
                'is_zip'     => 0,
                'state'      => 'NV',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'New Hampshire (standard)',
                'is_zip'     => 0,
                'state'      => 'NH',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'New Hampshire (prepared food)',
                'is_zip'     => 0,
                'state'      => 'NH',
                'country'    => 'US',
                'tax_rate'   => '9.0'
            ],
            [
                'identifier' => 'New Jersey (standard)',
                'is_zip'     => 0,
                'state'      => 'NJ',
                'country'    => 'US',
                'tax_rate'   => '7.0'
            ],
            [
                'identifier' => 'New Jersey (reduced: groceries / pharma / clothes)',
                'is_zip'     => 0,
                'state'      => 'NJ',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'New Mexico (standard)',
                'is_zip'     => 0,
                'state'      => 'NM',
                'country'    => 'US',
                'tax_rate'   => '5.125'
            ],
            [
                'identifier' => 'New York (standard)',
                'is_zip'     => 0,
                'state'      => 'NY',
                'country'    => 'US',
                'tax_rate'   => '4.0'
            ],
            [
                'identifier' => 'New York (reduced: groceries / pharma / clothes)',
                'is_zip'     => 0,
                'state'      => 'NY',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'North Carolina (standard)',
                'is_zip'     => 0,
                'state'      => 'NY',
                'country'    => 'US',
                'tax_rate'   => '4.75'
            ],
            [
                'identifier' => 'North Carolina (reduced: groceries)',
                'is_zip'     => 0,
                'state'      => 'NC',
                'country'    => 'US',
                'tax_rate'   => '2.0'
            ],
            [
                'identifier' => 'North Carolina (prepared food)',
                'is_zip'     => 0,
                'state'      => 'NC',
                'country'    => 'US',
                'tax_rate'   => '8.50'
            ],
            [
                'identifier' => 'North Dakota (standard)',
                'is_zip'     => 0,
                'state'      => 'ND',
                'country'    => 'US',
                'tax_rate'   => '5.0'
            ],
            [
                'identifier' => 'North Dakota (reduced: groceries)',
                'is_zip'     => 0,
                'state'      => 'ND',
                'country'    => 'US',
                'tax_rate'   => '5.0'
            ],
            [
                'identifier' => 'Ohio (standard)',
                'is_zip'     => 0,
                'state'      => 'OH',
                'country'    => 'US',
                'tax_rate'   => '5.75'
            ],
            [
                'identifier' => 'Ohio (reduced: groceries / pharma)',
                'is_zip'     => 0,
                'state'      => 'OH',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Oklahoma (standard)',
                'is_zip'     => 0,
                'state'      => 'OK',
                'country'    => 'US',
                'tax_rate'   => '4.5'
            ],
            [
                'identifier' => 'Oregon (standard)',
                'is_zip'     => 0,
                'state'      => 'OR',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Pennsylvania (standard)',
                'is_zip'     => 0,
                'state'      => 'PA',
                'country'    => 'US',
                'tax_rate'   => '6.0'
            ],
            [
                'identifier' => 'Pennsylvania (reduced: groceries / pharma / clothes)',
                'is_zip'     => 0,
                'state'      => 'PA',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Rhode Island (standard)',
                'is_zip'     => 0,
                'state'      => 'RI',
                'country'    => 'US',
                'tax_rate'   => '7.0'
            ],
            [
                'identifier' => 'Rhode Island (prepared food)',
                'is_zip'     => 0,
                'state'      => 'RI',
                'country'    => 'US',
                'tax_rate'   => '8.0'
            ],
            [
                'identifier' => 'Rhode Island (reduced: groceries / pharma / clothes)',
                'is_zip'     => 0,
                'state'      => 'RI',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'South Carolina (standard)',
                'is_zip'     => 0,
                'state'      => 'SC',
                'country'    => 'US',
                'tax_rate'   => '6.0'
            ],
            [
                'identifier' => 'South Carolina (prepared food)',
                'is_zip'     => 0,
                'state'      => 'SC',
                'country'    => 'US',
                'tax_rate'   => '10.5'
            ],
            [
                'identifier' => 'South Carolina (reduced: groceries / pharma)',
                'is_zip'     => 0,
                'state'      => 'SC',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'South Dakota (standard)',
                'is_zip'     => 0,
                'state'      => 'SD',
                'country'    => 'US',
                'tax_rate'   => '4.0'
            ],
            [
                'identifier' => 'Tennessee (standard)',
                'is_zip'     => 0,
                'state'      => 'TN',
                'country'    => 'US',
                'tax_rate'   => '7.0'
            ],
            [
                'identifier' => 'Tennessee (reduced: groceries)',
                'is_zip'     => 0,
                'state'      => 'TN',
                'country'    => 'US',
                'tax_rate'   => '5.0'
            ],
            [
                'identifier' => 'Texas (standard)',
                'is_zip'     => 0,
                'state'      => 'TX',
                'country'    => 'US',
                'tax_rate'   => '6.25'
            ],
            [
                'identifier' => 'Texas (reduced: groceries / pharma)',
                'is_zip'     => 0,
                'state'      => 'TX',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Utah (standard)',
                'is_zip'     => 0,
                'state'      => 'UT',
                'country'    => 'US',
                'tax_rate'   => '5.95'
            ],
            [
                'identifier' => 'Utah (reduced: groceries)',
                'is_zip'     => 0,
                'state'      => 'UT',
                'country'    => 'US',
                'tax_rate'   => '3.0'
            ],
            [
                'identifier' => 'Vermont (standard)',
                'is_zip'     => 0,
                'state'      => 'VT',
                'country'    => 'US',
                'tax_rate'   => '6.0'
            ],
            [
                'identifier' => 'Vermont (prepared food)',
                'is_zip'     => 0,
                'state'      => 'VT',
                'country'    => 'US',
                'tax_rate'   => '9.0'
            ],
            [
                'identifier' => 'Vermont (reduced: groceries / pharma / clothes)',
                'is_zip'     => 0,
                'state'      => 'VT',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Virginia (standard)',
                'is_zip'     => 0,
                'state'      => 'VA',
                'country'    => 'US',
                'tax_rate'   => '5.3'
            ],
            [
                'identifier' => 'Virginia (prepared food)',
                'is_zip'     => 0,
                'state'      => 'VA',
                'country'    => 'US',
                'tax_rate'   => '5.3'
            ],
            [
                'identifier' => 'Virginia (reduced: groceries)',
                'is_zip'     => 0,
                'state'      => 'VA',
                'country'    => 'US',
                'tax_rate'   => '2.5'
            ],
            [
                'identifier' => 'Virginia (reduced: pharma)',
                'is_zip'     => 0,
                'state'      => 'VA',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'Washington (standard)',
                'is_zip'     => 0,
                'state'      => 'WA',
                'country'    => 'US',
                'tax_rate'   => '6.5'
            ],
            [
                'identifier' => 'Washington (prepared food)',
                'is_zip'     => 0,
                'state'      => 'WA',
                'country'    => 'US',
                'tax_rate'   => '10.0'
            ],
            [
                'identifier' => 'Washington (reduced: groceries / pharma)',
                'is_zip'     => 0,
                'state'      => 'WA',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
            [
                'identifier' => 'West Virginia (standard)',
                'is_zip'     => 0,
                'state'      => 'WV',
                'country'    => 'US',
                'tax_rate'   => '6.0'
            ],
            [
                'identifier' => 'West Virginia (reduced: groceries / pharma)',
                'is_zip'     => 0,
                'state'      => 'WV',
                'country'    => 'US',
                'tax_rate'   => '6.0'
            ],
            [
                'identifier' => 'Wisconsin (standard)',
                'is_zip'     => 0,
                'state'      => 'WI',
                'country'    => 'US',
                'tax_rate'   => '5.0'
            ],
            [
                'identifier' => 'Wisconsin (reduced: groceries / pharma)',
                'is_zip'     => 0,
                'state'      => 'WI',
                'country'    => 'US',
                'tax_rate'   => '5.0'
            ],
            [
                'identifier' => 'Wyoming (standard)',
                'is_zip'     => 0,
                'state'      => 'WY',
                'country'    => 'US',
                'tax_rate'   => '4.0'
            ],
            [
                'identifier' => 'Wyoming (reduced: groceries / pharma)',
                'is_zip'     => 0,
                'state'      => 'WY',
                'country'    => 'US',
                'tax_rate'   => '0.0'
            ],
        ]);
    }
}
