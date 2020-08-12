<?php

use Illuminate\Database\Seeder;

class TasktypesetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //App\Tasktypeset::truncate();
        $tkt1=App\Control::create()->tasktypes()->save(
            new App\Tasktype([
                'name'=>'Bung Qua va dan chao nguoi mau cao cap',
                'category'=>'Team_Reception_GroomHouse_Model'
            ])
        )->id;

        $tkt2=App\Control::create()->tasktypes()->save(
            new App\Tasktype([
                'name'=>'Xe Dua Dau 20km 10 Chiec Roll Royce',
                'category'=>'Team_Transport_20km_GroomHouse_10RR'
            ])
        )->id;

        $tkt3=App\Control::create()->tasktypes()->save(
            new App\Tasktype([
            'name'=>'Xe Ho Tong Dua Dau 20km 20 Chiec Harley',
            'category'=>'Team_Transport_20km_GroomHouse_20HD'
            ])
        )->id;

        App\Control::create()->tasktypes()->save(
            new App\Tasktypeset([
                'tasktype1_id'=>$tkt1,
                'tasktype2_id'=>$tkt2,
                'tasktype3_id'=>$tkt3,
                'name'=>'Bung Qua Dua Dau Ho Tong gan sieu sang 01'
            ])
        );
    }
}
