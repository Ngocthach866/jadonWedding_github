<?php

use Illuminate\Database\Seeder;

class CompanysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //App\Company::truncate();

        $thach=App\Person::create(['name'=>'Thach Nguyen','email'=>'thach866@gmail.com','gender'=>1]);
        $thach->companys()->save(
            new App\Company(['name'=>'jadon'])
        );


        /*$jadon->persons()->create(
            ['name'=>'Thach Nguyen','email'=>'thach866@gmail.com','gender'=>1]
        );

        $jadon->persons()->save(
            new App\person(['name'=>'Thach Nguyen','email'=>'thach866@gmail.com','gender'=>1])
        );*/

        App\company::create(['name'=>'viettravel']);
        App\company::create(['name'=>'Ao Cuoi Viet Nam']);

        App\company::create(['name'=>'Viet Model']);
        App\company::create(['name'=>'Modeling Agency']);

        App\company::create(['name'=>'Delux Car Tan Cang']);
        App\company::create(['name'=>'Harley Phu My Hung']);

    }
}
