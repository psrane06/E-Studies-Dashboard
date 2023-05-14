<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert(
            [
                'name' => 'admin',
                'email' => 'admin@test.com',
                'password' => '$2y$10$X/BEdLqj5AciUqVQdUrXUe/mk8ae6gTR5mcaLBIj95Xh4NSdqf/Lm', //123456
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        DB::table('users')->insert(
            [
                'name' => 'Pankaj',
                'email' => 'test@test.com',
                'password' => '$2y$10$X/BEdLqj5AciUqVQdUrXUe/mk8ae6gTR5mcaLBIj95Xh4NSdqf/Lm', //123456
                'created_at' => now(),
                'updated_at' => now()
            ]
        );

        DB::table('permissions')->insert([
            [
                'name' => 'create_user',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'view_user',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'update_user',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'delete_user',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'create_course',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'view_course',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'update_course',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'delete_course',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        DB::Table('roles')->insert(
            [
                [
                    'name' => 'Admin',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Instructor',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Student',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );

        DB::table('role_permissions')->insert(
            [
                'role_id' => 1,
                'permission_id' => 1
            ]
        );

        DB::table('user_roles')->insert(
            [
                'user_id' => 1,
                'role_id' => 1
            ]
        );

        DB::table('courses')->insert(
            [
                'course_name' => 'Intro to CS',
                'thumbnail' => "storage/app/public/thumbnails/fireship.png",
                'user_id' => 1,
                'description' => 'This is Intro to CS.',
                'start_date' => now(),
                'end_date' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        );

        DB::table('user_courses')->insert(
            [
                'user_id' => 1,
                'course_id' => 1,
                'course_enrolled' => 0,
                'course_completed' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}
