<?php

use Illuminate\Database\Seeder;

class ResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //App\Resource::truncate();

        $ctr1=App\Control::create()->id;
        $rsg1=App\Resourcegroup::where('name','=','Bung Qua NM VietModel-ModelingAgency')->first()->id;
        App\Company::where('name','=','Viet Model')->first()->resources()->save(
            new App\Resource([
                'from'=>'201201',
                'to'=>'201231',
                'dayrate'=>6500,
                'resourcegroup_id'=>$rsg1,
                'control_id'=>$ctr1
            ])
        );

        $ctr2=App\Control::create()->id;
        App\Company::where('name','=','Modeling Agency')->first()->resources()->save(
            new App\Resource([
                'from'=>'201101',
                'to'=>'201231',
                'dayrate'=>3500,
                'resourcegroup_id'=>$rsg1,
                'control_id'=>$ctr2
            ])
        );

        $ctr3=App\Control::create()->id;
        $rsg2=App\Resourcegroup::where('name','=','Dua Dau gan super Delux Car Tan Cang')->first()->id;
        App\Company::where('name','=','Delux Car Tan Cang')->first()->resources()->save(
            new App\Resource([
                'from'=>'201101',
                'to'=>'200115',
                'dayrate'=>7500,
                'resourcegroup_id'=>$rsg2,
                'control_id'=>$ctr3
            ])
        );

        $ctr4=App\Control::create()->id;
        App\Company::where('name','=','Harley Phu My Hung')->first()->resources()->save(
            new App\Resource([
                'from'=>'201101',
                'to'=>'200115',
                'dayrate'=>2300,
                'resourcegroup_id'=>$rsg2,
                'control_id'=>$ctr4
            ])
        );

        $ctr5=App\Control::create()->id;
        $rsg3=App\Resourcegroup::where('name','=','Ho Tong Dua Dau gan Harley PMH + nhom anh Binh')->first()->id;
        App\Person::create(['name'=>'Binh Tran','email'=>'BinhTran@Harleymail.com'])->resources()->save(
            new App\Resource([
                'from'=>'201101',
                'to'=>'200115',
                'dayrate'=>1000,
                'resourcegroup_id'=>$rsg3,
                'control_id'=>$ctr5
            ])
        );
    }
}
