<?php

use Illuminate\Database\Seeder;

class ResourcegroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //App\Resourcegroup::truncate();

        $tkt1=App\Tasktype::where('name','=','Bung Qua va dan chao nguoi mau cao cap')->first()->id;
        $tkt2=App\Tasktype::where('name','=','Xe Dua Dau 20km 10 Chiec Roll Royce')->first()->id;
        $tkt3=App\Tasktype::where('name','=','Xe Ho Tong Dua Dau 20km 20 Chiec Harley')->first()->id;

        App\Control::create()->resourcegroups()->save(
            new App\Resourcegroup([
                'tasktype_id'=>$tkt1,
                'name'=>'Bung Qua NM VietModel-ModelingAgency'
            ])
        );

        App\Control::create()->resourcegroups()->save(
            new App\Resourcegroup([
                'tasktype_id'=>$tkt2,
                'name'=>'Dua Dau gan super Delux Car Tan Cang'
            ])
        );

        App\Control::create()->resourcegroups()->save(
            new App\Resourcegroup([
                'tasktype_id'=>$tkt3,
                'name'=>'Ho Tong Dua Dau gan Harley PMH + nhom anh Binh'
            ])
        );
    }
}
