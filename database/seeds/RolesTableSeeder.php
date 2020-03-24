<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    protected $data = [
        ['title' => 'Администратор', 'slug' => 'admin'],
        ['title' => 'Пользователь',  'slug' => 'user']
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $item)
        {
            \App\Role::create($item);
        }
    }
}
