<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Евгений',
                'email' => 'eugene.sh@upservice.io',
                'password' => bcrypt('123456'),
                'bill' => 3000
            ],
            [
                'name' => 'Тестовый пользователь',
                'email' => 'test@mail.ru',
                'password' => bcrypt('123456'),
                'bill' => 1850
            ],
        ];

        DB::table('users')->insert($data);
    }
}
