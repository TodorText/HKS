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
        \Illuminate\Support\Facades\DB::statement('SET foreign_key_checks = 0');
        $this->call(UsersTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(ObjectivesTableSeeder::class);
        $this->call(KeyResultsTableSeeder::class);
        $this->call(PrioritiesTableSeeder::class);
        $this->call(ActionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        \Illuminate\Support\Facades\DB::statement('SET foreign_key_checks = 1');
    }
}
