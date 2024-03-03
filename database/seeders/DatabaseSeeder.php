<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // here the attribute u pass with the function create() will override the attribute in the main function .
        // and when we pass the user id .. the post factory don't need to make the 5 users as we pass the id already
       User::factory()->create([

        ]);
        Post::factory(10)->create([

        ]);
//        User::truncate();
//        Post::truncate();
//        Category::truncate();
//        $user =User::factory()->create();
//        $personal=Category::create([
//            'name'=>'Personal',
//            'slug'=>'personal'
//        ]);
//        $work=Category::create([
//            'name'=>'Work',
//            'slug'=>'work'
//        ]);
//        $family=Category::create([
//            'name'=>'Family',
//            'slug'=>'family'
//        ]);
//
//
//        Post::create([
//            'title'=>'MY Family Post',
//            'slug'=>'my-first-post',
//            'category_id'=>$family->id,
//            'user_id'=>$user->id,
//            'excerpt'=>'Lorem ipsum dolor sit amet',
//            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad expedita magnam quia sed. Aliquam delectus dolores, explicabo fuga, hic itaque labore mollitia nesciunt odit placeat quaerat quas sequi tenetur voluptatibus!</p>',
//            'published_at'=>now(),
//        ]);
//        Post::create([
//            'title'=>'MY Work Post',
//            'slug'=>'my-second-post',
//            'category_id'=>$work->id,
//            'user_id'=>$user->id,
//            'excerpt'=>'Lorem ipsum dolor sit amet',
//            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad expedita magnam quia sed. Aliquam delectus dolores, explicabo fuga, hic itaque labore mollitia nesciunt odit placeat quaerat quas sequi tenetur voluptatibus!</p>',
//            'published_at'=>now(),
//        ]);
//        Post::create([
//            'title'=>'MY Personal Post',
//            'slug'=>'my-third-post',
//            'category_id'=>$personal->id,
//            'user_id'=>$user->id,
//            'excerpt'=>'Lorem ipsum dolor sit amet',
//            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad expedita magnam quia sed. Aliquam delectus dolores, explicabo fuga, hic itaque labore mollitia nesciunt odit placeat quaerat quas sequi tenetur voluptatibus!</p>',
//            'published_at'=>now(),
//        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
