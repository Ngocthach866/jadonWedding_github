<?php

use Illuminate\Database\Seeder;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\App\Person::truncate();
        \App\Person::create(['name'=>'Thang Hoang','email'=>'thangth@mail.com','gender'=>1]);
        //\App\Person::create(['name'=>'Thach Nguyen','email'=>'thach866@gmail.com','gender'=>1]);

        \App\Person::create(['name'=>'Lam Quach','email'=>'gialamq@gmail.com','gender'=>1]);
        \App\Person::create(['name'=>'Long Nguyen','email'=>'longnguyenv1995@gmail.com','gender'=>1]);
        

        //factory(\App\Person::class,20)->create();
    }
}
