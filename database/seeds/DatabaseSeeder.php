<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        $this->call([
            PersonsTableSeeder::class,
            CompanysTableSeeder::class,
            
            EmployeesTableSeeder::class,
            ClientsTableSeeder::class,
            ProjectsTableSeeder::class,
            VendorsTableSeeder::class,
            PurchasingtypeTableSeeder::class,
            ProductsTableSeeder::class
            /*
            
            */
        ]);
    }
}
