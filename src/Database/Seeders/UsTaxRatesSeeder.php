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
        $dir = __DIR__ . "/../../Data/";

        $rates = [];

        if (is_dir($dir)) {
            
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    $ext = pathinfo($file, PATHINFO_EXTENSION);
                    $rates = [];
                    if ( $file != "." && $file != ".." && 'csv' == $ext  ) {
                        $handle = fopen($dir.$file, 'r');
                        while ( ($data = fgetcsv($handle) ) !== FALSE ) {
                            
                            if (is_numeric($data[1])) {
                                $data_ = [
                                    'identifier'=>$data[2]. " (".$data[1].")",
                                    'is_zip'=>1,
                                    'zip_code'=>$data[1],
                                    'zip_from'=>$data[1],
                                    'zip_to'=>$data[1],
                                    'state'=>$data[0],
                                    'country'=>'US',
                                    'tax_rate'=>$data[4]*100,
                                ];
                                $rates[] = $data_;
                            }
                        }

                        DB::table('tax_rates')->insert($rates);
                    }
                    
                }
                closedir($dh);
            }
        }

    }

}
