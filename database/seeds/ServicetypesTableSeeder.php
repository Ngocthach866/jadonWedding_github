<?php

use Illuminate\Database\Seeder;

class ServicetypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //App\Servicetype::truncate();

        $tts1=App\Tasktypeset::where('name','=','Bung Qua Dua Dau Ho Tong gan sieu sang 01')->first()->id;
        $pts1=App\Purchasingtypeset::where('name','=','Ao Co Dau VN-A-Au')->first()->id;
        $vnt1=App\Venuetype::where('name','=','Sieu Cao Cap tren 1000 khach buoi toi HCM')->first()->id;

        App\Control::create()->servicetypes()->save(
            new App\Servicetype([
                'name'=>'ao Co Dau Co Dien 01',
                'category'=>'Buy_Bride_Dress_Tradition_01',

                'tasktypeset_id'=>$tts1,
                'purchasingtypeset_id'=>$pts1,
                'venuetype_id'=>$vnt1
            ])
        );
    }
}
