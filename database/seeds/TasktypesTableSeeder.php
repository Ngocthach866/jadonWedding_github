<?php

use Illuminate\Database\Seeder;

class TasktypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //App\Tasktype::truncate();

        App\Control::create()->purchasingtypes()->save(
            new App\Tasktype([
                'name'=>'Bung Qua sinh vien',
                'category'=>'Team_Reception_GroomHouse_student'
                ])
        );

        App\Control::create()->purchasingtypes()->save(
            new App\Tasktype([
                'name'=>'Bung Qua sinh vien chon loc',
                'category'=>'Team_Reception_GroomHouse_student_selecte'
                ])
        );

        App\Control::create()->purchasingtypes()->save(
            new App\Tasktype([
                'name'=>'Bung Qua va Dan Chao nguoi mau tiep thi',
                'category'=>'Team_Reception_GroomHouse_promoModel'
                ])
        );
    }
}
