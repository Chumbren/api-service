<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::firstOrCreate([
            'name' => 'Администратор',
            'code' => 'admin',

        ]);
        Role::firstOrCreate([
            'name' => 'Менеджер',
            'code' => 'manager',

        ]);
        //
    }
}
