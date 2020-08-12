<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //App\Product::truncate();

        $vdr1=App\Vendor::where('name','LIKE','Tu may ao cuoi')->first()->id;
        $pct1=App\Purchasingtype::where('name','LIKE','ao Co Dau Co Dien 01')->first()->id;
        App\Control::create()->products()->save(
            new App\Product([
                'vendor_id'=>$vdr1,
                'purchasingtype_id'=>$pct1,
                'name'=>'ao co dau co dien ntk Tu Tran',
                'price'=>2000,
                'expireddate'=>'20210101'])
        );

        $vdr2=App\Vendor::where('name','LIKE','Jack Euro dress')->first()->id;
        $pct2=App\Purchasingtype::where('name','LIKE','ao Co Dau Co Dien 01')->first()->id;
        App\Control::create()->products()->save(
            new App\Product([
                'vendor_id'=>$vdr2,
                'purchasingtype_id'=>$pct2,
                'name'=>'ao co dau chau Au JackR',
                'price'=>1400,
                'expireddate'=>'20210101'])
        );

        $vdr3=App\Vendor::where('name','LIKE','Ao Cuoi VN')->first()->id;
        $pct3=App\Purchasingtype::where('name','LIKE','ao Co Dau Suon Xam TH 01')->first()->id;
        App\Control::create()->products()->save(
            new App\Product([
                'vendor_id'=>$vdr3,
                'purchasingtype_id'=>$pct3,
                'name'=>'ao co dau Suon Xam Ao Cuoi VN',
                'price'=>1400,
                'expireddate'=>'20210101'])
        );

        $vdr4=App\Vendor::where('name','LIKE','viettravel')->first()->id;
        $pct4=App\Purchasingtype::where('name','LIKE','ao Co Dau Suon Xam TH 01')->first()->id;
        App\Control::create()->products()->save(
            new App\Product([
                'vendor_id'=>$vdr4,
                'purchasingtype_id'=>$pct4,
                'name'=>'ao co dau Suon Xam Viettravel nhap',
                'price'=>3000,
                'expireddate'=>'20210101'])
        );
    }
}
