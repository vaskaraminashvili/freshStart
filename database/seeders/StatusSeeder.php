<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    public function run()
    {
        $statuses = [
            'active' , 'pending', 'completed'
        ];
        foreach ($statuses as $index => $status) {
            DB::table('statuses')->insert([
                'name' => $status,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        }
    }
}
