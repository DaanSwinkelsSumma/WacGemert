<?php

use Illuminate\Database\Seeder;
use App\Wedstrijd;

class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	['title'=>'Demo Event-1', 'start_date'=>'2019-05-11', 'end_date'=>'2019-05-12'],
        	['title'=>'Demo Event-2', 'start_date'=>'2019-05-11', 'end_date'=>'2019-05-13'],
        	['title'=>'Demo Event-3', 'start_date'=>'2019-05-14', 'end_date'=>'2019-05-14'],
        	['title'=>'Demo Event-3', 'start_date'=>'2019-05-17', 'end_date'=>'2019-05-17'],
        ];
        foreach ($data as $key => $value) {
            // dd($data);
        	Wedstrijd::create($value);
        }
    }
}
