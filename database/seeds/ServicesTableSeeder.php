<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //App\Service::truncate();

        $prg1=App\Control::create()->programs()->save(new App\Program())->id;
        
        $prj1=App\Project::where('name','=','Dam cuoi chi Hoa')->first()->id;
            
            $psn1=App\Person::where(
                'name','=','Hoa Tran')->first();
            $clt1=App\Client::where(
                'person_id','=',$psn1->id
                )->first()->id;
            
            $cli1=$psn1->clients()->first()->clientinputs_able()->save(
                new App\Clientinput([
                    'project_id'=>$prj1,
                    'client_id'=>$clt1
                ])
            );

        $req1=App\Control::create()->requirements()->save(
            new App\Requirement([
                'project_id'=>$prj1,
                'client_id'=>$clt1,
                'clientinput_id'=>$cli1->id
            ])
        )->id;

        App\Control::create()->services()->save(
            new App\Service([
                'project_id'=>$prj1,
                'requirement_id'=>$req1,
                'program_id'=>$prg1
            ])
        );
    }
}
