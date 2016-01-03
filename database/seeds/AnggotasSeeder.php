<?php

use Illuminate\Database\Seeder;

class AnggotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('anggotas')->delete();

        $anggotas = [
            ['user_id' => 1,
          'no_identitas' => '14020310087',
          'nama' => 'Egi Nugraha',
          'tempat_lahir' => 'Bandung',
          'tanggal_lahir' => '1992-05-17',
          'jenis_kelamin' => '1',
          'alamat' => 'Jalan. Kihapit Timur No.12-B RT.05 RW.20',
          'pekerjaan' => 'Full Stack Web Developer',
          'telepon' => '082318285185',
          'tanggal_daftar' => '2015-12-27',
        ],
        ['user_id' => 1,
          'no_identitas' => '14020310088',
          'nama' => 'Andreas Krisandy R',
          'tempat_lahir' => 'Bandung',
          'tanggal_lahir' => '1992-12-25',
          'jenis_kelamin' => '1',
          'alamat' => 'Jalan. Baros No.141-A RT.02 RW.12',
          'pekerjaan' => 'Web Designer',
          'telepon' => '082318285188',
          'tanggal_daftar' => '2015-12-15',
        ],
        ['user_id' => 2,
          'no_identitas' => '14020310087',
          'nama' => 'Egi Nugraha',
          'tempat_lahir' => 'Bandung',
          'tanggal_lahir' => '1992-05-17',
          'jenis_kelamin' => '1',
          'alamat' => 'Jalan. Kihapit Timur No.12-B RT.05 RW.20',
          'pekerjaan' => 'Full Stack Web Developer',
          'telepon' => '082318285185',
          'tanggal_daftar' => '2015-12-27',
        ],
        ['user_id' => 2,
          'no_identitas' => '14020310087',
          'nama' => 'Egi Nugraha',
          'tempat_lahir' => 'Bandung',
          'tanggal_lahir' => '1992-05-17',
          'jenis_kelamin' => '1',
          'alamat' => 'Jalan. Kihapit Timur No.12-B RT.05 RW.20',
          'pekerjaan' => 'Full Stack Web Developer',
          'telepon' => '082318285185',
          'tanggal_daftar' => '2015-12-27',
        ],
        ['user_id' => 1,
          'no_identitas' => '14020310087',
          'nama' => 'Egi Nugraha',
          'tempat_lahir' => 'Bandung',
          'tanggal_lahir' => '1992-05-17',
          'jenis_kelamin' => '1',
          'alamat' => 'Jalan. Kihapit Timur No.12-B RT.05 RW.20',
          'pekerjaan' => 'Full Stack Web Developer',
          'telepon' => '082318285185',
          'tanggal_daftar' => '2015-12-27',
        ],
        ['user_id' => 2,
          'no_identitas' => '14020310083',
          'nama' => 'Fajar Ahmad Maulana',
          'tempat_lahir' => 'Bandung',
          'tanggal_lahir' => '1992-04-23',
          'jenis_kelamin' => '0',
          'alamat' => 'Jalan. Raya Cimahi No.212-CA RT.01 RW.04',
          'pekerjaan' => 'Guru Sekolah Menengah Atas',
          'telepon' => '082318285132',
          'tanggal_daftar' => '2015-12-12',
        ],
        ];

        DB::table('anggotas')->insert($anggotas);
    }
}
