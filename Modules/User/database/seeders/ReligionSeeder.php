<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\User\Models\Religion\Religion;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $this->call([]);
        DB::table('religions')->delete();

        $religions = [

            'Muslim',
            'Christian',
            'Other',
        ];

        foreach ($religions as $R) {
            Religion::create(['name' => $R]);
        }
    }
}
