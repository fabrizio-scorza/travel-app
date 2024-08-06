<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = $this->getCSVData(__DIR__ . '/roma_foods.csv');

        foreach ($data as $index => $row) {
            if($index !== 0){
                $new_food = new Food();

                $new_food->stop_id = $row[0];
                $new_food->title = $row[1];
                $new_food->description = $row[2];
                
                $new_food->save();
            }
        }
    }

    public function getCSVData(string $path)
    {
        $data = [];

        $file_stream = fopen($path, 'r');

        if ($file_stream === false) {
            exit('Error - cannot open the file' . $path);
        }

        while (($row = fgetcsv($file_stream)) !== false) {
            $data[] = $row;
        }

        fclose($file_stream);

        return $data;
    }
}