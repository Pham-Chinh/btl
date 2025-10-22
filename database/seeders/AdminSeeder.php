<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // 1) Tạo role admin (nếu chưa có)
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // 2) Tạo user admin mẫu
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('admin1234'), // nhớ đổi sau
            ]
        );

        // 3) Gán role admin
        if (!$admin->hasRole('admin')) {
            $admin->assignRole($adminRole);
        }
    }
}
