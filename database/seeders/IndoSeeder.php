<?php

namespace Database\Seeders;

use App\Models\indonesia;
use Illuminate\Database\Seeder;

class IndoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // url
    // https://raw.githubusercontent.com/bukujari/kbbi/master/assets/daftar-kata.json
    public function run()
    {
        // input data json
        $json = file_get_contents('https://raw.githubusercontent.com/bukujari/kbbi/master/assets/daftar-kata.json');
        $data = json_decode($json, true);
        // filter with keyword
        $data = array_filter($data, function ($item) {
            return $item['kata'] == 'indonesia';
        });
        // data < 100
        $data = array_slice($data, 0, 300);
        // insert data
        foreach ($data as $item) {
            indonesia::create([
                'bhs_indonesia' => $item['keyword'],
            ]);
        }
    }
}
