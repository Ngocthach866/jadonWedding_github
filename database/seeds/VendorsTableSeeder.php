<?php

use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //App\Vendor::truncate();

        App\Person::create(['name'=>'Tu Tran','email'=>'tuTran@vdrmail.com'])->vendors()->
            save(
                new App\Vendor(['name'=>'Tu may ao cuoi','description'=>'may ao cuoi'])
            );
        
        App\Person::create(['name'=>'Jack Ryan','email'=>'jackr@vdrmail.com'])->vendors()->
        save(
            new App\Vendor(['name'=>'Jack Euro dress','description'=>'nhap ao cuoi chau Au'])
        );

        App\Company::where(['name'=>'viettravel'])->first()->vendors()->
        save(
            new App\Vendor(['name'=>'viettravel','description'=>'dulich'])
        );

        App\Company::where(['name'=>'Ao Cuoi Viet Nam'])->first()->vendors()->
        save(
            new App\Vendor(['name'=>'Ao Cuoi VN','description'=>'ban va thue ao cuoi'])
        );
        
    }
}
