<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->delete();

      $users = [
      [
        'id'          => 1,
        'role_id'     => 2,
        'name'        => 'Egi Nugraha',
        'email'       => 'eginugraha@mail.com',
        'password'    => bcrypt('666setan'),
        'photo'       => ''
      ],
      [
        'id'          => 2,
        'role_id'     => 2,
        'name'        => 'Andreas Krisandy R',
        'email'       => 'andreas@mail.com',
        'password'    => bcrypt('666setan'),
        'photo'       => ''
      ],
      [
        'id'          => 3,
        'role_id'     => 3,
        'name'        => 'Raihan Almira',
        'email'       => 'raihan@mail.com',
        'password'    => bcrypt('666setan'),
        'photo'       => ''
      ],
      [
        'id'          => 4,
        'role_id'     => 3,
        'name'        => 'Azura Shania',
        'email'       => 'azura@mail.com',
        'password'    => bcrypt('666setan'),
        'photo'       => ''
      ],
      [
        'id'          => 5,
        'role_id'     => 3,
        'name'        => 'Nabila Maulana',
        'email'       => 'nabila@mail.com',
        'password'    => bcrypt('666setan'),
        'photo'       => ''
      ],
      ];

      DB::table('users')->insert($users);
    }
}
