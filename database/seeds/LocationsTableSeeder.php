<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //App\Location::truncate();

        $vnt1=App\Control::create()->venuetypes()->save(
            new App\Venuetype([
                'name'=>'Sieu Cao Cap tren 1000 khach buoi toi HCM',
                'category'=>'HCM_super_morethan1000_night',
                'master'=>1,
            ])
        )->id;

        App\Control::create()->locations()->save(
            new App\Location([
                'name'=>'Dinh Doc Lap',
                'address'=>'Le Duan',
                'from'=>'2020-12-01 12:00:00',
                'to'=>'2020-12-31 23:00:00',
                'venuetype_id'=>$vnt1,
                'price'=>10000,
                'expireddate'=>'201115'
            ])
        );
    }
}
