<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DcComic;

class Dc_ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = config('db-comics');
        foreach($data as $item){
            $newItem = new DcComic();
            $newItem->fill($item);
            $newItem->save();
        }
        // dd($data);
    }
}
