<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->delete();

      $roles = [
      [
        'id'          => 1,
        'name'        => 'Root',
        'description' => 'Use this account with extreme caution. When using this account it is possible to cause irreversible damage to the system.'
      ],
      [
        'id'          => 2,
        'name'        => 'Administrator',
        'description' => 'Full access to create, edit, and update companies, and orders.'
      ],
      [
        'id'          => 3,
        'name'        => 'Moderator',
        'description' => 'Ability to create new companies and orders, or edit and update any existing ones.'
      ],
      [
        'id'          => 4,
        'name'        => 'User',
        'description' => 'Able to manage the company that the user belongs to, including adding sites, creating new users and assigning licences.'
      ],
      [
        'id'          => 5,
        'name'        => 'Subcriber',
        'description' => 'A standard user that can have a licence assigned to them. No administrative features.'
      ],
      ];

      DB::table('roles')->insert($roles);
    }
}
