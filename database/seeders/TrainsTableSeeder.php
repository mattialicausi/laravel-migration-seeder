<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = config('dataseeder.trains');
        //dd($trains);

        foreach($trains as $train) {
            $newtrain = new Train();

            $newtrain->enterprise = $train['enterprise'];
            $newtrain->departure_station = $train['departure_station'];
            $newtrain->arrival_station = $train['arrival_station'];
            $newtrain->date = $train['date'];
            $newtrain->departure_time = $train['departure_time'];

            $newtrain->arrival_time = $train['arrival_time'];
            $newtrain->train_code = $train['train_code'];
            $newtrain->n_carriages = $train['n_carriages'];
            $newtrain->in_time = $train['in_time'];
            $newtrain->deleted = $train['deleted'];
            $newtrain->save();
        }
    }
}
