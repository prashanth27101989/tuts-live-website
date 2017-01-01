<?php

use Illuminate\Database\Seeder;
use Jenssegers\Mongodb\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('PostTableSeeder');
    }
}


class PostTableSeeder extends Seeder
{
    public function run()
    {
        App\Post::truncate();

        factory(App\Post::class, 20)->create();
    }
}
