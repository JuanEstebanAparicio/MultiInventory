<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventoryModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('inventory_modules')->insert([
            'name' => 'Electronics Assets',
            'slug' => 'Electronics',
            'schema' => json_encode([
                'fields' => [
                    [
                        'key' => 'asset_code',
                        'type'=> 'string',
                        'required' => true,
                        'label' => 'Asset Code'
                    ],
                    [
                        'key' => 'status',
                        'type' => 'string',
                        'required' => true,
                        'label' => 'Status',
                        'options' => ['active', 'maintenance', 'retired']
                    ]
                ]
            ]),

        ]);
    }
}
