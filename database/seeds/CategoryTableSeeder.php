<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CodeIMarket\Models\Category::class, 10)->create()->each(function($c){
            for ($i=0; $i < 5; $i++) {
                $c->products()->save(factory(\CodeIMarket\Models\Product::class)->make());
            }
        });
    }
}
