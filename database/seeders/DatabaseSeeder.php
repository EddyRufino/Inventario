<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\DetailEntry;
use App\Models\DetailSale;
use App\Models\Entry;
use App\Models\Product;
use App\Models\Role;
use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(2)
            ->hasEntries(3)
            ->hasSales(3)
            ->create();

        DetailEntry::factory()
            ->count(4)
            ->hasProduct()
            ->hasEntry()
            ->hasStore()
            ->create();

        DetailSale::factory()
            ->count(4)
            ->hasProduct()
            ->hasSale()
            ->hasStore()
            ->create();

        Role::truncate();

        DB::table('roles')->insert([
            'name' => 'admin',
            'display_name' => 'Administrador',
            'description' => 'Soy un administrador'
        ]);

        DB::table('roles')->insert([
            'name' => 'role-2',
            'display_name' => 'Role Two',
            'description' => 'Soy una Role Two'
        ]);

        DB::table('roles')->insert([
            'name' => 'role-3',
            'display_name' => 'Role Three',
            'description' => 'Soy un Role Three'
        ]);

        // Datos para unir los roles con los usuarios

        DB::table('assigned_roles')->insert([
            'user_id' => 1,
            'role_id' => 1,
        ]);

        DB::table('assigned_roles')->insert([
            'user_id' => 2,
            'role_id' => 2,
        ]);

        DB::table('assigned_roles')->insert([
            'user_id' => 3,
            'role_id' => 3,
        ]);
    }
}
