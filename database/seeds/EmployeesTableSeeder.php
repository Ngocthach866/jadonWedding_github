<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //App\Employee::truncate();

        $thang=App\Person::where(function($query){
            $query->where('name','like','thang hoang');
            $query->where('email','=','thangth@mail.com');
        })->first();
        $thang->employees()->save(
            new App\Employee(['department'=>'ctr','password'=>'99999'])
        );

        $thach=App\Person::where(function($query){
            $query->where('name','like','thach nguyen');
            $query->where('email','=','thach866@gmail.com');
        })->first();
        $thach->employees()->save(
            new App\Employee(['department'=>'ven','password'=>'88888'])
        );

        $lam=App\Person::where(function($query){
            $query->where('name','like','lam quach');
            $query->where('email','=','gialamq@gmail.com');
        })->first();
        $lam->employees()->save(
            new App\Employee(['department'=>'exc','password'=>'77777'])
        );

        $long=App\Person::where(function($query){
            $query->where('name','like','long nguyen');
            $query->where('email','=','longnguyenv1995@gmail.com');
        })->first();
        $long->employees()->save(
            new App\Employee(['department'=>'pch','password'=>'66666'])
        );
    }
}
