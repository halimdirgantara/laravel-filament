<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Role::where('name', 'Super Admin')->exists()) {
            Role::create([
                'name' => 'Super Admin',
                'guard_name' => 'web',
            ]);
        }

        Role::create([
            'name' => 'Editor',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'Author',
            'guard_name' => 'web',
        ]);
    }
}
