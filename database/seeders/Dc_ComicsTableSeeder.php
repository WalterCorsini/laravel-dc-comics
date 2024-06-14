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
            $newItem->title = $item['title'];
            $newItem->description = $item['description'];
            $newItem->thumb = $item['thumb'];
            $newItem->price = str_replace('$','',$item['price']);
            $newItem->series = $item['series'];
            $newItem->sale_date = $item['sale_date'];
            $newItem->type = $item['type'];

            // $newItem->fill($item);
            $newItem->save();
        }
        // dd($data);
    }
}
