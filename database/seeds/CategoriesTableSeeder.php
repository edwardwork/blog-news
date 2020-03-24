<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    protected $data = ['Спорт', 'Фильмы', 'Наука', 'Игры', 'Животные'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $item)
        {
            \App\Category::create(['title' => $item]);
        }
    }
}
