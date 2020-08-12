<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //App\Client::truncate();
        
        $hoa=App\Person::create(['name'=>'Hoa Tran','email'=>'hoatran@cltmail.com','gender'=>0]);
        $hoa->clients()->save(
            new App\Client(['password'=>'clt001'])
        );

        $phu=App\Person::create(['name'=>'Phu Le','email'=>'phule@cltmail.com','gender'=>1]);
        $phu->clients()->save(
            new App\Client(['password'=>'clt002'])
        );

        $lien=App\Person::create(['name'=>'Lien Tran','email'=>'lientran@cltmail.com','gender'=>0]);
        $lien->clients()->save(
            new App\Client(['password'=>'clt003'])
        );

        
    }
}
