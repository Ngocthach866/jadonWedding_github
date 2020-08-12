<?php

use Illuminate\Database\Seeder;

class PurchasingtypesetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //App\Purchasingtypeset::truncate();

        $pct1=App\Purchasingtype::where('name','=','ao Co Dau Co Dien 01')->first()->id;
        $pct2=App\Purchasingtype::where('name','=','ao Co Dau Suon Xam TH 01')->first()->id;
        $pct3=App\Purchasingtype::where('name','=','ao Co Dau nhap tu Chau Au 01')->first()->id;
        App\Control::create()->purchasingtypes()->save(
            new App\Purchasingtypeset([
                'purchasingtype1_id'=>$pct1,
                'purchasingtype2_id'=>$pct2,
                'purchasingtype3_id'=>$pct3,
                'name'=>'Ao Co Dau VN-A-Au'
            ])
        );
    }
}
