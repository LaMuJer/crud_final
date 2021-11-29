<?php

namespace Database\Seeders;

use Database\Factories\ArticleFactory;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArticleFactory::class);
    }
}
