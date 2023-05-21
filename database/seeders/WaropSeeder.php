<?php

namespace Database\Seeders;

use App\Models\waropen;
use Illuminate\Database\Seeder;

class WaropSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // https://raw.githubusercontent.com/sindresorhus/mnemonic-words/main/words.json
        // input data json
        $json = file_get_contents('https://raw.githubusercontent.com/sindresorhus/mnemonic-words/main/words.json');
        $data = json_decode($json, true);
        foreach ($data as $item) {
            $key = rand(0, count($data));
            $data[$key] = $item;
        }
        $data = array_slice($data, 0, 100);
        // insert data
        foreach ($data as $item) {
            waropen::create([
                'bhs_waropen' => $item,
                'audio' => 'audio',
            ]);
        }
    }
}
