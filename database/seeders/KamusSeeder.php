<?php

namespace Database\Seeders;

use App\Models\waropen;
use App\Models\indonesia;
use App\Models\kamus;
use Illuminate\Database\Seeder;

class KamusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $indo = indonesia::all();
        $waropen = waropen::all();
        foreach ($indo as $item) {
            kamus::create([
                'indonesia_id' => $item->id,
                'waropen_id' => $waropen->random()->id,
            ]);
        }
    }
}
