<?php

namespace Database\Seeders;

use App\Models\Stop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = $this->getCSVData(__DIR__ . '/roma_stops.csv');
        foreach ($data as $index => $row) {
            if($index !== 0){
                $new_stop = new Stop();

                $new_stop->travel_id = 1;

                $new_stop->title = $row[0];
                $new_stop->description = $row[1];
                $new_stop->date = $row[2];
                if($row[3] !== ''){
                    $new_stop->curiosity = $row[3];
                }

                $new_stop->save();
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
