<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::where("code", "admin")->first();
        $role_manager = Role::where("code", "manager")->first();
        $role_user = Role::where("code", "user")->first();
        User::create([
            "surname" => "Распутин",
            'name'=> "Григорий",
            "patronymic" => "Еблатентей",
            "sex" =>1,
            "birthday" => "2005-11-04",
            'password' => "TiPutin@gmail.com",
            'email'=>"TiPutin@gmail.com",
            "api_token"=>null,
            "role_id"=> $role_admin->id,
        ]);
        User::create([
            "surname" => "Распиздяев",
            'name'=> "Глистогон",
            "patronymic" => "Перпендикулярович",
            "sex" =>1,
            "birthday" => "1999-11-04",
            'password' => "Finici@gmail.com",
            'email'=>"Finici@gmail.com",
            "api_token"=>null,
            "role_id"=> $role_manager->id,
        ]);
        User::create([
            "surname" => "Голодомор",
            'name'=> "Чаехлеб",
            "patronymic" => "Впездотеевич",
            "sex" =>1,
            "birthday" => "2008-11-04",
            'password' => "Glada@gmail.com",
            'email'=>"Glada@gmail.com",
            "api_token"=>null,
            "role_id"=> $role_user->id,
        ]);
    }
}
