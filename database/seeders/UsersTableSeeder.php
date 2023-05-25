<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;
use App\Models\User;
use App\Models\Estados;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name'=>'Admin',
            'fk_id_roles'=>1,
            'fk_id_grupos'=>0,
            'phone'=>'',
            'message'=>'Usuario de sistemas',
            'fk_id_estado'=>14,
            'email'=>'test@test.com',
            'password'=> bcrypt('password'),
            'foto'=>1,
            'activo'=>1,
            'eliminado'=>0,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);


    }
}


