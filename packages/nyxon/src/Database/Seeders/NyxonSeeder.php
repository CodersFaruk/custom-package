<?php

namespace Nyxon\Database\Seeders;

use Illuminate\Database\Seeder;
use Nyxon\Models\Nyxon;

class NyxonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nyxon::create([
            'title' => 'Sample Learning Item',
            'description' => 'This is a sample learning item for demonstration purposes.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
