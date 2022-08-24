<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class slider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'link' => 'https://assets3.lottiefiles.com/dotlotties/dlf10_ABViugg18Y.lottie',
            'background' => 'transparent',
            'speed' => '1',
            'loop' => '1',
            'autoplay' => '1',
            'controls' => '0',
            'hover' => '0',
            'status' => '1',
            'activeStatus' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sliders')->insert([
            'link' => 'https://assets7.lottiefiles.com/packages/lf20_zpdtmajt.json',
            'background' => 'transparent',
            'speed' => '2',
            'loop' => '1',
            'autoplay' => '1',
            'controls' => '0',
            'hover' => '0',
            'status' => '1',
            'activeStatus' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sliders')->insert([
            'link' => 'https://assets2.lottiefiles.com/dotlotties/dlf10_qVAyATwwbt.lottie',
            'background' => 'transparent',
            'speed' => '1',
            'loop' => '1',
            'autoplay' => '1',
            'controls' => '0',
            'hover' => '0',
            'status' => '1',
            'activeStatus' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
    );

    }
}
