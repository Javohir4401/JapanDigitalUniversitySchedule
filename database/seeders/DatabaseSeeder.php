<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Role;
use App\Models\Room;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); // Foreign key cheklovlarini vaqtincha o‘chirish
        Role::query()->truncate(); // Jadvalni tozalash
        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); // Cheklovlarni qayta yoqish

        $roles = ['admin', 'subject', 'teacher'];

        foreach ($roles as $role) {
            Role::query()->firstOrCreate(['name' => $role]);
        }
    }
}
