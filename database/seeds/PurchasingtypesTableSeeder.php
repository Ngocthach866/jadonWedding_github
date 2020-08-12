<?php

use Illuminate\Database\Seeder;

class PurchasingtypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //App\Purchasingtype::truncate();

        App\Control::create()->purchasingtypes()->save(
            new App\Purchasingtype(['name'=>'ao Co Dau Co Dien 01','category'=>'Buy_Bride_Dress_Tradition_01'])
        );

        App\Control::create()->purchasingtypes()->save(
            new App\Purchasingtype(['name'=>'ao Co Dau Co Dien 02','category'=>'Buy_Bride_Dress_Tradition_02'])
        );

        App\Control::create()->purchasingtypes()->save(
            new App\Purchasingtype(['name'=>'ao Co Dau Suon Xam TH 01','category'=>'Buy_Bride_Dress_Shanghai_01'])
        );

        App\Control::create()->purchasingtypes()->save(
            new App\Purchasingtype(['name'=>'ao Co Dau nhap tu Chau Au 01','category'=>'Buy_Bride_Dress_EuropeanImport_01'])
        );
    }
}
