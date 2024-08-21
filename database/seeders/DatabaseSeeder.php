<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Category::truncate();
        Post::truncate();
        Schema::enableForeignKeyConstraints();
        User::factory(1)->create();
        Category::factory(5)->create();
        post::factory(30)->create();
        Comment::factory(10)->create();

        // create admin user tuple
            DB::table('users')->insert([
            'username' => 'reza-dehghani',
            'name' => 'Reza',
            'email' => 'test@hireza.ir',
            'password' => bcrypt('password'),
        ]);

        // User::truncate();
        // Post::truncate();
        // Category::truncate();

        // $user = User::factory()->create();
        // $family = Category::create([
        //     'name' => 'خانوادگی',
        //     'slug' => 'خانوادگی'
        // ]);

        // $hobbies = Category::create([
        //     'name' => 'سرگرمی',
        //     'slug' => 'سرگرمی'
        // ]);

        // $work = Category::create([
        //     'name' => 'کار',
        //     'slug' => 'کار'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $hobbies->id,
        //     'title' => 'اولین پست من',
        //     'slug' => 'اولین-پست-من',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, molestiae inventore qui id earum hic asperiores distinctio! Ut itaque ipsum eaque, incidunt sed accusamus architecto cumque possimus, reprehenderit quas suscipit?'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'سلام جهان لاراول',
        //     'slug' => 'سلام-جهان-لاراول',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, molestiae inventore qui id earum hic asperiores distinctio! Ut itaque ipsum eaque, incidunt sed accusamus architecto cumque possimus, reprehenderit quas suscipit?'
        // ]);
    }
}
