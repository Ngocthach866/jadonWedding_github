<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\App\Project::truncate();

        $hoa=App\Person::where('email','=','hoatran@cltmail.com')->first()->clients()->first()->id;
        App\Project::create(['name'=>'Dam cuoi chi Hoa','client1_id'=>$hoa]);

        $phu=App\Person::where('email','=','phule@cltmail.com')->first()->clients()->first()->id;
        $lien=App\Person::where('email','=','lientran@cltmail.com')->first()->clients()->first()->id;
        App\Project::create(['name'=>'Dam cuoi anh Phu','client1_id'=>$phu,'client2_id'=>$lien]);
        

        App\Person::create(['name'=>'Binh Huynh','email'=>'lientran@cltmail.com'])->clients()->
            save(
                new App\Client(['password'=>'clt004'])
            )->projects_rep1()->
            save(
                new App\Project(['name'=>'Dam cuoi anh Binh'])
            )
            ;

    }
}
