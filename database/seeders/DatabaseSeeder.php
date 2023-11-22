<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\User::factory(10)->admin()->create();

        DB::table('items')->insert([
            'name' => 'Sweet and Sour Pork',
            'type' => 'Main Course',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'sweet-and-sour-pork.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Mapo Tofu',
            'type' => 'Main Course',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'mapo-tofu.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'General Tso\'s Chicken',
            'type' => 'Main Course',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'general-tso.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Orange Chicken',
            'type' => 'Main Course',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'orange-chicken.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Mongolian Beef1',
            'type' => 'Main Course',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'mongolian-beef.png',
        ]);

        DB::table('items')->insert([
            'name' => 'Mongolian Beef2',
            'type' => 'Main Course',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'mongolian-beef.png',
        ]);

        DB::table('items')->insert([
            'name' => 'Mongolian Beef3',
            'type' => 'Main Course',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'mongolian-beef.png',
        ]);

        DB::table('items')->insert([
            'name' => 'Mongolian Beef4',
            'type' => 'Main Course',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'mongolian-beef.png',
        ]);

        DB::table('items')->insert([
            'name' => 'Mongolian Beef5',
            'type' => 'Main Course',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'mongolian-beef.png',
        ]);

        DB::table('items')->insert([
            'name' => 'Sesame Chicken',
            'type' => 'Main Course',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'sesame-chicken.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Chinese Tea',
            'type' => 'Beverage',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'chinese-tea.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Liang Tea',
            'type' => 'Beverage',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'liang-tea.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Soybean Milk',
            'type' => 'Beverage',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'soybean-milk.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Silky Tofu Puding',
            'type' => 'Dessert',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'tofu-pudding.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Pumpkin Cake',
            'type' => 'Dessert',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'pumpkin-cake.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'Sesame Balls',
            'type' => 'Dessert',
            'brief_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'full_description' => 'Eum non necessitatibus reiciendis sapiente eveniet minus aliquid dolores cumque hic doloremque laborum',
            'price' => 10,
            'picture' => 'sesame-balls.jpg',
        ]);
    }
}
